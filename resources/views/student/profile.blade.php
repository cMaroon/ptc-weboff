@extends('master-dashboard', ['title' => 'Student Portal'])

@section('content')
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

             @include('student.includes.sidebarmenu')

            <!-- /menu footer buttons -->
            @include('includes.menufooter')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('includes.topnavigation')
        <!-- /top navigation -->

        <!-- page content -->
        @include('student.includes.content')
        
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.footer-dashboard')
        <!-- /footer content -->
      </div>
    </div>



@endsection