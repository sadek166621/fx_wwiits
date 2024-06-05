<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Bank::latest()->get();
        return view('admin.bank.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return 'ok';
        return view('admin.bank.form');
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
            'bank_name' => 'required',

        ]);

        if ($request->status != null){
            $request->status = 1;
        }
        else{
            $request->status = 0;
        }

        Bank::create([
            'bank_name' => $request->bank_name,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.bank.list')->with('success','Bank Added Successfully');
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
        $data['item'] = Bank::findOrFail($id);
        return view('admin.bank.form',$data);
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
            'bank_name' => 'required',

        ]);

        if ($request->status != null){
            $request->status = 1;
        }
        else{
            $request->status = 0;
        }
        $bank = Bank::find($id);
        $bank->update([
            'bank_name' => $request->bank_name,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.bank.list')->with('success','Bank Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();
        return redirect()->route('admin.bank.list')->with('success','Bank Removed Successfully');

    }
}
