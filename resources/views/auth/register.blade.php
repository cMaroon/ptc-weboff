@extends('master-dashboard', ['title' => 'Registration'])

@section('content')
<br>

<div class="row" style="float:right; margin:25px auto; width:70%; padding:10px;">
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
              <h2>{{ __('Register') }} <small>Data Capturing Beta Version</small></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form method="POST" action="{{ route('register') }}" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf

                    <div class="form-group row">
                        <label for="id_num" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('ID Number') }}</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="id_num" type="text" class="form-control{{ $errors->has('id_num') ? ' is-invalid' : '' }}" name="id_num" value="{{ old('id_num') }}" required >

                            @if ($errors->has('id_num'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id_num') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="yearlevel" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Year Level and Section') }}</label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            <select type="text" id="year_level" name="year_level"  class="form-control{{ $errors->has('yearlevel') ? ' is-invalid' : '' }}" required="" >
                                    <option value="">Please select year level*</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                    <option value="Grade 11">Grade 11</option>
                                    <option value="Grade 12">Grade 12</option>
                            </select>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            <select type="text" id="section" name="section" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}"required="" >
                                    <option value="">Please select section*</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="Executive">Executive</option>
                                    <option value="SHS">Senior High School</option>
                            </select>
                            </div>
                       
                    </div>
                    <div class="form-group row">
                            <label for="acad_program" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Program') }}</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <select type="text" id="acad_program" name="acad_program" class="form-control{{ $errors->has('acad_program') ? ' is-invalid' : '' }}" required="">
                                    <option value="">Please select your program*</option>
                                    <option value="ABA">Associate in Business Administration</option>
                                    <option value="COA">Certificate in Office Administration</option>
                                    <option value="CCS">Certificate in Computer Science</option>
                                    <option value="CHRM">Certificate in Hotel and Restaurant Management</option>
                                    <option value="BSIT">Bachelor of Science in Information Technology</option>
                                    <option value="BSOA">Bachelor of Science in Office Administration</option>
                                    <option value="BSIT-EXEC">Executive - Bachelor of Science in Information Technology</option>
                                    <option value="BSOA-EXEC">Executive - Bachelor of Science in Office Administration </option>
                                    <option value="ABM">Accountancy, Business and Management </option>
                                    <option value="HUMSS">Humanities and Social Science </option>
                                    <option value="TECH-VOC ICT">Tech-Voc Information and Communications Technology </option>
                            </select>
                            </div>
                                                     
                    </div>
                    <div class="form-group row">
                        <label for="firstname" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('First Name') }}</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required >

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middlename" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Middle Name') }}</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}"  >

                            @if ($errors->has('middlename'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('middlename') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Last Name') }}</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required >

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required style="text-transform: lowercase">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                        <div class="col-md-6">
                            <input value="123456" id="password" type="hidden" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                        <div class="col-md-6">
                            <input value="123456" id="password-confirm" type="hidden" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection
