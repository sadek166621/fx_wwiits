<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DepositReferralBonus;
use Illuminate\Http\Request;
use Toastr;

class DepositReferralBonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = DepositReferralBonus::latest()->get();
        return view('admin.deposit-referral-bonus.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deposit-referral-bonus.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'generation' =>['required', 'unique:deposit_referral_bonuses'],
            'amount' => ['required']
        ]);

        if($request->status){
            $request->status = 1;
        }
        else{
            $request->status = 0;
        }

        DepositReferralBonus::create([
            'title' => $request->title,
            'generation' => $request->generation,
            'amount' => $request->amount,
            'bonus_type' => $request->bonus_type,
            'status' => $request->status
        ]);

        Toastr::success('Deposit bonus added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.deposit-bonus.list');
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
        $data['item'] = DepositReferralBonus::findOrFail($id);
        return view('admin.deposit-referral-bonus.form', $data);
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
            'generation' =>['required'],
            'amount' => ['required']
        ]);

        if($request->status){
            $request->status = 1;
        }
        else{
            $request->status = 0;
        }

        $deposit_bonus = DepositReferralBonus::findOrFail($id);

        if($request->generation != $deposit_bonus->generation){
            $request->validate([
                'generation' =>['unique:deposit_referral_bonuses'],
            ]);
        }

        $deposit_bonus->update([
            'title' => $request->title,
            'generation' => $request->generation,
            'amount' => $request->amount,
            'bonus_type' => $request->bonus_type,
            'status' => $request->status
        ]);

        Toastr::success('Deposit bonus updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.deposit-bonus.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deposit_bonus = DepositReferralBonus::findOrfail($id);
        $deposit_bonus->delete();
        Toastr::success('Deposit bonus deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
