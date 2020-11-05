<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class SharedPages extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function products()
    {

        return view('products.product_home');

    }
}
