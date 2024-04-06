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

    // public function vicePrincipalMessage()
    // {
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['setting'] = Setting::first();
    //     return view('frontend.vice_principal_message', $data);
    // }

    // public function principalMessage()
    // {
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['setting'] = Setting::first();
    //     return view('frontend.principal_message', $data);
    // }

    // public function teacher()
    // {
    //     if(isset($_GET['department']) && $_GET['department']>0){
    //         $data['teachers'] = Teacher::where('department_id', $_GET['department'])->where('gender',1)->latest()->get();
    //     }else{
    //         $data['teachers'] = Teacher::where('status', 1)->where('gender',1)->get();
    //     }
    //     $data['departments'] = Department::where('status',1)->latest()->get();
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.teachers', $data);
    // }
    // public function femaleteacher()
    // {
    //     if(isset($_GET['department']) && $_GET['department']>0){
    //         $data['teachers'] = Teacher::where('department_id', $_GET['department'])->where('gender',2)->latest()->get();
    //     }else{
    //         $data['teachers'] = Teacher::where('status', 1)->where('gender',2)->get();
    //     }
    //     $data['departments'] = Department::where('status',1)->latest()->get();
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.femaleteachers', $data);
    // }
    // public function staff()
    // {
    //     if(isset($_GET['location']) && $_GET['location']>0){
    //         $data['staffs1st'] = Staff::where('location_id', $_GET['location'])->where('class', 1)->latest()->get();
    //         $data['staffs2nd'] = Staff::where('location_id', $_GET['location'])->where('class', 2)->latest()->get();
    //         $data['staffs3rd'] = Staff::where('location_id', $_GET['location'])->where('class', 3)->latest()->get();
    //         $data['staffs4th'] = Staff::where('location_id', $_GET['location'])->where('class', 4)->latest()->get();
    //     }else{
    //         $data['staffs1st'] = Staff::where('status', 1)->where('class', 1)->get();
    //         $data['staffs2nd'] = Staff::where('status', 1)->where('class', 2)->get();
    //         $data['staffs3rd'] = Staff::where('status', 1)->where('class', 3)->get();
    //         $data['staffs4th'] = Staff::where('status', 1)->where('class', 4)->get();
    //     }
    //     $data['locations'] = Location::where('status',1)->latest()->get();
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.staffs', $data);
    // }
    // public function teacherShow($username)
    // {
    //     $data['teacher'] = Teacher::where('username', $username)->first();
    //     if($data['teacher']){
    //         $data['setting'] = Setting::first();
    //         $data['sliders'] = Slider::where('status', 1)->get();
    //         $data['locations'] = Department::where('status',1)->latest()->get();
    //         return view('frontend.teacher_profile', $data);
    //     }
    //     return redirect()->route('teacher.list');
    // }

    // public function staffShow($username){
    //     $data['staff'] = Staff::where('username', $username)->first();
    //     if($data['staff']){
    //         $data['setting'] = Setting::first();
    //         $data['sliders'] = Slider::where('status', 1)->get();
    //         $data['locations'] = Department::where('status',1)->latest()->get();
    //         return view('frontend.staff_profile', $data);
    //     }
    //     return redirect()->route('staff.list');
    // }

    // public function notice()
    // {
    //     if(isset($_GET['type']) && $_GET['nottypeice']>0){
    //         $data['notices'] = Notice::where('notice_id', $_GET['notice'])->latest()->get();
    //     }else{
    //         $data['notices'] = Notice::where('status', 1)->get();
    //     }
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.notices', $data);
    // }

    // public function noticeGeneral()
    // {
    //     $data['notices'] = Notice::where('status', 1)->where('type', 1)->get();

    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.notices', $data);
    // }

    // public function noticeOther()
    // {
    //     $data['notices'] = Notice::where('status', 1)->where('type', 2)->get();

    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.notices', $data);
    // }

    // public function noticeShow($id)
    // {
    //     $data['notice'] = Notice::findOrFail($id);

    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.notice_single', $data);
    // }

    // public function news()
    // {
    //     $data['news'] = News::where('status', 1)->get();
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.news', $data);
    // }

    // public function newsShow($id)
    // {
    //     $data['news'] = News::findOrFail($id);

    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.news_single', $data);
    // }

    // public function importantlinks(){

    // }
    // public function quranreadingcourse(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_reading_course', $data);
    // }

    // public function quranicarabiccourse(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_icarabic_course', $data);
    // }
    // public function quranmemorizationcourse(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_memorization_course', $data);
    // }
    // public function quranreadingcoursea(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_reading_course_a', $data);
    // }
    // public function quranicarabiccoursea(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_icarabic_course_a', $data);
    // }
    // public function quranmemorizationcoursea(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusmale'] = campusmale::first();
    //     return view('frontend.quran_memorization_course_a', $data);
    // }
    // public function forwhom(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['about'] = about::first();
    //     return view('frontend.for-whom', $data);
    // }
    // public function sfp(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['about'] = about::first();
    //     return view('frontend.sfp', $data);
    // }
    // public function ilq(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['about'] = about::first();
    //     return view('frontend.ilq', $data);
    // }
    // public function quranreadingcoursef(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view('frontend.quran_reading_course_f', $data);
    // }
    // public function quranicarabiccoursef(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view ('frontend.quran_icarabic_course_f', $data);
    // }
    // public function quranmemorizationcoursef(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view ('frontend.quran_memorization_course_f', $data);
    // }
    // public function quranreadingcoursefa(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view('frontend.quran_reading_course_f_a', $data);
    // }
    // public function quranicarabiccoursefa(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view('frontend.quran_icarabic_course_f_a', $data);
    // }
    // public function quranmemorizationcoursefa(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['campusfemale'] = campusfemale::first();
    //     return view('frontend.quran_memorization_course_f_a', $data);
    // }
    // public function contact(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     return view('frontend.contact', $data);
    // }
    // public function BasicsofIslamCampus(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['more'] = more::first();
    //     return view('frontend.basic-of-islam-campus', $data);
    // }
    // public function BePartofUs(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['more'] = more::first();
    //     return view('frontend.Be-Part-of-Us', $data);
    // }
    // public function DonateUs(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['more'] = more::first();
    //     return view('frontend.Donate-Us', $data);
    // }
    // public function studentadmission(){
    //     $data['divisions'] = Division::all();
    //     return view('frontend.student-register',$data);
    // }
    // public function beateacher(){
    //     $data['setting'] = Setting::first();
    //     return view('frontend.be-a-teacher', $data);
    // }
    // public function onlineclass(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['onlineclass'] = onlineclass::get();
    //     return view('frontend.onlineclass', $data);
    // }
    // public function teacherjobapply(Request $request){
    //     $validated = $request->validate([
    //         'number' => 'required|min:11|max:14',
    //         'cv' => 'required|mimes:pdf,jpg,png|max:10000',
    //         'document' => 'required|mimes:pdf,jpg,png|max:10000',
    //     ]);

    //     $beteacher = beteacher::create([
    //         'first_name'=>$request->first_name,
    //         'middle_name'=>$request->middle_name,
    //         'last_name'=>$request->last_name,
    //         'full_address'=>$request->full_address,
    //         'upazilla'=>$request->upazilla,
    //         'district'=>$request->district,
    //         'zip_code'=>$request->zip_code,
    //         'email'=>$request->email,
    //         'number'=>$request->number,
    //         'day'=>$request->day,
    //         'month'=>$request->month,
    //         'year'=>$request->year,
    //         'apply_for_position'=>$request->apply_for_position,
    //         'desired'=>$request->desired,
    //         'training_experience'=>$request->training_experience,
    //         'online_work'=>$request->online_work,
    //     ]);

    //      $filename = $beteacher->cv;
    //         $file = $request->file('cv');
    //         if($file){
    //             $currentDate = Carbon::now()->toDateString();
    //             //dd($file->getClientOriginalExtension());

    //             $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

    //             if (!file_exists('assets/files/uploads/cv')) {
    //                 mkdir('assets/files/uploads/cv', 0777, true);
    //             }

    //             $file->move(public_path('assets/files/uploads/cv'), $filename);
    //             //$file->move(base_path().'/assets/files/uploads/notices', $filename);
    //         }

    //     $beteacher->cv = $filename;

    //     $filename2 = $beteacher->document;
    //         $file2 = $request->file('document');
    //         if($file2){
    //             $currentDate = Carbon::now()->toDateString();
    //             //dd($file->getClientOriginalExtension());

    //             $filename2 = $currentDate . '-' . uniqid() . '.' . $file2->getClientOriginalExtension();

    //             if (!file_exists('assets/files/uploads/document')) {
    //                 mkdir('assets/files/uploads/document', 0777, true);
    //             }

    //             $file2->move(public_path('assets/files/uploads/document'), $filename2);
    //             //$file2->move(base_path().'/assets/files/uploads/notices', $filename2);
    //         }

    //         $beteacher->document = $filename2;

    //         $beteacher->save();

    //         Toastr::success('Apply successfully!', 'Success', ["positionClass" => "toast-top-right"]);

    //         return redirect()->route('home');

    // }

    // public function studentdashboard(){
    //     $data['setting'] = Setting::first();
    //     $data['sliders'] = Slider::where('status', 1)->get();
    //     $data['dashboard'] = DB::table('studentregs')->where('studentId', Session::get('studentId'))->first();

    //     return view('frontend.student-dashboard', $data);
    // }

    // public function logout(){
    //     Session::forget('studentId');
    //     Session::forget('studentName');
    //     Session::forget('studentEmail');
    //     Toastr::success('Logout Successfully', 'Logout', ["positionClass" => "toast-top-right"]);
    //     return redirect()->route('home');
    // }

    // public function getdivision($division_id){
    //     $division = District::where('division_id', $division_id)->orderBy('district_name_en','ASC')->get();

    //         return json_encode($division);
    //     }


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
            // dd($request);
