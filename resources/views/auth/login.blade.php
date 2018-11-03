@extends('layouts.app', ['title' => 'PTC Portal Login'])


@section('content')

 <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    <img src="{{ asset('images/logo_ptc.png') }}" alt="PTC-LOGO">
      <h1 class="h3 mb-3 font-weight-normal">PTC Portal Login</h1>
      @csrf
     
      <div class="form-group row">
      
        <div class="col-md">
            <input 
            id="id_num" 
            placeholder="ID Number" 
            type="id_num" 
            class="form-control{{ $errors->has('id_num') ? ' is-invalid' : '' }}" 
            name="id_num" 
            value="{{ $errors->has('id_num') ? old('id_num') : '' }}" 
            required
            autocomplete="off"
            {{ $errors->has('id_num') ? 'autofocus' : '' }}
            >

        </div>
      </div>

      <div class="form-group row">
            <div class="col-md">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" name="password" required>
            </div>
        </div>
        <div class="form-group row">
                <div class="col-md offset-md-4">
                    <div class="checkbox">
                        <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{__('Remember Me') }}
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
                        <p class="fl_left">&copy; 2018 Pateros Technological College. <br>All rights reserved </p>
                        <p class="fl_right">Developed and maintained by <span class="text-primary" data-toggle="tooltip" data-placement="top" title="PTC-Information Technology System collaboration with Emmanuel See Te">PTC-ITS</span></p>
                </div>
    </form>
     

    @if ($errors->has('id_num'))

            <script>
            swal({
            type: 'warning',
            title: 'Login Error!',
            text: 'Your credentials do not match our records.',
            showConfirmButton: false,
            timer: 3000
            })
        </script>
  @endif

@endsection
