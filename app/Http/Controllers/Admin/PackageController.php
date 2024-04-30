<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Package;
use Illuminate\Http\Request;

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
    //    return $request;
        $request->validate([
            'package_name'  => 'required',
            'package_type'  => 'required',
            'usa_amount'    => 'required',
            'profit'        => 'required',
            // 'bd_amount'     => 'required',
            'maturity_time' => 'required'
        ]);

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
            // 'minimum_withdraw_time' => $request->minimum_withdraw_time,
            'terms'                 => $request->terms,
        ]);

        $package->update([
        'minimum_withdraw_amount' => $request->usa_amount - ($request->usa_amount * $request->minimum_withdraw_amount /100) ,
        ]);

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
            'package_name'  => 'required',
            'package_type'  => 'required',
            'usa_amount'    => 'required',
            'profit'        => 'required',
        ]);

        $package = Package::findOrFail($id);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $package->update([
            'package_name'  => $request->package_name,
            'package_type'  => $request->package_type,
            'usa_amount'    => $request->usa_amount,
            'profit_rate'   => $request->profit_rate,
            'profit'        => $request->profit,
            'bd_amount'     => $request->bd_amount,
            'terms'         => $request->terms,
            'status'        => $request->status,
            'minimum_withdraw_amount' => $request->usa_amount - ($request->usa_amount * $request->minimum_withdraw_amount /100) ,

        ]);

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
        return back();
    }
}
