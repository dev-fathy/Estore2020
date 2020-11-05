@extends('admin.app_admin')

@section('admin_content')
    <div class="container">

    <center><h1 style="color:black;"> Here you can view all users in Estore system.</h1></center>
    <hr>


    <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email Address</th>
      </tr>
    </thead>
    <tbody>
    @foreach($all_users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>



    </div><!-- end of container -->
<!-- End of main header -->

@endsection
