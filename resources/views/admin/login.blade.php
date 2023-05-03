@extends('admin.layouts.auth')

@section('title')
   Log in
@stop

@section('css')

@endsection


@section('content_auth')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
    <div class="container">
    <div class="loginbox">
    <div class="login-left">
    <img class="img-fluid" src="{{ URL::asset('attachments/settings_images/'.$settings->settings_images) }}" alt="Logo">
    </div>
    <div class="login-right">
    <div class="login-right-wrap">
    <h1>Welcome to {{ $settings->name }}</h1>
    <h2>Sign in</h2>

    <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">
    <label>Email <span class="login-danger">*</span></label>
    <input type="login" name="login" value="{{ old('login') }}"class="form-control" required>
    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
    </div>
    <div class="form-group">
    <label>Password <span class="login-danger">*</span></label>
    <input type="password" name="password" value="{{ old('password') }}" class="form-control pass-input" required>
    <span class="profile-views feather-eye toggle-password"></span>
    </div>
    <div class="forgotpass">
    <div class="remember-me">
    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
    <input type="checkbox" name="radio">
    <span class="checkmark"></span>
    </label>
    </div>
    <a href="#">Forgot Password?</a>
    </div>
    <div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
    </form>

    <div class="login-or">
    <span class="or-line"></span>
    <span class="span-or">or</span>
    </div>

    <div class="social-login">
    <a href="#"><i class="fab fa-google-plus-g"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection


@section('scripts')

@endsection
