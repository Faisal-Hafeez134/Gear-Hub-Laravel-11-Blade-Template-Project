<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AddproductModel;
use App\Models\backend\ProductlistModel;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('backend.product-list');
    // }

    public function index()
    {
        $works = ProductlistModel::get();
        $data = compact('works');
        return view('backend.product-list')->with($data);
    }


    public function deleteProduct($id)
    {
        $product = ProductlistModel::find($id);
        $product->delete();
        return redirect('/product-list')->withSuccess('Product Deleted Successfully');
    }





    public function updateProduct(Request $request, $id)
    {

        $request->validate(
            [
                // 'title' => 'required|min:3',
                // 'details' => 'required|min:10',
                // 'link' => 'required|min:3',
                // 'category' => 'required|min:3',
                // 'technology' => 'required|min:3',
                // 'client' => 'required|min:3',
                // 'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
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
            ]
            );

        $product = AddproductModel::where('id', $id)->first();
        // $PROJECT_STATUS = 1;



        // if(isset($request->image))
        // {
        //     $ImageName = 'fs_team_' . time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('backend/images/projects'), $ImageName);
        //     $product->image = $ImageName;
        // }

        if(isset($request->image1))
        {
            $imagename = "product_image1_" . time() . "." . $request->image1->extension();
            $folderPath = 'upload';
            $imagePath1 = $folderPath . '/' . $imagename;
            $request->image1->move(public_path($folderPath), $imagename);
        }

        if(isset($request->image2))
        {
            $imagename = "product_image2_" . time() . "." . $request->image2->extension();
        $folderPath = 'upload';
        $imagePath2 = $folderPath . '/' . $imagename;
        $request->image2->move(public_path($folderPath), $imagename);
        }

        if(isset($request->image3))
        {
            $imagename = "product_image3_" . time() . "." . $request->image3->extension();
        $folderPath = 'upload';
        $imagePath3 = $folderPath . '/' . $imagename;
        $request->image3->move(public_path($folderPath), $imagename);
        }


        // $product->title = $request->title;
        // $product->details = $request->details;
        // $product->link = $request->link;
        // $product->category = $request->category;
        // $product->technology = $request->technology;
        // $product->client = $request->client;
        // $product->status = $PROJECT_STATUS;



        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->slug = $request->slug;
        // $contact->phone = $request->phone;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;
        $product->status = $request->status;
        $product->type = $request->type;


        $product->image1 = $imagePath1;
        $product->image2 = $imagePath2;
        $product->image3 = $imagePath3;





        $product->save();
        return back()->withSuccess('Product Detail Updated Successfully');
    }


}