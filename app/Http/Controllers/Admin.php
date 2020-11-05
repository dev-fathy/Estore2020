<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class Admin extends Controller
{
    public function  login_get()
    {
        return view('admin.login_admin');
    }


    public function  login_post()
    {
        $remember = request()->has('remember') ? true : false;
        if (Auth::guard('webadmin')->attempt([
            'email' => request('email'), 'password' => request('password')
        ], $remember)) {
            return redirect('admin/path');
        } else {
            return back();
        }
    }

    public function index()
    {
        return view('admin.home_admin');
    }

    public function view_users()
    {

        $all_users = User::all();

        // end of " This belongs to Admin area "

        return view('admin.all_users',['all_users' => $all_users ]);
    }

}
