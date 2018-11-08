@extends('master-dashboard', ['title' => 'Student Portal'])

@section('content')
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

             @include('student.includes.sidebarmenu')

          </div>
        </div>

        <!-- top navigation -->
        @include('includes.topnavigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix">
              <div class="page-title">

              </div>
  
              <div class="clearfix"></div>
              
               <div class="container">
                  <profile></profile>
               </div>
            
        

            </div>
    </div>

        {{-- @include('student.includes.content') --}}
        
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.footer-dashboard')
        <!-- /footer content -->
      </div>
    </div>



@endsection