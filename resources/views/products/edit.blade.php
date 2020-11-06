@extends('admin.app_admin')

@section('admin_content')

<div class="container">
    <h1 class="text-center">Edit Product</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">



        <form class="log  center-block signform" method="post" action="{{ route('products.update', $product) }}">
                    @csrf
                    @method('put')

                    <div class="form-group row">
                        <label for="productName" class="col-md-4 col-form-label text-md-right login-text">{{ __('Product Name') }}</label>

                        <div class="col-md-6">
                            <input id="productName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product['product_name'] }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="productPrice" class="col-md-4 col-form-label text-md-right login-text">{{ __('Product Price') }}</label>

                        <div class="col-md-6">
                            <input id="productPrice" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product['product_price'] }}" required autocomplete="name" autofocus>

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="productImage" class="col-md-4 col-form-label text-md-right login-text">{{ __('Product Photo') }}</label>

                        <div class="col-md-6">
                            <input id="productImage" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ url('uploads/'.$product['product_image']) }}" required autocomplete="photo" autofocus>

                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"class="btn btn-primary col-lg-12">
                    {{ __('Add Product') }}
            </button>
                </form>
             <!-- end of formPage -->
        </div> <!-- end of col -->
    </div>

    @endsection
