<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use App\Models\Admin\RolePermission;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use Illuminate\Support\Facades\Hash;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['location']) && $_GET['location']>0){
            $data['staffs'] = Staff::where('location_id', $_GET['location'])->latest()->get();
        }else{
            $data['staffs'] = Staff::latest()->get();
        }
        $data['locations'] = Location::where('status',1)->latest()->get();

        return view('admin.staff.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.staff.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required |min:8 | confirmed',

        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_type' => 'staff'
            ]);
        }

        $image = $request->file('image');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('assets/images/uploads/staffs')) {
                mkdir('assets/images/uploads/staffs', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/staffs'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/staffs', $imageName);

            $image = $imageName;
        }

        $staff = Staff::create([
            'name' => $request->name,
            'password' => $request->password,
            'user_id' => $user->id,
            'username' => Str::slug($request->name).Str::random(6),
            'location_id' => 0,
            'designation' => 0,
            'phone' => $request->phone,
            'email' => $request->email,
            'join_date' => date('Y-m-d'),
            'address' => $request->address,
            'image' => $image,
            'class' => 0,
            'status' => $request->status,
        ]);

        Toastr::success('Staff added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.staff.list');
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
        $data['staff'] = Staff::findOrFail($id);

        if($data['staff']){
            $data['locations'] = Location::where('status',1)->latest()->get();
            return view('admin.staff.form', $data);
        }

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
        $staff = Staff::findOrFail($id);

        if($staff){
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'password' => 'required | min:8 | confirmed',
            ]);
            if($request->email != $staff->email){
                $request->validate([
                    'email' => 'unique:users'
                ]);
            }

            $user = User::find($staff->user_id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $staff->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/staffs')) {
                    mkdir('assets/images/uploads/staffs', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/staffs'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/staffs', $imageName);

                $target_image = $imageName;
            }

            if(strcmp($staff->name, $request->name) == 0) {
                $username = $staff->username;
            }else{
                $username = Str::slug($request->name).Str::random(6);
            }

            $staff->update([
                'name' => $request->name,
                'password' => $request->password,
                'username' => $username,
                'location_id' =>0,
                'designation' => 0,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'image' => $target_image,
                'class' => 0,
                'status' => $request->status,
            ]);



            Toastr::success('Staff updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.staff.list');
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
        $staff = Staff::findOrFail($id);
        $user = User::find($staff->user_id);
        $user->delete();
        if($staff){
            if($staff->image){
                unlink( 'assets/images/uploads/staffs/'.$staff->image);
            }
            $staff->delete();
            Toastr::success('Staff deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

    public function permission()
    {

        $data['items'] =  Permission::orderBy('name', 'asc')->get();
        return view('admin.staff.permission-list', $data);
    }

    public function permissionUpdate(Request $request)
    {
//        return $request;
        $role_permission = RolePermission::all();
        if($role_permission){
            foreach ($role_permission as $permission){
                $permission->delete();
            }
        }

            if(isset($request->permission)){
                for ($i = 0; $i<count($request->permission);$i++){
                    RolePermission::create([
                        'role' => 'staff',
                        'permission_id' => $request->permission[$i]
                    ]);
                }
            }
        Toastr::success('Staff Permissions Updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return back();

    }
}
