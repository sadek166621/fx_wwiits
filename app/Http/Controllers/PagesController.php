<?php

namespace App\Http\Controllers;

use App\Models\Admin\Package;
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
    public function faq(){
        return view('frontend.faq');
    }

    public function sms(){

        $phone = '+8801799382934';
        $message = 'Dear a, Your request has been submitted for Admin approval. Your referral code is a. Please wait for the confirmation.' .'%0a Regards - FX WWIITS.';

        SmsUtility::sendSMS($phone, $message);
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
            return view('frontend.student-refer-code-signup',$data);
        }

        public function studentregistrationform(Request $request){


            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'country_code' => 'required',
                'joining_reason' => 'required',
                'refered_code' => 'required',
                 'image' => 'required',
                'whatsapp_number' => 'required|unique:students',
                //  'email' => 'required|unique:students',
                'password' => 'required|min:6',

                // 'password_confirmation' => 'required|same:password'
            ]);

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
                $referal_code->update([
                    'affiliate_balance'=> $referal_code->affiliate_balance + $request->bonus_amount,
                ]);
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
                        'reference_activation_code'=> $request->reference_activation_code,
                        'joining_reason'=>$request->joining_reason,
                        'code_user_id'=>$member->member_id,
                        'payment_method'=>$request->payment_method,
                        'payment_amount'=>$request->payment_amount,
                        'payment_number'=>$request->payment_number,
                        'transaction_id'=>$request->transaction_id,
                        'image' => $target_image
                    ]);

                    $member->delete();


                // } else {

                //     Toastr::error('error', 'Activation code has expired!', ["positionClass" => "toast-top-right"]);
                //     return redirect()->back()->with('error', 'Activation code has expired.');
                // }

            }
             if($request->reference_activation_code == Null){
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
                        return redirect()->route('profile-settings');
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
        $currentDate = Carbon::now();

        $member = Student::where('id',Session::get('StudentId'))->first();

        $deposit_member = Deposit::where('member_id', Session::get('StudentId'))->get();
        $total_profit = 0;
        if(count($deposit_member)> 1){

            foreach($deposit_member as $deposit){
                $lastEntryDate = $deposit->created_at;
                $differenceInDays = $currentDate->diffInDays($lastEntryDate);
                if($differenceInDays > 0){
                    $total_profit += $deposit->profit_amount * $differenceInDays;
                }
            }
            $member->update([
                'profit'=> $total_profit,
             ]);
        }
        elseif(count($deposit_member) == 1){
            $deposit_member = Deposit::where('member_id', Session::get('StudentId'))->first();
            $lastEntryDate = $deposit_member->created_at;
            $differenceInDays = $currentDate->diffInDays($lastEntryDate);

            if($differenceInDays > 0){
                $member->update([
                    'profit'=> $deposit_member->profit_amount * $differenceInDays,
                 ]);
            }
        }

        // dd($deposit_member);


        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.profile-settings', $data);
      }

      public function balancetransfer(){
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.balance-transfer',$data);
      }


      public function submitbalancetranfer(Request $request){
        // dd($request);
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
        // dd($request);
        if($request->profit == 1 && $request->internal_transfer == 1){
            //  dd($request);
            $dates = Deposit::where('member_id', Session::get('StudentId'))->get();
            foreach( $dates as $date){
                $date->update([
                    'created_at'=> Carbon::now(),
                ]);
            }
            $member->update([
                'bonus'=>$member->bonus + ($member->profit + $member->tranfer_balance) ,
                'tranfer_balance'=>'0',
                'profit'=>'0',
            ]);
        }
        elseif($request->profit == 1 && $request->affiliate_balance == 1){
            // dd('ok');
            $dates = Deposit::where('member_id', Session::get('StudentId'))->get();
            foreach( $dates as $date){
                $date->update([
                    'created_at'=> Carbon::now(),
                ]);
            }
            $member->update([
                'bonus'=>$member->bonus + $member->profit + $member->affiliate_balance ,
                'affiliate_balance'=>'0',
                'profit'=>'0',
            ]);
        }

        elseif($request->internal_transfer == 1 && $request->affiliate_balance == 1){
            $member->update([
                'bonus'=>$member->bonus + ($member->tranfer_balance + $member->affiliate_balance) ,
                'affiliate_balance'=>'0',
                'tranfer_balance'=>'0',
            ]);
        }
        elseif($request->profit == 1 && $request->internal_transfer == 1 && $request->affiliate_balance == 1){
            $dates = Deposit::where('member_id', Session::get('StudentId'))->get();
            foreach( $dates as $date){
                $date->update([
                    'created_at'=> Carbon::now(),
                ]);
            }
            $member->update([
                'bonus'=>$member->bonus + ($member->profit + $member->tranfer_balance + $member->affiliate_balance) ,
                'affiliate_balance'=>0,
                'tranfer_balance'=>0,
                'profit'=> 0,
            ]);
        }
        elseif($request->profit == 1){
            $dates = Deposit::where('member_id', Session::get('StudentId'))->get();
            foreach( $dates as $date){
                $date->update([
                    'created_at'=> Carbon::now(),
                ]);
            }
            $member->update([
                'bonus'=>$member->bonus + $member->profit,
                'profit'=>'0',
            ]);
        }
        elseif($request->affiliate_balance == 1){
            // dd($request);
            $member->update([
                'bonus'=>$member->bonus + $member->affiliate_balance,
                'affiliate_balance'=>'0',
            ]);
        }

        elseif($request->internal_transfer == 1){
            //  dd($request);
            $member->update([
                'bonus'=>$member->bonus + $member->tranfer_balance,
                'tranfer_balance'=>'0',
            ]);
        }

        else{

            if($request->member_id && $request->member_id != Null ){

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
                       }
                       else{
                        return back()->with('error', 'Check Your Wallet Amount');
                       }
                    }
                    else{
                        return back()->with('error', 'No Member ID Found');
                    }

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
        $data['references'] = Student::where('refered_code' , '=', $refer_code->refer_code )->latest()->get();
        $data['lead'] = Student::where('refered_code' , '=', $refer_code->refer_code )->count();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        $today = Carbon::today();
        $data['todayLeadsCount'] = Student::where('refered_code' , '=', $refer_code->refer_code )->whereDate('created_at', $today)->count();

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

        return view('frontend.withdraw',$data);
      }

    //   ================== A Member Submit Withdraw Request =====================

      public function submitpackagewithdrawrequest(Request $request){
        // dd($request);

        // dd($differenceInDays);
        if($request->withdraw_type ==1){

            $amount = Deposit::where('member_id', $request->member_id)->where('package_id',$request->packageId )->first();

            $package = Package::where('id', $request->packageId )->first();
            $currentDate = Carbon::now();
            $lastEntryDate = $amount->created_at;
            $differenceInDays = $currentDate->diffInDays($lastEntryDate);
            // dd($differenceInDays);
            if($amount->amount >= $request->amount && $request->amount != Null ){
                if($package->maturity_time < $differenceInDays)
                {
                    if($package->minimum_withdraw_amount >=  $request->amount )
                    {
                            $withdraw = Withdrawreq::create([
                                'member_id'=> $request->member_id,
                                'withdraw_type'=> 1,
                                'package_id'=> $request->packageId,
                                'withdraw_option'=> $request->withdraw_option,
                                'account_number'=> $request->accounts_number,
                                'amount'=> $request->amount,
                                'date'=> date('Y-m-d'),
                                'package_name'=> $request->packageName,
                            ]);

                            $deposit = Deposit::where('package_id', $withdraw->package_id )->first();
                            $deposit->update([
                                'amount'=> $deposit->amount - $withdraw->amount,
                                'profit_amount'=>  ($deposit->amount - $withdraw->amount) * $package->profit_rate / 100,
                            ]);

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
           $member = Student::where('id', $request->member_id)->first();
            if($member){
                    if($member->bonus >= $request->amount){

                        $withdraw = Withdrawreq::create([
                            'withdraw_type'=> 2,
                            'member_id'=> $request->member_id,
                            'withdraw_option'=> $request->withdraw_option,
                            'account_number'=> $request->accounts_number,
                            'amount'=> $request->amount,
                            'date'=> date('Y-m-d'),
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

}
