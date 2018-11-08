@extends('master-dashboard', ['title' => 'List of Program'])

@section('content')

  <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
              <div class="clearfix"></div>

              @include('ptc-admin.adminDashboard.includes.sidebarmenu')

              <!-- /menu footer buttons -->
              @include('includes.menufooter')
              <!-- /menu footer buttons -->
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
                        <programs></programs>
                     </div>
                  
                    {{-- @include('ptc-admin.adminDashboard.includes.content-studentlist') --}}
              

                  </div>
          </div>
          <!-- /page content -->

          <!-- footer content -->
          @include('includes.footer-dashboard')
          <!-- /footer content -->
        </div>
      </div>


@endsection