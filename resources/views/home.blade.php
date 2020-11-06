@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" id="welcomeText">
                <div class="card-header">
                    <center>
                        <h3>Dashboard</h3>
                    </center>
                </div>

                <div class="card-body" id="login-success">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <center>
                        <p>You are logged in!<p>
                    </center>
                </div>
            </div>
        </div>
        <h1 class="text-center"> Estore </h1>
        <div class="text-center second-title"> Feel comfortable <span> Find your luxury</span></div>

        <div class="home-slider">
            @include('layouts.slider');
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ config('app.asset_url') }}/img/view-product.jpg" alt="Watches">
                    <div class="caption">
                        <h3>Explore Products</h3>
                        <p>Here you can easily view a marvellous products</p>
                        <p><a href="{{ url('display/product') }}" class="btn btn-primary" role="button">View</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8">
            <h1 class="links">View Products</h1>
            <p class="links"> Here you can view products</p>
            <p class="links"> Enjoy your visit in your site</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->

<hr>
        <div class="contactUs">
            <div class="row">
            <h2 style="color:black;">  <center>Contact Us </center></h2>
                <div class="col-sm-6 col-md-12">

                    <form class="logContact center-block" method="POST" action="{{url('insert_messages')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="textarea" class="form-control" id="message" name="message" placeholder="Write your message"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div>


    </div><!-- end of container -->
</div> <!-- end of bg class  -->
<!-- End of main header -->

@endsection



<!-- <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ config('app.asset_url') }}/img/iphone-cases-unique.jpg" alt="Iphone Covers">
                    <button class="covers-btn view-btn btn-primary">view</button>
                    <div class="caption">
                        <h3>Mobile Covers</h3>
                        <p>you can buy Mobile Covers from here in best selling</p>
                        <p><a href="{{url('covers')}}" class="btn btn-primary" role="button">View</a></p>
                    </div>
                </div>
            </div> -->
