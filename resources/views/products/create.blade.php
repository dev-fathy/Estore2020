@extends('admin.app_admin')

@section('admin_content')

<div class="container">
    <h1 class="text-center">Products</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
                {!! Form::open(['route' => 'products.store', 'files'=>true, 'class'=>'log  center-block productform']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Product Name', ['class'=>'login-text'] ) !!}
                    <br>
                    {!! Form::text('name', old('name'), ['class'=>'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price', ['class'=>'login-text'] ) !!}
                    <br>
                    {!! Form::text('price', old('price'), ['class'=>'form-control'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo', 'Product Photo', ['class'=>'login-text'] ) !!}
                    <br>
                    {!! Form::file('photo', ['class'=>'form-control'] ) !!}
                </div>

                {!! Form::submit('Add Product', ['class'=>'btn btn-primary col-lg-12'] ) !!}
                {!! Form::close() !!}



             <!-- end of formPage -->
        </div> <!-- end of col -->
    </div>

    @endsection
