@extends('layouts.app-client')

@section('main-content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <form class="js-validation-signin" action="{{ route('login') }}" method="post">
            @csrf
            <div class="block block-themed block-rounded block-shadow">
                <div class="block-header bg-gd-dusk">
                    <h3 class="block-title">Please Sign In</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="login-username">Username</label>
                            <input type="text" class="form-control" id="login-username" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" id="login-password" name="password">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-sm-6 d-sm-flex align-items-center push">
                            <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-sm-right push">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="si si-login mr-10"></i> Sign In
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="form-group text-center">
                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup3.php">
                            <i class="fa fa-plus mr-5"></i> Create Account
                        </a>
                        @if (Route::has('password.request'))
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</div>
@endsection
