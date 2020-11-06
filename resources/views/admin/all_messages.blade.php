@extends('admin.app_admin')

@section('admin_content')
    <div class="container">

    <center><h1 style="color:black;"> Here you can view all user messages in Estore system.</h1></center>
    <hr>


    <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    @foreach($all_messages as $msgs)
      <tr>
      <td>{{$msgs->email}}</td>
        <td>{{$msgs->message}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div><!-- end of container -->
<!-- End of main header -->

@endsection






