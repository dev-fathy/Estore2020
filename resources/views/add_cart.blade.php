@extends('layouts.app')

@section('content')
<div class="container container-fluid bg">
    <h1 class="text-center">{{$product['name']}}</h1>
    <div class="row">
    <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                <img src="{{ url('uploads/'.$product['image']) }}" alt="{{$product['name']}}">
                <div class="caption">
                    <ul class="list-unstyled">
                        <li>
                            <bold>Name</bold> : {{$product['name']}}
                        </li>
                        <li>
                            <bold>Price</bold> : {{$product['price']}} L.E
                        </li>
                    </ul>
                </div><!-- end of caption -->

            </div> <!-- end of Thumbnail -->
        </div> <!-- end of col -->

        <div class="col-sm-6 col-md-8">
<form action="{{url('add/cart',$product)}}" method="post">
@csrf
<button type="button" class="dropdown-item links" onclick="confirm('{{ __("Are you sure you want to add this product to card?") }}') ? this.parentElement.submit() : ''">
        {{ __('Add to Card') }}
</button>
</form>



    </ul>
        </div> <!-- end of col -->


    </div>
    @endsection
