<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\onlineclass;
use Toastr;
use Carbon\Carbon;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['onlineclass'] = onlineclass::latest()->get();

        return view('admin.online-class.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.online-class.form');
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
            'class' => 'required',
            'link' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $online = onlineclass::create([
            'class' => $request->class,
            'section' => $request->section,
            'link' => $request->link,
            'status' => $request->status
        ]);

        $online->save();

        Toastr::success('Online Class added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.online.list');
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
        $data['onlineclass'] = onlineclass::findOrFail($id);

        if($data['onlineclass']){
            return view('admin.online-class.form', $data);
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
        $online = onlineclass::findOrFail($id);
        if($online){
            $validated = $request->validate([
                'class' => 'required',
                'link' => 'required',
            ]);
    
            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }
    
            $online->update([
                'class' => $request->class,
                'section' => $request->section,
                'link' => $request->link,
                'status' => $request->status
            ]);
    
            $online->save();
            Toastr::success('Online Class Update successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.online.list');
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
        $online = onlineclass::findOrFail($id);

        if($online){
            $online->delete();
            Toastr::success('Notice deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
