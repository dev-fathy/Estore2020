@extends('admin.app_admin')

@section('admin_content')

<div class="container container-fluid bg">
<h1 class="text-center">Products</h1>
<div class="row">
<a href="{{ route('products.create')}}"  class="btn btn-primary" style="float:right;" target="_self" role="button">{{ __('Create Product') }}</a>
</div>

<br>
<br>
    <div class="row">
    @foreach($all_products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                <img src="{{ url('uploads/'.$product->product_image) }}" height="20px" alt="Clothes">
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

    @endsection


