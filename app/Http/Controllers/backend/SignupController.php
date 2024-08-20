<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminloginModel;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.sign-up');
    }




    public function RegisterUser(Request $request)
    {
        $request->validate(
            [

                'fullname' => 'required',

                'email' => 'required',
                'password' => 'required',
                // 'type' => 'required',

                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:9000',



            ]
        );
        $imagename = "product_image1_" . time() . "." . $request->picture->extension();
        $folderPath = 'upload';
        $imagePath1 = $folderPath . '/' . $imagename;
        $request->picture->move(public_path($folderPath), $imagename);






        $adduser = new AdminloginModel();
        $adduser->fullname = $request->fullname;
        $adduser->email = $request->email;
        $adduser->password = $request->password;
        // $adduser->type = $request->type;
        $adduser->type = 'admin';
        // $contact->phone = $request->phone;




        $adduser->picture = $imagePath1;


        $adduser->save();
        return redirect('/admin/login')->withSuccess('success','user registered sucessfully');

}





}
