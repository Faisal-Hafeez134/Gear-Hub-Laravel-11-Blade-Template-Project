<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminloginModel;
use App\Models\frontend\AdduserModel;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.login');
    }

    /**
     * Show the form for creating a new resource.
     */









 public function LoginUser(Request $request)
 {
    $user=AdminloginModel::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
    if($user){
 session()->put('admin_id',$user->admin_id);
 session()->put('type',$user->type);
 session()->put('fullname',$user->fullname);
 session()->put('picture',$user->picture);
 if($user->type=='admin')
 {
     return redirect('/adminhome')->with('login_successfully','Login Sucessfully');
 }

    }else{
     return redirect('/admin/login')->with('error','Email/password is incorrect');
    }




     // $adduser->save();
     // return back()->withSuccess('user registered sucessfully');

 }














 public function Logout()
 {
   session()->forget('admin_id');
   session()->forget('type');
   session()->forget('fullname');
   session()->forget('picture');
   return redirect('/admin/login');

 }


}
