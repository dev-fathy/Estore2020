<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Response;
use Image;
use Storage;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $all_products = Products::orderBy('id', 'desc')->paginate(10);

        return view('products.index', ['all_products' => $all_products]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        request()->validate([
            'name' => 'required',
            'photo' => 'required|image|max:2048',
            'price' => 'required',
        ]);

        $cover = $request->photo;

        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));
        $SKE = random_int(0, 100000000);

        $product = new Products();
        $product->product_name = $request->name;
        $product->product_image = $cover->getFilename() . '.' . $extension;
        $product->product_price = $request->price;
        $product->SKE = $SKE;
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Book added successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        //
        return view('products.edit',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {

        $cover = $request->photo;

        
        dd($cover); 
        die();       

        $extension = $cover->getClientMimeType();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));


        $product->product_name = $request->name;
        $product->product_image = $request->price;
        $product->product_price = $cover->getFilename() . '.' . $extension;
        $product->update();

        return redirect()->url('product/show/'.$product->id)->withStatus(__('Product successfully updated!'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Products $product)
    {
        //

        $product->delete();

        return redirect()->route('products.index')->withStatus(__('Plan successfully deleted!'));

    }
}
