<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AdduserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.login');
    }



    public function RegisterUser(Request $request)
    {
        $request->validate(
            [

                'fullname' => 'required',

                'email' => 'required',
                'password' => 'required',
                // 'type' => 'required',

                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',



            ]
        );
        $imagename = "product_image1_" . time() . "." . $request->picture->extension();
        $folderPath = 'upload';
        $imagePath1 = $folderPath . '/' . $imagename;
        $request->picture->move(public_path($folderPath), $imagename);






        $adduser = new AdduserModel();
        $adduser->fullname = $request->fullname;
        $adduser->email = $request->email;
        $adduser->password = $request->password;
        // $adduser->type = $request->type;
        $adduser->type = 'customer';
        // $contact->phone = $request->phone;




        $adduser->picture = $imagePath1;


        $adduser->save();
        return back()->withSuccess('user registered sucessfully');

}







public function LoginUser(Request $request)
{
   $user=AdduserModel::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
   if($user){
session()->put('id',$user->id);
session()->put('type',$user->type);
if($user->type=='customer')
{
    return redirect('/')->with('login_successfully','Login Sucessfully');
}

   }else{
    return redirect('/login')->with('error','Email/password is incorrect');
   }




    // $adduser->save();
    // return back()->withSuccess('user registered sucessfully');

}














public function Logout()
{
  session()->forget('id');
  session()->forget('type');
  return redirect('/login');

}


}



