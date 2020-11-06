
@extends('admin.app_admin')

@section('admin_content')




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


<a href="{{route('products.edit',$product)}}" class="links">Edit</a>


<form action="{{route('products.destroy',$product)}}" method="post">
@csrf
@method('delete')
<button type="button" class="dropdown-item links" onclick="confirm('{{ __("Are you sure you want to delete this plan?") }}') ? this.parentElement.submit() : ''">
        {{ __('Delete') }}
</button>
</form>



    </ul>
        </div> <!-- end of col -->


    </div>
    @endsection

