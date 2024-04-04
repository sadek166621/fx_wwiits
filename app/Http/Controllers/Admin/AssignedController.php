<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Teacher;
use App\Models\Admin\Assigned;
use App\Models\Admin\Department;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\beteacher;
use App\Models\Admin\Setting;
use Hash;


class AssignedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['assigneds'] = Assigned::latest()->get();
        return view('admin.assigned.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['departments'] = Department::latest()->get();
        $data['teachers'] = Teacher::latest()->get();
        return view('admin.assigned.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'teacher_id' => 'required|unique:assigneds',
            // 'department_id' => 'required',
            // 'image' => 'required',
            // 'phone' => 'required|min:11',
            // 'email' => 'required',
            // 'password' => 'required|min:8',
            // 'password_confirmation' => 'required|same:password',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $teacher = Assigned::create([
            't_name' => $request->t_name,
            'department_id' => $request->department_id,
            'teacher_id' => $request->teacher_id,
            't_phone' => $request->t_phone,
            't_email' => $request->t_email,
            't_address' => $request->t_address,
            'status' => $request->status,
        ]);

        Toastr::success('Assigned added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.assigned.list');
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
        $data['assigned'] = Assigned::findOrFail($id);

            $data['departments'] = Department::where('status',1)->latest()->get();
            $data['teachers'] = Teacher::latest()->get();
            return view('admin.assigned.form', $data);


        return back();
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
        // return $request;
        $assigned = Assigned::findOrFail($id);

        if($assigned){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }


            $assigned->update([
                't_name' => $request->t_name,
            'department_id' => $request->department_id,
            'teacher_id' => $request->teacher_id,
            't_phone' => $request->t_phone,
            't_email' => $request->t_email,
            't_address' => $request->t_address,
            'status' => $request->status,
            ]);

            Toastr::success('Assigned updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.assigned.list');
        }

        return back();
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
