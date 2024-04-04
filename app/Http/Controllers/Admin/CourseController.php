<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;

use DB;
Use Carbon\Carbon;
Use Toastr;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['courses'] = Course::latest()->get();
        return view('admin.course.list',$data);
        //$data['students'] = Student::latest()->get();
        //return view('admin.student.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        $departments = Department::where('status',1)->latest()->get();

        //dd($teachers);
        return view('admin.course.form', compact('teachers','departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
         }

        //dd($request);

        $image = $request->file('image');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('assets/images/uploads/courses')) {
                mkdir('assets/images/uploads/courses', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/courses'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/courses', $imageName);

            $image = $imageName;
        }

        $course = Course::create([
            'course_name' => $request->course_name,
            'teacher_id' => $request->teacher_id,
            'department_id' => $request->department_id,
            'image' => $image,
            'overview' => $request->overview,
            'curriculum' => $request->curriculum,
            'discussion' => $request->discussion,
            'review' => $request->review,
            'instructor' => $request->instructor,
            'course_duration' => $request->course_duration,
            'course_level' => $request->course_level,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'vedio_link' => $request->vedio_link,
            'comments' => $request->comments,
            'status' => $request->status,

        ]);

        //Toastr::success('Course added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.course.list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //dd($request);
        $data['course'] = Course::findOrFail($id);
        if ($data['course']) {
            return view('admin.course.view', $data);
        }
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($request);
        $data['course'] = Course::findOrFail($id);
        $data['teachers']= Teacher::get();
        $data['departments'] = Department::where('status',1)->latest()->get();

        //$data['cats'] = Category::get();

         if($data['course']) {
            return view('admin.course.form', $data);
         }
         return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $course = Course::find($id);

        if ($course) {

             if (!$request->status || $request->status == NULL) {
                 $request->status = 0;
             } else {
                 $request->status = 1;
             }


            $target_image = $course->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/courses')) {
                    mkdir('assets/images/uploads/courses', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/courses'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/courses', $imageName);

                $target_image = $imageName;

            }

            $course->update([
                'course_name' => $request->course_name,
                'teacher_id' => $request->teacher_id,
                'department_id' => $request->department_id,
                'instructor_name' => $request->instructor_name,
                'image' => $target_image,
                'overview' => $request->overview,
                'curriculum' => $request->curriculum,
                'discussion' => $request->discussion,
                'review' => $request->review,
                'instructor' => $request->instructor,
                'course_duration' => $request->course_duration,
                'course_level' => $request->course_level,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'vedio_link' => $request->vedio_link,
                'comments' => $request->comments,
                'status' => $request->status,
            ]);

            return redirect()->route('admin.course.list');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if ($course) {

            $course->delete();
        }

        return back();
    }
}
