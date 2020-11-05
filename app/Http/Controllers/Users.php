<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class Users extends Controller
{


    public function  display_products() {

        $all_products = Products::orderBy('id', 'desc')->paginate(10);

        return view('products.user_display', ['all_products' => $all_products]);

    }


    // public function  login_get() {
    //     return view('login');

    // }


    // public function  login_post() {
    //     $remember = request()->has('remember')? true : false;
    //     if(auth()->attempt([
    //         'email'=>request('email'),'password'=>request('password')],$remember))
    //     {
    //         return redirect('home');
    //     }else {
    //         return back();
    //     }
    //}
}
