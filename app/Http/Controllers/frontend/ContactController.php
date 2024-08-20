<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\ContactModel;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
    }



    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',

                'subject' => 'required',
                'message' => 'required'
            ]
        );

        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        // $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }



}
