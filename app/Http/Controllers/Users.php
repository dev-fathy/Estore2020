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

    public function  card_get($id) {

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



        return view('add_cart',['product' => $pr_array ]);



    }


    public function  card_post($id) {

        $product = Products::where('id', $id)->get();

        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product[0]["product_name"],
                        "quantity" => 1,
                        "price" => $product[0]["product_price"],
                        "image" => $product[0]["product_image"],
                        "SKE" => $product[0]["SKE"],
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product[0]["product_name"],
            "quantity" => 1,
            "price" => $product[0]["product_price"],
            "image" => $product[0]["product_image"],
            "SKE" => $product[0]["SKE"],
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
