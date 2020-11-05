@extends('layouts.app')

@section('content')

<div class="container container-fluid bg">
<h1 class="text-center">Products</h1>
<br>
@auth
    <div class="row">
    @foreach($all_products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                <img src="{{ url('uploads/'.$product->product_image) }}" alt="{{$product->product_name}}">
                <div class="caption">
                    <ul class="list-unstyled">
                        <li>
                            <bold>Name</bold> : {{$product->product_name}}
                        </li>
                        <li>
                            <bold>Price</bold> : {{$product->product_price}} L.E
                        </li>
                    </ul>
                    <a href="order.html" class="btn btn-primary" target="_self" role="button">Add to Card</a>
                    <a href="order.html" class="btn btn-warning" target="_self" role="button">view Product</a></p>
                </div><!-- end of caption -->

            </div> <!-- end of Thumbnail -->
        </div> <!-- end of col -->
        @endforeach
    </div>

    @else

    <h2 class="text-center">You have to login before display our products.</h2>

@endauth
    @endsection


