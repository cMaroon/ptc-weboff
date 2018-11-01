@extends('master-dashboard', ['title' => 'Dashboard'])

@section('content')
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

             @include('ptc-admin.adminDashboard.includes.sidebarmenu')

            <!-- /menu footer buttons -->
            @include('ptc-admin.adminDashboard.includes.menufooter')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('ptc-admin.adminDashboard.includes.topnavigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

                  <div class="clearfix"></div>
      
                  <div class="row">
      
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Student Information </h2>
                          
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
      
      
                          <div class="container">
                            <br />
                            
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                              @csrf
      
                              <div class="form-group row">
                                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
      
                                      @if ($errors->has('name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
      
                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
      
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
      
                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
      
                              <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>
      
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Next Page') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                    
                        </div>

      
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('ptc-admin.adminDashboard.includes.footer')
        <!-- /footer content -->
      </div>
    </div>



@endsection