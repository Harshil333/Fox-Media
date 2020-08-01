@extends('layouts.app')
@section('content')
    @include('layouts.messages')
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center font-weight-bold">Welcome To Fox Media</h3>
        </div>
        <form action="/sendmail" method="post">
            @csrf
            <div class="form-group">
                <div class="text-center">
                    <label for="exampleInputEmail1"><h5 class="font-weight-bold">Looking for a Business Strategy? We'll help you</h5></label>
                </div>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email here">
                <small id="emailHelp" class="form-text text-muted text-center">We'll never share your email with anyone else.</small>
                <div class="text-center" style="margin:10px;">
                    <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
@endsection