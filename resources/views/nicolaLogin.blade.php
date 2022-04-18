@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control" name="email"
                                    value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control" name="password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="w-30 btn btn-lg btn-primary" type="submit">LOGIN</button> 
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <small class="d-block text-left">Not Registered? <a href="/register">Register Now! </a> </small>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection