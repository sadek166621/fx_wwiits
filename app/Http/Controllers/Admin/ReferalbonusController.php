<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Bonus;
use Toastr;
use Carbon\Carbon;

class ReferalbonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bonus'] = Bonus::latest()->get();

        return view('admin.referal-bonus.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.referal-bonus.form');
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
            'amount' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $Bonus = Bonus::create([
            'amount' => $request->amount,
            'status' => $request->status
        ]);

        Toastr::success('Referal Bonus added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.referal-bonus.list');
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
        $data['bonus'] = Bonus::findOrFail($id);

        if($data['bonus']){
            return view('admin.referal-bonus.form', $data);
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
        $Bonus = Bonus::findOrFail($id);

        if($Bonus){
            $validated = $request->validate([
                'amount' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $Bonus->update([
                'amount' => $request->amount,
                'status' => $request->status
            ]);

            Toastr::success('Referal Bonus added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.referal-bonus.list');
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
        $Bonus = Bonus::findOrFail($id);

        if($Bonus){
            $Bonus->delete();
            Toastr::success('Referal Bonus deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
