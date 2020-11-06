@extends('admin.app_admin')

@section('admin_content')

    <div class="container">
        <h1 class="text-center"> Welcome </h1>

        <br>
        <br>
        <div class="row">

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ config('app.asset_url') }}img/12.jpg" alt="Home">
                <div class="caption">
                    <ul class="list-unstyled">
                    <h3>Home Page</h3>
                        <p>Your Home page</p>
                        <p><a href="{{url('/admin/home')}}" class="btn btn-primary" role="button">View Home</a></p>
                </div><!-- end of caption -->

            </div> <!-- end of Thumbnail -->
        </div> <!-- end of col -->


        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ config('app.asset_url') }}img/view-product.jpg" alt="Home">
                <div class="caption">
                    <ul class="list-unstyled">
                    <h3>Products</h3>
                        <p>Here you can add, edit, delete, show products</p>
                        <p><a href="{{url('products')}}" class="btn btn-primary" role="button">View</a></p>
                </div><!-- end of caption -->

            </div> <!-- end of Thumbnail -->
        </div> <!-- end of col -->



        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ config('app.asset_url') }}img/customer.png" alt="Home">
                <div class="caption">
                    <ul class="list-unstyled">
                    <h3>View Customers</h3>
                        <p>Here you can view your customers</p>
                        <p><a href="{{url('view/users')}}" class="btn btn-primary" role="button">View Home</a></p>
                </div><!-- end of caption -->

            </div> <!-- end of Thumbnail -->
        </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div><!-- end of container -->
<!-- End of main header -->

@endsection
