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
                            <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                    
                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul>
                                    <li><a href="#step-1">Step 1<br /><small>Student's Directory</small></a></li>
                                    <li><a href="#step-2">Step 2<br /><small>Name</small></a></li>
                                    <li><a href="#step-3">Step 3<br /><small>Address</small></a></li>
                                    <li><a href="#step-4">Step 4<br /><small>Terms and Conditions</small></a></li>
                                </ul>
                    
                                <div>
                                    <div id="step-1">
                                        <h2>Student's Directory</h2>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <div class="form-group">

                                                
                                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname" required>
                                                <div class="help-block with-errors"></div>
                                                <label for="email">Email address:</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>






                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                    
                                    </div>
                                    <div id="step-2">
                                        <h2>Your Name</h2>
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <h2>Your Address</h2>
                                        <div id="form-step-2" role="form" data-toggle="validator">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="">
                                        <h2>Terms and Conditions</h2>
                                        <p>
                                            Terms and conditions: Keep your smile :)
                                        </p>
                                        <div id="form-step-3" role="form" data-toggle="validator">
                                            <div class="form-group">
                                                <label for="terms">I agree with the T&C</label>
                                                <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                    
                    
                                    </div>
                                </div>
                            </div>
                    
                            </form>
                    
                        </div>

                            <!-- End of SmartWizard-->
      
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