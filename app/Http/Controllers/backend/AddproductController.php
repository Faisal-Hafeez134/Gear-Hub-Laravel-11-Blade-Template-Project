<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AddproductModel;
use App\Models\backend\CategorylistModel;
use Illuminate\Http\Request;


class AddproductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.add-product');

            // $works = CategorylistModel::get();
            // $data = compact('works');
            // return view('backend.add-product')->with($data);

    }

    public function getcategory()
    {
        // return view('backend.add-product');

            $works = CategorylistModel::get();
            $data = compact('works');
            return view('backend.add-product')->with($data);

    }


    public function addProduct(Request $request)
    {
        $request->validate(
            [

                'slug' => 'required',

                'description' => 'required',
                'category_name' => 'required',
                'product_name' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'brand' => 'required',
                'status' => 'required',
                'image1' => 'required',
                'image2' => 'required',
                'image3' => 'required',
                // 'product_name' => 'required|string|max:255',
                // 'slug' => 'required|string|max:255|unique:products,slug',
                // 'description' => 'required|string|max:100',
                // 'price' => 'required|numeric',
                // 'quantity' => 'required|integer',
                // 'category_name' => 'required|string',
                // 'brand' => 'required|string|max:255',
                // 'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                // 'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                // 'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                // 'type' => 'required|string',

            ]
        );
        $imagename = "product_image1_" . time() . "." . $request->image1->extension();
        $folderPath = 'upload';
        $imagePath1 = $folderPath . '/' . $imagename;
        $request->image1->move(public_path($folderPath), $imagename);

        $imagename = "product_image2_" . time() . "." . $request->image2->extension();
        $folderPath = 'upload';
        $imagePath2 = $folderPath . '/' . $imagename;
        $request->image2->move(public_path($folderPath), $imagename);

        $imagename = "product_image3_" . time() . "." . $request->image3->extension();
        $folderPath = 'upload';
        $imagePath3 = $folderPath . '/' . $imagename;
        $request->image3->move(public_path($folderPath), $imagename);




        $product = new AddproductModel();
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->slug = $request->slug;
        // $contact->phone = $request->phone;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;
        $product->status = $request->status;


        $product->image1 = $imagePath1;
        $product->image2 = $imagePath2;
        $product->image3 = $imagePath3;

        // $product->features = $request->features;
        // $product->specifications = $request->specifications;
        $product->type = $request->type;
        // $product->status = $request->status;

        //saving image/ file into database
        // $product->image1=$request->file('image1')->getClientOriginalName();
        // //upload file code
        // $request->file('image1')->move('backend/images/upload');

        // $product->image2=$request->file('image2')->getClientOriginalName();
        // //upload file code
        // $request->file('image2')->move('backend/images/upload');

        // $product->image3=$request->file('image3')->getClientOriginalName();
        //upload file code
    // $request->file('image3')->move('backend/images/upload');




        $product->save();
        return back()->withSuccess('Product added sucessfully');
    }



}
