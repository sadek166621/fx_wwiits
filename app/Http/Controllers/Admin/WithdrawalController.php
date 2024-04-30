<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdrawreq;
use App\Models\Admin\Package;
use App\Models\Deposit;
use App\Models\Admin\Student;


// use App\Models\Admin\Student;



class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['withdrawal'] = Withdrawreq::orderBy('id','desc')->get();
       return view('admin.withdraw.list',$data);
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
        //
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
        $withdraw = Withdrawreq::Find($id);
        if($withdraw){
           if($withdraw->withdraw_type == 1){
                $withdraw->status = '1';
                $withdraw->save();

                // $deposit = Deposit::where('package_id', $withdraw->package_id )->first();

                // $deposit->update([
                //     'amount'=> $deposit->amount - $withdraw->amount,
                //     'profit_amount'=>  ($deposit->amount - $withdraw->amount) * getSetting()->profit_rate / 100,
                // ]);

                return back()->with('success','Withdrawal Status Change Successfully');
           }
           else{

                $withdraw->status = '1';
                $withdraw->save();

            //    $member = Student::where('id', $withdraw->member_id)->first();
            //    if($member){
                // $member->update([
                //     'bonus'=>$member->bonus - $withdraw->amount,
                // ]);

                return back()->with('success','Withdrawal Status Change Successfully');

            //    }
           }
        }
        else{
            return back()->with('error','Withdraw Id Not Found');
        }

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


    }
}
