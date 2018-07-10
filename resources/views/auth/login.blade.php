@extends('layouts.app', ['title' => 'Admin Dashboard'])


@section('content')

 <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    <img src="{{ asset('images/logo_ptc.png') }}" alt="PTC-LOGO">
      <h1 class="h3 mb-3 font-weight-normal">PTC Admin Login</h1>
      @csrf

      <div class="form-group row">
      
          <div class="col-md">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' 
: '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group row">
            <div class="col-md">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' 

is-invalid' : '' }}" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
                <div class="col-md offset-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ 

__('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0">
                    <div class="col-md offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
                <div class="ptc-footer__copyright"> 
                        <p class="fl_left">&copy; 2018 Pateros Technological College. All rights reserved </p>
                        <p class="fl_right">Developed and maintained by <span class="text-primary" data-toggle="tooltip" data-placement="top" title="PTC-Information Technology System collaboration with Emmanuel See Te">PTC-ITS</span></p>
                </div>
    </form>

   

@endsection
