@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="row justify-content-center">
                <div class="card" id="welcomeText">
                    <div class="card-header"><center><h3>Dashboard</h3></center></div>

                    <div class="card-body" id="login-success">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <center><p>You are logged in!<p></center>
                    </div>
                </div>
            </div>
        <h1 class="text-center"> Estore </h1>
        <div class="text-center second-title"> Feel comfortable <span> Find your luxury</span></div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ config('app.asset_url') }}/img/watch-homepage.jpg" alt="Watches">
                    <button class="watches-btn view-btn btn-primary">view</button>
                    <div class="caption">
                        <h3>Watches</h3>
                        <p>you can buy watches from here in best selling</p>
                        <p><a href="{{url('watches')}}" class="btn btn-primary" role="button">View</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ config('app.asset_url') }}/img/iphone-cases-unique.jpg" alt="Iphone Covers">
                    <button class="covers-btn view-btn btn-primary">view</button>
                    <div class="caption">
                        <h3>Mobile Covers</h3>
                        <p>you can buy Mobile Covers from here in best selling</p>
                        <p><a href="{{url('covers')}}" class="btn btn-primary" role="button">View</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ config('app.asset_url') }}/img/clothes.jpg" alt="Clothes">
                    <button class="clothes-btn view-btn btn-primary">view</button>
                    <div class="caption">
                        <h3>Clothes</h3>
                        <p>you can buy Clothes from here in best selling</p>
                        <p><a href="{{url('clothes')}}" class="btn btn-primary" role="button">View</a></p>
                    </div><!-- end of caption -->
                </div> <!-- end of Thumbnail -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->

    </div><!-- end of container -->
</div> <!-- end of bg class  -->
<!-- End of main header -->

@endsection
