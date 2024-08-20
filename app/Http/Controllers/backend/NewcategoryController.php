<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\NewcategoryModel;
use Illuminate\Http\Request;

class NewcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.new-category');
    }


    public function addCategory(Request $request)
    {
        $request->validate(
            [

                'slug' => 'required',

                'description' => 'required',

            ]
        );

        $imagename = "new_category_" . time() . "." . $request->image->extension();
        $folderPath = 'upload';
        $imagePath = $folderPath . '/' . $imagename;
        $request->image->move(public_path($folderPath), $imagename);



        $category = new NewcategoryModel();
        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        // $contact->phone = $request->phone;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->status = $request->status;

        //saving image/ file into database
        $category->image = $imagePath;




        // $category->image = $request->image;
        // if ($request->hasFile('image')) {
        //     $imageName = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('images'), $imageName);
        //     $category->image = $imageName;
        // }
        // $category->status = $request->status;
        // $category->popular = $request->popular;
        // $category->status = $request->has('status') ? 'active' : 'inactive';
        // $category->popular = $request->has('popular') ? 'popular' : 'not popular';



        $category->save();
        return back()->withSuccess('Category added sucessfully');
    }




}
