<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Bonus;
use App\Models\Admin\DepositReferralBonus;
use App\Models\Admin\Student;
use App\Models\Deposit;
use App\Models\DepositProfit;
use Illuminate\Http\Request;
use Session;
use Toastr;
use Mail;

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
            $data['items'] = Deposit::where('member_id', $member->id)->latest()->get();
//            dd($data);
            return view('frontend.deposit-list', $data);
        }
        else{
            return back();
        }
    }

    public function depositRequest()
    {
        $deposit = Deposit::latest();
        if(isset($_GET['member_id']) && $_GET['member_id'] > 0){
            $member = Student::where('refer_code', $_GET['member_id'])->first();
            if($member != null){
                $deposit = $deposit->where('member_id', $member->id);
            }
            else{
                $deposit = $deposit->where('member_id', '');
            }
        }
        $data['items'] = $deposit->get();
        return view('admin.deposit.request', $data);
    }

    public function profithistory($id){
        $member = Student::where('id', Session::get('StudentId'))->first();
//        $data['deposit'] = Deposit::findOrFail($id);
        $data['deposit_profit'] = DepositProfit::where('deposit_id', $id)->where('member_id', $member->id)->get();
        $data['student'] = $member;
        // dd($data);

        return view('frontend.deposit-profit-history',$data);
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
        $deposit = Deposit::create([
            'member_id' => $member->id,
            'package_id' => $request->package_id,
            'amount' => $request->amount,
            'remaining_balance' => $request->amount,
            'profit_amount' => $request->profit_amount,
            'status' => 1
        ]);
        $member->update([
            'bonus'=> $member->bonus - $request->amount,
        ]);


        $referred_by = Student::where('refer_code', $member->refered_code)->first();
        if($referred_by != null){
            $referral_bonus = Bonus::where('package_id', $deposit->package_id)->where('bonus_type', 'referral_bonus')->first();
            for ($i=0; $i<=2; $i++){
                if($i==0 && $referred_by != null){
                    $referred_by->update([
                        'affiliate_balance'=> $referred_by->affiliate_balance + $deposit->amount *$referral_bonus->first_gen/100,
                    ]);
                }
                if($i==1 && $referred_by != null){
                    $referred_by->update([
                        'affiliate_balance'=> $referred_by->affiliate_balance + $deposit->amount *$referral_bonus->second_gen/100,
                    ]);
                }
                if($i==2 && $referred_by != null){
                    $referred_by->update([
                        'affiliate_balance'=> $referred_by->affiliate_balance + $deposit->amount *$referral_bonus->third_gen/100,
                    ]);
                }

                if($referred_by != null){
                    $referred_by = Student::where('refer_code', $referred_by->refered_code)->first();
                }
            }
        }

        $data['email'] = $member->email;
        $data['title'] = 'Deposit Notification';
//        return view('frontend.email.deposit', ['member'=>$member, 'deposit' => $deposit ]);
        Mail::send('frontend.email.deposit', ['member'=>$member, 'deposit' => $deposit ], function ($message) use ($data) {
            $message->to($data["email"])
                ->subject($data["title"]);
        });

        Toastr::success('Package Has Been Deposit Successfully!!', 'success', ["positionClass" => "toast-top-right"]);
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

    public function changeStatus(Request $request)
    {
//        return $request;
        $deposit = Deposit::find($request->id);
        $deposit->update([
            'status' => $request->status,
            'approved_at' => date('Y-m-d H:i:s')
        ]);
        if($request->status == 1){
            Toastr::success('Deposit Activated Successfully!!', 'success', ["positionClass" => "toast-top-right"]);
        }
        else{
//            $member = Student::find($deposit->member_id);
//            $member->update([
//                'bonus'=> $member->bonus + $deposit->amount,
//            ]);
            Toastr::success('Deposit Set on Hold Successfully!!', 'success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
