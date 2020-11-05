@extends('admin.app_admin')

@section('admin_content')

    <div class="container">
        <h1 class="text-center"> Welcome {{Auth::guard('webadmin')->user()->name}}
        </h1>
    </div><!-- end of container -->
<!-- End of main header -->

@endsection
