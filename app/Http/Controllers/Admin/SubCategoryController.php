<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data['sub_categories'] = SubCategory::latest()->get();
        return view('admin.sub_category.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub_category.form',[
            'cats'=>$cat = Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sub_cat_name'=> 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
         }

         $sub_category= SubCategory::create([
            'cat_id'=> $request-> category_name,
            'sub_name' => $request->sub_cat_name,
            'status'=> $request->status,
         ]);

         return redirect()->route('admin.sub_category.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['sub_categories'] = subcategory::findOrFail($id);
        $data['cats'] = Category::get();

        if ($data['sub_categories']) {
            return view('admin.sub_category.form',$data);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sub_category = SubCategory::find($id);

        if ($sub_category) {
            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $sub_category->update([
            // 'cat_id'=> $request-> category_name,
            'sub_name' => $request->sub_cat_name,
            'status'=> $request->status,
            ]);


            return redirect()->route('admin.sub_category.list');
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub_category = SubCategory::findOrFail($id);

        if ($sub_category) {
            $sub_category->delete();
        }
        return back();
    }
}
