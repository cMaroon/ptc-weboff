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
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">
                      <div class="row justify-content-center">
                          <div class="col-md-12">
                              <h3> 404 Error Content Not Found </h3>
                              <center>
                                Profile
                              </center>
                              </div>
                      </div>

    
                    
    
                    <div class="clearfix"></div>
                  </div>
                </div>
    
              </div>
          
                
           
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.footer-dashboard')
        <!-- /footer content -->
      </div>
    </div>



@endsection