//            return $request;
            // $amount =

            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'country_code' => 'required',
                'joining_reason' => 'required',
                'refered_code' => 'required',
                 'image' => 'required',
                'whatsapp_number' => 'required|unique:students',
                 'email' => 'required|unique:students',
                'password' => 'required|min:6',
                'payment_method' => 'required',
                'payment_number' => 'required',
                'transaction_id' => 'required',
                'payment_amount' => 'required',
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
                    'bonus'=> $referal_code->bonus + $request->bonus_amount,
                ]);
            }
            else{
                Toastr::error('error', 'Invalid Referred Code!', ["positionClass" => "toast-top-right"]);
                return back();
            }

            $student = Student::create([
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



            session::put('Rcomment', $student->refer_code);
            session::put('thankyouId', $student->id);
            $register_bonus = Student::where('refer_code', $request->refered_code)->first();
            if($register_bonus){
                $passbook = Passbook::create([
                    'student_id' => $register_bonus->id,
                    'amount' => $request->bonus_amount,
                    'comments' => 'Referral Bonus ID:' .''. session::get('Rcomment'),
                ]);
            }



            $phone = $student->country_code.$student->phone;
            $message = 'Dear '.$student->first_name.', Your request has been submitted for Admin approval. Your referral code is '.$student->refer_code.'. Please wait for the confirmation.' .'%0a Regards - FX WWIITS.';
            SmsUtility::sendSMS($phone, $message);

            Toastr::success('student Registration successfully!', 'Please Wait For Admin Approval', ["positionClass" => "toast-top-right"]);

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
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.profile-settings', $data);
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

        Toastr::success('Schedule Add Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
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
      public function passbook(){
        $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();

        return view('frontend.passbook', $data);
      }
      public function withdraw(){
        $data['passbook'] = Passbook::where('student_id',Session::get('StudentId'))->get();
        $data['student'] = Student::where('id', Session::get('StudentId'))->first();
        return view('frontend.withdraw',$data);
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

}
