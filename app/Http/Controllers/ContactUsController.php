<?php

namespace App\Http\Controllers;

use App\ContactUs;

use Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs()
    {
        return view('contactUs');
    }

    public function insert_messages()
    {
        $add_message = new ContactUs;
        $add_message->email = request('email');
        $add_message->password = request('password');
        $add_message->message = request('message');
        $add_message->save();
        return redirect('contact-us');
    }
}
