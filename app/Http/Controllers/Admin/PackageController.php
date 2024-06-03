<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Bonus;
use App\Models\Admin\DepostReturn;
use App\Models\Admin\Package;
use Illuminate\Http\Request;
use Toastr;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Package::latest()->get();
        return view('admin.package.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $request->validate([
            'package_name'          => 'required',
            'package_type'          => 'required',
            'usa_amount'            => 'required',
            'profit'                => 'required',
            // 'bd_amount'     => 'required',
            'maturity_time'         => 'required',
            'ref_bonus_first_gen'   => 'required',
            'aff_bonus_first_gen'   => 'required',
            'return'                => 'required',
            'day'                   => 'required',
            'maturity_gift'         => 'required',
            'deposit_return_policy' => 'required',
        ]);

        $total_days = 0;
        $total_return = 0;
        for ($i=0; $i<5; $i++){
            $total_days +=  $request->day[$i];
            $total_return += $request->return[$i];
        }
        if($total_days > $request->maturity_time || $total_return > 100){
            Toastr::error('Total Return Days or Return Amount Invalid', 'Failed', ["positionClass" => "toast-top-right"]);
            return back();
        }

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $package = Package::create([
            'package_name'          => $request->package_name,
            'package_type'          => $request->package_type,
            'usa_amount'            => $request->usa_amount,
            'profit_rate'           => $request->profit_rate,
            'profit'                => $request->profit,
            'bd_amount'             => $request->bd_amount,
            'status'                => $request->status,
            'maturity_time'         => $request->maturity_time,
            'maturity_gift'         => $request->maturity_gift,
            'minimum_withdraw_amount' => $request->usa_amount,
            'terms'                 => $request->terms,
            'deposit_return_policy' => $request->deposit_return_policy,
        ]);

        $referral_bonus = Bonus::create([
            'package_id' => $package->id,
            'bonus_type' => 'referral_bonus',
            'first_gen' => $request->ref_bonus_first_gen,
            'second_gen' => $request->ref_bonus_second_gen,
            'third_gen' => $request->ref_bonus_third_gen,
        ]);

        $affiliate_bonus = Bonus::create([
            'package_id' => $package->id,
            'bonus_type' => 'affiliate_bonus',
            'first_gen' => $request->aff_bonus_first_gen,
            'second_gen' => $request->aff_bonus_second_gen,
            'third_gen' => $request->aff_bonus_third_gen,
            'fourth_gen' => $request->aff_bonus_fourth_gen,
        ]);

        for ($i=0; $i<5; $i++){
            DepostReturn::create([
                'package_id' => $package->id,
                'day' => $request->day[$i],
                'return' => $request->return[$i],
            ]);
        }

        Toastr::success('Package added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.package.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item'] = Package::findOrFail($id);
        $data['deposit_returns'] = DepostReturn::where('package_id', $id)->get();
        //dd($data['return']);
        $data['affiliate_bonus'] = Bonus::where('package_id', $id)->where('bonus_type', 'referral_bonus')->first();
        $data['referral_bonus'] = Bonus::where('package_id', $id)->where('bonus_type', 'affiliate_bonus')->first();
        return view('admin.package.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'package_name'          => 'required',
            'package_type'          => 'required',
            'usa_amount'            => 'required',
            'profit'                => 'required',
            'return'                => 'required',
            'day'                   => 'required',
            'maturity_gift'         => 'required',
            'deposit_return_policy' => 'required'
        ]);
        $total_days = 0;
        $total_return = 0;
        for ($i=0; $i<5; $i++){
            $total_days +=  $request->day[$i];
            $total_return += $request->return[$i];
        }
        if($total_days > $request->maturity_time || $total_return > 100){
            Toastr::error('Total Return Days or Return Amount Invalid', 'Failed', ["positionClass" => "toast-top-right"]);
            return back();
        }



        $package = Package::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $package->update([
            'package_name'              => $request->package_name,
            'package_type'              => $request->package_type,
            'usa_amount'                => $request->usa_amount,
            'profit_rate'               => $request->profit_rate,
            'profit'                    => $request->profit,
            'bd_amount'                 => $request->bd_amount,
            'terms'                     => $request->terms,
            'deposit_return_policy'     => $request->deposit_return_policy,
            'status'                    => $request->status,
            'minimum_withdraw_amount'   => $request->usa_amount,

        ]);

        $referral_bonus = Bonus::where('package_id', $package->id)->where('bonus_type', 'referral_bonus')->first();
            $referral_bonus->update([
            'package_id' => $package->id,
            'bonus_type' => 'referral_bonus',
            'first_gen' => $request->ref_bonus_first_gen,
            'second_gen' => $request->ref_bonus_second_gen,
            'third_gen' => $request->ref_bonus_third_gen,
        ]);

        $affiliate_bonus =  Bonus::where('package_id', $package->id)->where('bonus_type', 'affiliate_bonus')->first();
        $affiliate_bonus->update([
            'first_gen' => $request->aff_bonus_first_gen,
            'second_gen' => $request->aff_bonus_second_gen,
            'third_gen' => $request->aff_bonus_third_gen,
            'fourth_gen' => $request->aff_bonus_fourth_gen,
        ]);

        $return = DepostReturn::where('package_id', $package->id)->delete();
        for ($i=0; $i<5; $i++){
            DepostReturn::create([
                'package_id' => $package->id,
                'day' => $request->day[$i],
                'return' => $request->return[$i],
            ]);
        }

        Toastr::success('Package updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.package.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        Toastr::success('Package Removed successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
