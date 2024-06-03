<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Student;
use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Toastr;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fund = Balance::where('status', 0)->latest();
        if (isset($_GET['member_id']) && $_GET['member_id'] > 0){
            $student = Student::where('refer_code', $_GET['member_id'])->first();
            if($student != null){
                $fund= $fund->where('member_id', $student->id);
            }
        }
        $data['items'] = $fund->get();
        return view('admin.balance-request.index', $data);
    }

    public function history()
    {
        if(Auth::user()){
            $fund = Balance::where('status', 1)->latest();
            if (isset($_GET['member_id']) && $_GET['member_id'] > 0){
                $student = Student::where('refer_code', $_GET['member_id'])->first();
                if($student != null){
                    $fund= $fund->where('member_id', $student->id);
                }
            }
            $data['items'] = $fund->get();
            return view('admin.balance-request.transfer-history', $data);

        }
        else{
            $data['student'] = Student::where('id',Session::get('StudentId'))->first();
            $data['items'] = Balance::where('member_id', Session::get('StudentId'))->where('status', 1)->latest()->get();
            // return $data;
            return view('frontend.balance-add-history', $data);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['student'] = Student::where('id',Session::get('StudentId'))->first();
        return view('frontend.balance-add', $data);
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
            'amount' => ['required'],
            'account_number' => ['required'],
            'payment_method' => ['required']
        ]);
        if($request->payment_method == 'bkash' || $request->payment_method == 'nagad' || $request->payment_method == 'rocket'){
            $request->validate([
                'transaction_id' => ['required'],
            ]);
        }
        Balance::create(
            [
                'member_id' => Session::get('StudentId'),
                'amount' => $request->amount,
                'paid_to' => $request->paid_to,
                'transaction_id' => $request->transaction_id,
                'payment_method' => $request->payment_method,
                'account_number' => $request->account_number,
                'status' => 0
            ]
        );
        Toastr::success('Request For Balance Submitted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    public function changeStatus(Request $request)
    {
//        return $request;
        $balance_request = Balance::findOrFail($request->id);
//        return $balance_request;

        $member = Student::find($balance_request->member_id);
        $new_amount = $member->bonus + $balance_request->amount;
//        return $member;
        $balance_request->update([
            'status' => $request->status,
        ]);
        if($request->status == 1){
            $member->update([
                'bonus' => $new_amount,
            ]);
        }
        Toastr::success('Request For Balance Approved Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
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
