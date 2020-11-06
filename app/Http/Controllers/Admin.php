<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ContactUs;
use App\Products;

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

    public function all_messages()
    {

        // This belongs to Admin area
        $all_messages = ContactUs::all();

        // end of " This belongs to Admin area "

        return view('admin.all_messages',['all_messages' => $all_messages]);
    }

    public function product($id)
    {

        $product = Products::where('id', $id)->get();

        $pr_array = array(
            'id' => $product[0]["id"],
            'name' => $product[0]["product_name"],
            'price' => $product[0]["product_price"],
            'image' => $product[0]["product_image"],
            'SKE' => $product[0]["SKE"],
        );


        // print_r($pr_array['name']);
        // die();



        return view('products.product',['product' => $pr_array ]);



    }

}
