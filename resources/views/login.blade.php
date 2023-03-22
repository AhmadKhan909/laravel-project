@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5 custom-login">
            <div class="col-sm-4">
                <form action="/login" method="POST" class="px-5 py-5" style="border: 1px solid #000;">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
