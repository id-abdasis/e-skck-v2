@extends('layouts.app') @section('main-content')
<div class="col-md-8">
    <!-- Bootstrap Register -->
    <div class="block block-themed m-10">
        <div class="block-header bg-gd-leaf">
            <h3 class="block-title">Bootstrap</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
            </div>
        </div>
        <div class="block-content">
           <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div>
        
                        <div class="form-group row">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div>
        
                        <div class="form-group row">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div>
        
                        <div class="form-group row">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
        
                        <div class="form-group row mb-5">
                            <button type="submit" class="btn btn-block  btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> {{ __('Register') }}
                            </button>
                        </div>
                </form>
           </div>
        </div>
    </div>
    <!-- END Bootstrap Register -->
</div>
@endsection