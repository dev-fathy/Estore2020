@extends('layouts.app')

@section('content')
    <div class="container">
    <form class="log center-block" method="POST" action="{{url('insert_messages')}}">
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

    </div><!-- end of container -->
<!-- End of main header -->

@endsection
