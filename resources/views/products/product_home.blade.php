@extends('admin.app_admin')

@section('admin_content')

<div class="container container-fluid bg">
    <h1 class="text-center">Products</h1>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ config('app.asset_url') }}/img/create-product.jpg" alt="Create Product">
                <div class="caption">
                    <h3>Create Product</h3>
                    <p>you can create products by clicking on link below.</p>
                    <p><a href="{{ route('products.create')}}" class="btn btn-primary" target="_self" role="button">Create</a></p>
                </div>
            </div> <!-- end of thumbnail -->
        </div> <!-- end of col -->


    <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ config('app.asset_url') }}/img/view-product.jpg" alt="View products">
                <div class="caption">
                    <h3>View Products</h3>
                    <p>you can view products by clicking on link below.</p>
                    <p><a href="{{ url('products.index')}}" class="btn btn-primary" target="_self" role="button">View</a></p>
                </div>
            </div> <!-- end of thumbnail -->
        </div> <!-- end of col -->

    </div>


    @endsection

