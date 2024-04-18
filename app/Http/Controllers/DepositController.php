<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Student;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Session;
use Toastr;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Student::where('id', Session::get('StudentId'))->first();
        if($member){
            $data['student'] = Student::where('id', Session::get('StudentId'))->first();;
            $data['items'] = Deposit::where('member_id', $member->id)->get();
//            dd($data);
            return view('frontend.deposit-list', $data);
        }
        else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $member = Student::where('id', Session::get('StudentId'))->first();
        Deposit::create([
            'member_id' => $member->id,
            'package_id' => $request->package_id,
            'amount' => $request->amount,
            'profit_amount' => $request->profit_amount,
            'status' => 1
        ]);
        $member->update([
            'bonus'=> $member->bonus - $request->amount,
        ]);
        Toastr::success('Amount Deposited Successfully!!', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('deposit.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
