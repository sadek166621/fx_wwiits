<?php

namespace App\Http\Controllers;

use App\Models\Admin\Bank;
use App\Models\Admin\Bonus;
use App\Models\Admin\DepostReturn;
use App\Models\Admin\Package;
use App\Models\BalanceTransfer;
use App\Models\DepositProfit;
use App\Utility\SmsUtility;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Admin\Student;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use App\Models\Admin\Notice;
use App\Models\Admin\News;
use App\Models\Admin\campusmale;
use App\Models\Admin\campusfemale;
use App\Models\Admin\about;
use App\Models\Admin\more;
use App\Models\Admin\Course;
use App\Models\Admin\Passbook;
use App\Models\Admin\onlineclass;
use App\Models\beteacher;
use App\Models\Schedule;
use App\Models\Division;
use App\Models\District;
use App\Models\Admin\Becomeins;
use App\Models\Deposit;
use App\Models\ActivationCode;
use App\Models\Withdrawreq;
use Session;
use DB;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;
use Hash;
use Mail;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        $data['notices'] = Notice::where('status', 1)->limit(5)->get();
        $data['news'] = News::where('status', 1)->limit(5)->get();
        return view('frontend.index', $data);
    }
    public function training(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();

        return view('frontend.training',$data);
    }
    public function trainingSession(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();

        return view('frontend.training-session',$data);
    }
    public function faq(){
        return view('frontend.faq');
    }

    public function sms(){

        $phone = '+8801799382934';
        $message = 'Dear a, Your request has been submitted for Admin approval. Your referral code is a. Please wait for the confirmation.' .'%0a Regards - FX WWIITS.';

        SmsUtility::sendSMS($phone, $message);
    }

    public function updateMember()
    {
        $currentDate = Carbon::now();

        $members = Student::where('status',1)->get();

        foreach ($members as $member){
            $deposit_member = Deposit::where('member_id', $member->id)->where('status', 1)->get();
            $total_profit = 0;
            if($deposit_member != null){
                if(count($deposit_member) > 0){
                    foreach($deposit_member as $deposit){
                        $lastEntryDate = $deposit->approved_at;
                        $differenceInDays = $currentDate->diffInDays($lastEntryDate);
                        // if($deposit->id == 79){
                        //     dd($differenceInDays);
                        // }

                        if($differenceInDays > 0 && $deposit->amount != 0 && $differenceInDays < $deposit->package->maturity_time){

                            DepositProfit::create([
                                'member_id' => $member->id,
                                'deposit_id' => $deposit->id,
                                'package_id' => $deposit->package_id,
                                'profit' => $deposit->profit_amount
                            ]);
                            $total_profit += $deposit->profit_amount * $differenceInDays;

                            //deposit return calculation
                            $deposit_returns = DepostReturn::where('package_id', $deposit->package_id)->get();
//                            dd($deposit_returns);
                            $deposit_days = 0;
                            foreach ($deposit_returns as $deposit_return){
                                $deposit_days += $deposit_return->day;
                                if ($differenceInDays == $deposit_days){
//                                    dd($differenceInDays, $deposit_days );

                                    $returning_amount = $deposit->amount*$deposit_return->return/100;
                                    $member->update([
                                        'bonus' => $member->bonus + $returning_amount
                                    ]);
                                    $deposit->update([
                                        'remaining_balance' => $deposit->remaining_balance - $returning_amount
                                    ]);
                                }
                            }
                            if($deposit->amount != 0){
                                $member->update([
                                    'profit'=> $total_profit,
                                ]);
                                $referal_code = Student::where('refer_code', $member->refered_code)->first();
                                $bonus = Bonus::where('bonus_type', 'affiliate_bonus')->where('package_id', $deposit->package_id)->first();
                                if($referal_code != null){
                                    $referred_code=null;
                                    for($i=0; $i <5; $i++){
                                        if($i == 0 ){
                                            $referal_code->update([
                                                'affiliate_balance'=> $referal_code->affiliate_balance + $deposit->amount * $bonus->first_gen/100,
                                            ]);

                                            $referred_code = $referal_code->refered_code;
                                        }
                                        else{
                                            $referal_code = Student::where('refer_code', $referred_code)->first();
                                            if($referal_code != null){
                                                if($i== 1){
                                                    $bonus_amount = $deposit->amount * $bonus->second_gen/100;
                                                }
                                                if($i== 2){
                                                    $bonus_amount = $deposit->amount * $bonus->third_gen/100;
                                                }
                                                if($i== 3){
                                                    $bonus_amount = $deposit->amount * $bonus->fourth_gen/100;
                                                }
                                                if($i== 4){
                                                    $bonus_amount = $deposit->amount * $bonus->fifth_gen/100;
                                                }

                                                $referal_code->update([
                                                    'affiliate_balance'=> $referal_code->affiliate_balance + $bonus_amount,
                                                ]);
                                                $referred_code = $referal_code->refered_code;

                                            }
                                            else{
                                                break;
                                            }
                                        }
                                    }
                                }

                            }
                        }
                        // maturity gift on deposit maturity
                        else if($differenceInDays == $deposit->package->maturity_time){
                            $gift = $deposit->amount * $deposit->package->maturity_gift/100;
                            $member->update([
                                'bonus' => $member->bonus + $gift
                            ]);
                            $deposit->delete();
                        }
                    }

                }
                $data['email'] = $member->email;
                $data['title'] = 'Daily Account Update';
                $profit = $total_profit;
                // Mail::send('frontend.email.daily-update', ['member'=>$member, 'profit'=>$profit], function ($message) use ($data) {
                //     $message->to($data["email"])
                //         ->subject($data["title"]);
                // });
            }
        }
    }


        public function studentsignin(){
            return view('frontend.student-signin');
        }
        public function course(){
            $data['courses'] = Course::latest()->get();
            return view('frontend.course', $data);
        }
        public function coursedetails($id){
            $data['courses'] = Course::where('id', $id)->first();
            return view('frontend.course-details', $data);
        }
        public function studentsignup(){
            $referal_bonus = DB::table('bonuses')->latest()->first();
            return view('frontend.student-signup', compact('referal_bonus'));
        }

        public function refercodesignup($refer_code){
            $data['referal_bonus'] = DB::table('bonuses')->latest()->first();
            $data['refercode'] = Student::where('refer_code', $refer_code)->first();
            return view('frontend.student-signup',$data);
        }

        public function studentregistrationform(Request $request){

//            return $request;
            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'country_code' => 'required',
                'joining_reason' => 'required',
                'refered_code' => 'required',
                 'image' => 'required',
                'whatsapp_number' => 'required|unique:students',
                  'email' => 'required|unique:students',
                'password' => 'required|min:6 | confirmed',

                // 'password_confirmation' => 'required|same:password'
            ]);
            if($request->select_option == 'payment'){
                $request->validate([
                    'payment_number' => 'required',
                ]);
            }
            if($request->select_option == 'activation_code'){
                $request->validate([
                    'reference_activation_code' => 'required'
                ]);

            }

            if($request->payment_method == 'bkash' || $request->payment_method == 'rocket' || $request->payment_method == 'nagad'){
                $request->validate([
                    'transaction_id' => 'required'
                ]);
            }

            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/students')) {
                    mkdir('assets/images/uploads/students', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/students'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/students', $imageName);

                $target_image = $imageName;
            }

            $referal_code = Student::where('refer_code', $request->refered_code)->first();
            if($referal_code){
                $referral_code_member = $referal_code;
                $this->sendReferralBonusEmail($referral_code_member);
            }
            else{
                Toastr::error('error', 'Invalid Referred Code!', ["positionClass" => "toast-top-right"]);
                return back();
            }
            // $currentTime = now();
            // $activationCodeLifetime = 24 * 60 * 60; // 24 hours in seconds

            //dd($request);
            $member = ActivationCode::where('activation_code', '=' , $request->reference_activation_code )->first();

            // dd($member);

            if($member ){
                // $activationCodeGeneratedTime = $member->activation_code_generated_at;
                // $timeDifference = $currentTime->diffInSeconds($activationCodeGeneratedTime);
                // if ($timeDifference <= $activationCodeLifetime) {
                    $members = Student::create([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'father_name' => $request->father_name,
                        'mother_name' => $request->mother_name,
                        'phone' => $request->whatsapp_number,
                        'whatsapp_number' => $request->whatsapp_number,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'refer_code'=>rand(10000,99999),
                        'refered_code'=>$request->refered_code,
                        'country_code'=>$request->country_code,
                        'address' => $request->address,
                        'status'=> 1,
                        'has_approved'=> 1,
                        'reference_activation_code'=> $request->reference_activation_code,
                        'joining_reason'=>$request->joining_reason,
                        'code_user_id'=>$member->member_id,
                        'payment_method'=>$request->payment_method,
                        'payment_amount'=>$request->payment_amount,
                        'payment_number'=>$request->payment_number,
                        'transaction_id'=>$request->transaction_id,
                        'image' => $target_image
                    ]);

                $referal_code = Student::where('refer_code', $members->refered_code)->where('status', 1)->first();
                $bonus = Bonus::where('bonus_type', 'instant_bonus')->first();
                if($referal_code){

                    for($i=0; $i <=3; $i++){
                        if($i == 0){

                            $referal_code->update([
                                'affiliate_balance'=> $referal_code->affiliate_balance + $bonus->first_gen,
                            ]);

                            $referred_code = $referal_code->refered_code;
                        }
                        else{
                            $referal_code = Student::where('refer_code', $referred_code)->where('status', 1)->first();
                            if($referal_code){
                                if($i== 1){
                                    $bonus_amount = $bonus->second_gen;
                                }
                                if($i== 2){
                                    $bonus_amount = $bonus->third_gen;
                                }
                                if($i== 3){
                                    $bonus_amount = $bonus->fourth_gen;
                                }

                                $referal_code->update([
                                    'affiliate_balance'=> $referal_code->affiliate_balance + $bonus_amount,
                                ]);
                                $referred_code = $referal_code->refered_code;

                            }
                            else{
                                break;
                            }
                        }
                    }
                }

                    $data['email'] = $members->email;
                    $data['title'] = 'Member Sign Up';

                    Mail::send('frontend.email.status-change', ['member'=>$members], function ($message) use ($data) {
                        $message->to($data["email"])
                            ->subject($data["title"]);
                    });

                    $member->delete();



                // } else {

                //     Toastr::error('error', 'Activation code has expired!', ["positionClass" => "toast-top-right"]);
                //     return redirect()->back()->with('error', 'Activation code has expired.');
                // }

            }
             if($request->reference_activation_code == Null){
//                 dd('pk');
                    $members = Student::create([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'father_name' => $request->father_name,
                        'mother_name' => $request->mother_name,
                        'phone' => $request->whatsapp_number,
                        'whatsapp_number' => $request->whatsapp_number,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'refer_code'=>rand(10000,99999),
                        'refered_code'=>$request->refered_code,
                        'country_code'=>$request->country_code,
                        'address' => $request->address,
                        'status'=> 0,
                        'joining_reason'=>$request->joining_reason,
                        'payment_method'=>$request->payment_method,
                        'payment_amount'=>$request->payment_amount,
                        'payment_number'=>$request->payment_number,
                        'transaction_id'=>$request->transaction_id,
                        'image' => $target_image
                    ]);

                 $data['email'] = $members->email;
                 $data['title'] = 'Member Sign Up';
//                    return view('frontend.email.signup', ['member'=>$members]);
                 Mail::send('frontend.email.signup', ['member'=>$members], function ($message) use ($data) {
                     $message->to($data["email"])
                         ->subject($data["title"]);
                 });


             }

            session::put('Rcomment', $members->refer_code);
            session::put('thankyouId', $members->id);

            $register_bonus = Student::where('refer_code', $request->refered_code)->first();
            if($register_bonus){
                $passbook = Passbook::create([
                    'student_id' => $register_bonus->id,
                    'amount' => $request->bonus_amount,
                    'comments' => 'Referral Bonus ID:' .''. session::get('Rcomment'),
                ]);
            }


            $phone = $members->country_code.$members->phone;
            $message = 'Dear '.$members->first_name.', Your request has been submitted . Your referral code is '.$members->refer_code.'.'. '%0a Regards - FX WWIITS.';
            SmsUtility::sendSMS($phone, $message);

            Toastr::success('Success!', 'student Registration successfully!', ["positionClass" => "toast-top-right"]);
            return redirect()->route('thankyou-for-reg');

        }

        public function sendReferralBonusEmail($referal_code)
        {
            $data['email'] = $referal_code->email;
            $data['title'] = 'Member Sign Up Via Referral Code';
            $reference_count= count(Student::where('refered_code' , '=', $referal_code->refer_code )->get());

            Mail::send('frontend.email.referral-bonus', ['member'=>$referal_code, 'reference_count' => $reference_count], function ($message) use ($data) {
                $message->to($data["email"])
                    ->subject($data["title"]);
            });
        }


        public function studentsubmitform(Request $request){
            $customerInfo = Student::where('email', $request->name)
                ->orWhere('phone', $request->name)
                    ->first();
            if( $customerInfo !==null && $customerInfo->status == '1'){
                if($customerInfo) {
                    $existingPassword = $customerInfo->password;
                    if (password_verify($request->password, $existingPassword)) {
                        Session::put('StudentId', $customerInfo->id);
                        Session::put('StudentName', $customerInfo->first_name);

                        Toastr::success('Login Successfully', 'Login', ["positionClass" => "toast-top-right"]);
                        //return redirect('student-enroll-courses');
//                        return redirect()->route('profile-settings');
                        return redirect()->route('member.dashboard');
                    } else {
                        Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
                        return back()->with('message', 'Please use valid password');
                    }
                } else {
                    Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
                    return back()->with('message', 'Please use valid email address');
                }
            }

            else{
                Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
                return back()->with('message', 'Please use valid email address');
            }

        }

        public function genarateactivationcode(){
            $student = Student::where('id', Session::get('StudentId'))->first();
            $activation_codes = ActivationCode::where('member_id', Session::get('StudentId'))->orderBy('id','desc')->get();
            return view('frontend.genarate-activation-code',compact('activation_codes','student'));
        }

        public function deleteactivationcode($id){
           $activation = ActivationCode::find($id);
           $activation->delete();
           return back()->with('success','Your Genarate Activation Code Is Deleted');

        }

    public function activationcode(){

        $member = Student::where('id', Session::get('StudentId'))->first();
        $currentTime = now();
        $setting = getSetting();
        // dd($setting->reg_charge_tk);
        if ($member  && $member->bonus >= $setting->reg_charge) {
                $activationCode = rand(10000, 99999); // Generate the activation code
                $member->update([
                    'bonus' => $member->bonus - $setting->reg_charge,
                ]);
                ActivationCode::create([
                    'member_id'=> Session::get('StudentId'),
                    'activation_code'=> $activationCode,
                    'activation_code_generated_at'=> $currentTime,
                ]);
                session()->flash('alert', 'Your activation code is: ' . $activationCode . '.');

                // Session::put('activationCode',$activationCode );
        }
        else{
            session()->flash('alert', 'Insufficient Balance to generate activation code.');
        }

        return redirect()->back();

    }


    public function studentLogout(){
        Session::forget('StudentId');
        Session::forget('StudentName');
        Toastr::success('Logout Successfully', 'Logout', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home');
    }

     public function adminsignin(){
        return view('frontend.admin-signin');
     }
      public function studentdashboard(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $data['teacher'] = DB::table('teachers')->where('id',59)->first();
        $data['schedules'] = DB::table('schedules')->where('teacher_id',59)->get();
        $data['leader'] = DB::table('assigneds')->where('teacher_id',59)->first();
        return view('frontend.student-dashboard', $data);
      }

      public function profilesettings(){
        // dd($deposit_member);
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.profile-settings', $data);
      }

      public function balancetransfer(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.balance-transfer',$data);
      }


      public function submitbalancetranfer(Request $request){

        $member = Student::where('id', Session::get('StudentId'))->first();

        if (!$request->affiliate_balance || $request->affiliate_balance == NULL) {
            $request->affiliate_balance = 0;
        } else {
            $request->affiliate_balance = 1;
        }

        if (!$request->profit || $request->profit == NULL) {
            $request->profit = 0;
        } else {
            $request->profit = 1;
        }

        if (!$request->internal_transfer || $request->internal_transfer == NULL) {
            $request->internal_transfer = 0;
        } else {
            $request->internal_transfer = 1;
        }

      if($request->profit == 1 || $request->affiliate_balance == 1 || $request->internal_transfer == 1){
          if($request->profit == 1 || $request->affiliate_balance == 1){
              $dates = Deposit::where('member_id', Session::get('StudentId'))->get();
              foreach( $dates as $date){
                  $date->update([
                      'created_at'=> Carbon::now(),
                      'approved_at'=> Carbon::now(),
                  ]);
              }
          }

          if($request->internal_transfer == 1){
              if($member->tranfer_balance > 0){
                  BalanceTransfer::create([
                      'member_id'       => $member->id,
                      'transfer_type'   => 1,
                      'amount'          => $member->tranfer_balance,
                      'transfer_from'   => 3
                  ]);
                  $member->update([
                      'bonus'=>$member->bonus + $member->tranfer_balance ,
                      'tranfer_balance'=>'0',
                  ]);
              }
              else{
                  return back()->with('error', 'Wallet is Empty!!');
              }

          }
          if($request->affiliate_balance == 1 ){
              if($member->affiliate_balance > 0){
                  BalanceTransfer::create([
                      'member_id'       => $member->id,
                      'transfer_type'   => 1,
                      'amount'          => $member->affiliate_balance,
                      'transfer_from'   => 2
                  ]);
                  $member->update([
                      'bonus'=>$member->bonus + $member->affiliate_balance  ,
                      'affiliate_balance'=>0,
                  ]);
              }
              else{
                  return back()->with('error', 'Wallet is Empty!!');
              }



          }
          if($request->profit == 1){
              if ($member->profit > 0){
                  BalanceTransfer::create([
                      'member_id'       => $member->id,
                      'transfer_type'   => 1,
                      'amount'          => $member->profit,
                      'transfer_from'   => 1
                  ]);
                  $member->update([
                      'bonus'=>$member->bonus + $member->profit,
                      'profit'=>'0',
                  ]);
              }
              else{
                  return back()->with('error', 'Wallet is Empty!!');
              }

          }
      }

      elseif($request->member_id && $request->member_id != Null ){

          $updt = Student::where('id', Session::get('StudentId'))->first();
          $find = Student::where('refer_code', $request->member_id)->first();
          if($find){
              if($updt->bonus >= $request->amount ){
                  $find->update([
                      'tranfer_balance'=>$find->tranfer_balance + $request->amount,
                  ]);

                  $updt->update([
                      'bonus'=>$updt->bonus - $request->amount,
                  ]);

                  BalanceTransfer::create([
                      'member_id' => $member->id,
                      'transfer_type' => 2,
                      'amount' => $request->amount,
                      'transferred_to' => $find->id,
                      'transfer_from' => 0
                  ]);
              }
              else{
                  return back()->with('error', 'Check Your Wallet Amount');
              }
          }
          else{
              return back()->with('error', 'No Member ID Found');
          }

      }

        return back()->with('success','Successfully Transfer');

      }

      public function subadminsignin(){
        return view('frontend.sub-admin-signin');
      }

      public function studentprofileupdate(Request $request, $id){

        $student = Student::find($id);

        if($student){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $student->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/students')) {
                    mkdir('assets/images/uploads/students', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/students'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/students', $imageName);

                $target_image = $imageName;
            }

            $voter_id = $student->voter_id_card;
            $image = $request->file('voter_id_card');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/students/voter-id-card')) {
                    mkdir('assets/images/uploads/students/voter-id-card', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/students/voter-id-card'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/students', $imageName);

                $voter_id = $imageName;
            }


            $student->update([
            'phone' => $request->phone,
            'country'=> $request->country,
            'state'=> $request->state,
            'city'=> $request->city,
            'postal_code'=> $request->postal_code,
            'fb_link'=> $request->fb_link,
            'about_me'=> $request->about_me,
            'gender'=> $request->gender,
            'country_code'=>$request->country_code,
            'withdraw_option'=>$request->withdraw_option,
            'account_number'=>$request->account_number,
            'image' => $target_image,
            'voter_id_card' => $voter_id,
            // 'status' => $request->status,
            'address' => $request->address,
            ]);

            Toastr::success('Profile updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return back();
        }

        return back();
      }

      public function subadminlogin(Request $request){

        $customerInfo = Teacher::where('email', $request->email)
            ->first();
        if($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                Session::put('SubadminId', $customerInfo->id);
                Session::put('SubadminName', $customerInfo->name);

                Toastr::success('Login Successfully', 'Login', ["positionClass" => "toast-top-right"]);
                return redirect()->route('sub-admin-dashboard');
            } else {
                Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
                return back()->with('message', 'Please use valid password');
            }
        } else {
            Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
            return back()->with('message', 'Please use valid email address');
        }

      }

      public function subadmindashboard(){

        // $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $departments = Department::where('status',1)->latest()->get();
        $SubadminId=Session::get('SubadminId');
        $subadmin=DB::table('schedules')
            ->join('teachers','schedules.teacher_id','teachers.id')
            ->select('schedules.*','teachers.name')
            ->where('schedules.teacher_id', $SubadminId)
            ->get();
        return view('frontend.sub-admin-dashboard',$data, compact('subadmin','departments'));
      }

      public function addschedule(Request $request){
        $validated = $request->validate([
            'tropic' => 'required',
            'date' => 'required',
            'time' => 'required',
            'finishing_time' => 'required',
             'link' => 'required',
             'department_id' => 'required',
        ]);

        $student = Schedule::create([
            'tropic' => $request->tropic,
            'date' => $request->date,
            'time' => $request->time,
            'finishing_time' => $request->finishing_time,
            'link' => $request->link,
            'teacher_id' => $request->teacher_id,
            'department_id' => $request->department_id,
        ]);

        Toastr::success('Schedule Added Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return Back();
      }

      public function subadminscheduledelete($id){
        $Schedule = Schedule::findOrFail($id);

        if($Schedule){
            $Schedule->delete();
            Toastr::success(' Schedule deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
      }

      public function subadminschedulelogout(){
        Session::forget('SubadminId');
        Session::forget('SubadminName');
        Toastr::success('Logout Successfully', 'Logout', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home');
      }
      public function studentenrollcourses(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.student-enroll-courses',$data);
      }
      public function reference(){
        $refer_code = Student::where('id',Session::get('StudentId'))->first();
        $data['references'] = Student::where('refered_code' , '=', $refer_code->refer_code )->where('status', 1)->latest()->get();

        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $today = Carbon::today();
        $data['todayLeadsCount'] = Student::where('refered_code' , '=', $refer_code->refer_code )->whereDate('created_at', $today)->where('status', 1)->count();
        $first_gen = Student::where('refered_code' , '=', $refer_code->refer_code )->where('status', 1)->count();
        $second_gen = 0;
        $third_gen = 0;
        $fourth_gen = 0;
        foreach (Student::where('refered_code' , '=', $refer_code->refer_code )->where('status', 1)->get() as  $gen2){
            $second_gen += Student::where('refered_code', $gen2->refer_code )->where('status', 1)->count();
            foreach (Student::where('refered_code', $gen2->refer_code )->where('status', 1)->get() as $gen3){
                $third_gen += Student::where('refered_code', $gen3->refer_code )->where('status', 1)->count();
                foreach (Student::where('refered_code', $gen3->refer_code )->where('status', 1)->get() as $gen4){
                    $fourth_gen += Student::where('refered_code', $gen4->refer_code )->where('status', 1)->count();
                }
            }
        }

        $data['generation_users'] = [
            'First Generation'  => $first_gen,
            'Second Generation' => $second_gen,
            'Third Generation'  => $third_gen,
            'Fourth Generation' => $fourth_gen
        ];
          $data['lead'] = $first_gen+$second_gen+$third_gen+$fourth_gen;
        return view('frontend.reference', $data);
      }

      public function usedactivationcode(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $data['activations'] = Student::where( 'code_user_id', Session::get('StudentId'))->orderBy('id','desc')->get();
        return view('frontend.used-activation-code',$data);
      }
      public function passbook(){
        $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();

        return view('frontend.passbook', $data);
      }

      public function withdraw(){
        $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $data['packages'] = Deposit::where('member_id', Session::get('StudentId'))->get();
        $data['withdraws'] = Withdrawreq::where('member_id', Session::get('StudentId'))->get();
        $data['banks'] = Bank::where('status', 1)->get();
        return view('frontend.withdraw',$data);
      }

    //   ================== A Member Submit Withdraw Request =====================

      public function submitpackagewithdrawrequest(Request $request){
//        return $request;
        if($request->withdraw_option == 'bank'){
            $request->validate([
                'bank_id' => ['required'],
                'bank_branch_name' => 'required',
                'bank_account_name' => 'required',
                'bank_branch_code' => 'required',
                'account_number' => 'required',
            ]);
        }

        // dd($differenceInDays);
        if($request->withdraw_type ==1){
            $request->validate([
                'packageId' => 'required',

            ]);
            $amount = Deposit::find($request->packageId);
            $package = Package::where('id', $amount->package_id )->first();

            $currentDate = Carbon::now();
            $lastEntryDate = $amount->created_at;
            $differenceInDays = $currentDate->diffInDays($lastEntryDate);

            $withdraw_amount = $package->usa_amount;
//            dd($package->minimum_withdraw_amount, $amount->amount);
//            dd($withdraw_amount);

            if($amount->amount >= $withdraw_amount && $withdraw_amount != Null ){
                if($package->maturity_time < $differenceInDays)
                {
                    if($package->minimum_withdraw_amount >=  $withdraw_amount )
                    {
                            $withdraw = Withdrawreq::create([
                                'member_id'=> $request->member_id,
                                'withdraw_type'=> 1,
                                'package_id'=> $amount->package_id,
                                'withdraw_option'=> $request->withdraw_option,
                                'account_number'=> $request->accounts_number,
                                'amount'=> $withdraw_amount,
                                'date'=> date('Y-m-d'),
                                'package_name'=> $request->packageName,
                                'bank_id' => $request->bank_id,
                                'bank_branch_name' => $request->bank_branch_name,
                                'bank_account_name' => $request->bank_account_name,
                                'bank_branch_code' => $request->bank_branch_code,

                            ]);

                            $deposit = Deposit::where('id', $request->packageId)->delete();
//                            $deposit = Deposit::where('package_id', $withdraw->package_id )->first();
//                            $deposit->update([
//                                'amount'=> $deposit->amount - $withdraw->amount,
//                                'profit_amount'=>  ($deposit->amount - $withdraw->amount) * $package->profit_rate / 100,
//                            ]);

                            return back()->with('success', 'Withdraw Request Successfully');
                    }
                    else{
                        return back()->with('error', 'Check Your Minimum Withdrawal Amount');
                    }
                }
                else{
                    return back()->with('error', 'Deposit Has Not Mature yet! ');
                }

            }
            else{
                return back()->with('error', 'Check Your Withdraw Request Amount');
            }
        }
        if($request->withdraw_type ==2){
            $request->validate([
                'amount' => 'required',

            ]);
           $member = Student::where('id', $request->member_id)->first();
            if($member){
                    if($member->bonus >= $request->amount){

                        $withdraw = Withdrawreq::create([
                            'withdraw_type'=> 2,
                            'member_id'=> $request->member_id,
                            'withdraw_option'=> $request->withdraw_option,
                            'account_number'=> $request->account_number,
                            'amount'=> $request->amount,
                            'date'=> date('Y-m-d'),
                            'bank_id' => $request->bank_id,
                            'bank_branch_name' => $request->bank_branch_name,
                            'bank_account_name' => $request->bank_account_name,
                            'bank_branch_code' => $request->bank_branch_code,
                        ]);

                        $updatemember = Student::where('id', $withdraw->member_id)->first();

                        $updatemember->update([
                        'bonus'=>$updatemember->bonus - $withdraw->amount,
                        ]);

                        return back()->with('success', 'Withdraw Request Successfully');



                    }
                    else{
                        return back()->with('error', 'Insufficient Balance ! ');
                    }

            }
            else{
                return back()->with('error','No Member Found !');
            }

        }


// ==================================End =============================

    }
      public function passwordchange(){
        $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.passwordchange',$data);
      }
      public function passwordchangeSubmit(Request $request){
        $student = Student::where('id', Session::get('StudentId'))->first();
        if (password_verify($request->old_password, $student->password)) {
            $student->password = Hash::make($request->new_password);
            $student->save();

            Toastr::success('Password changed successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return back();
        }

        Toastr::error('Please enter valid password!', 'Error', ["positionClass" => "toast-top-right"]);
        return back()->with('message', 'Invalid password!');
      }
      public function blog(){
        return view('frontend.blog');
      }
      public function about(){
        return view('frontend.about');
      }
      public function contact(){
        return view('frontend.contact');
      }
    public function deposit(){
        return view('frontend.deposit');
    }
      public function support(){
        return view('frontend.support');
      }
      public function privactpolicy(){
        return view('frontend.privactpolicy');
      }
      public function cookiepolicy(){
        return view('frontend.cookiepolicy');
      }
      public function instractor(){
        return view('frontend.instractor');
      }




      public function thankyouforreg(){

        $data['thankyou'] = Student::where('id', session::get('thankyouId') )->first();
        return view('frontend.thankyou', $data);
      }



      public function becomeinstractor(){

        if(Session::get('BecomeinstractorId')){
            return view('frontend.become-instractor');
        }
        else{
            return view('frontend.become-instractor-login');
        }

      }
      public function becomeinstractorlogin(Request $request){
        $customerInfo = Student::where('email', $request->email)
        ->first();
        if($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                Session::put('BecomeinstractorId', $customerInfo->id);
                Session::put('BecomeinstractorName', $customerInfo->name);

                Toastr::success('Login Successfully', 'Login', ["positionClass" => "toast-top-right"]);
                return redirect()->route('become-instractor');
            } else {
                Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
                return back()->with('message', 'Please use valid password');
            }
        } else {
            Toastr::error('Please Check Again', 'Error', ["positionClass" => "toast-top-right"]);
            return back()->with('message', 'Please use valid email address');
        }
      }

      public function verifycertificate(){
        return view('frontend.verify-certificate');
      }

      public function bapplication(Request $request) {

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $becomeins=Becomeins::create([

            'b_first_name'=>$request->first_name,
            'b_last_name'=>$request->last_name,
            'b_account_type'=>$request->account_type,
            'b_professional_title'=>$request->professional_title,
            'b_phone_number'=>$request->phone_number,
            'b_address'=>$request->address,
            'b_bio'=>$request->about_me,
            'status'=>$request->status,

        ]);
        Toastr::success('Instructor added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
      }

      public function bapplicationlist() {
        $data['becomeins'] = Becomeins::latest()->get();
         return view('admin.become-instructor.list', $data);
      }

      public function binstrustordelete($id) {
        $becomeins = Becomeins::findOrFail($id);

        if ($becomeins) {

            $becomeins->delete();
        }

        return back();
      }

      public function depositPackage()
      {
          $data['student'] = Student::where('id', Session::get('StudentId'))->first();
          $data['items'] = Package::where('status', 1)->latest()->get();
          return view('frontend.deposit-package', $data);
      }

      public function depositdetails($id){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $data['item'] = Package::find($id);
        return view('frontend.package-details-for-deposit',$data);
      }

      public function dashboard()
      {
          $currentDate = Carbon::now();

          $members = Student::where('status',1)->get();

          foreach ($members as $member){
              $deposit_member = Deposit::where('member_id', $member->id)->where('status', 1)->get();
              $total_profit = 0;
              if(count($deposit_member)> 1){

                  foreach($deposit_member as $deposit){
                      $lastEntryDate = $deposit->created_at;
                      $differenceInDays = $currentDate->diffInDays($lastEntryDate);
                      if($differenceInDays > 0 && $deposit->amount != 0){
                          $total_profit += $deposit->profit_amount * $differenceInDays;
                      }
                  }
                  if($deposit->amount != 0){
                      $member->update([
                          'profit'=> $total_profit,
                      ]);
                  }
              }
              elseif(count($deposit_member) == 1){
                  $deposit_member = Deposit::where('member_id', $member->id)->first();
                  $lastEntryDate = $deposit_member->created_at;
                  $differenceInDays = $currentDate->diffInDays($lastEntryDate);

                  if($differenceInDays > 0 && $deposit_member->amount != 0){
                      $member->update([
                          'profit'=> $deposit_member->profit_amount * $differenceInDays,
                      ]);
                  }
              }
          }
          $data['student'] = Student::where('id',Session::get('StudentId'))->first();
          $data['deposits'] = Deposit::select('package_id')->where('member_id', $data['student']->id)->where('status', 1)->distinct()->get();
//          return $data ;
          return view('frontend.member-dashboard', $data);
      }

      public function getBank()
      {
          return response()->json(Bank::where('status', 1)->get());
      }


}
