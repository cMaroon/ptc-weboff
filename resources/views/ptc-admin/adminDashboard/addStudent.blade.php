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
      
      
                          <!-- Smart Wizard -->
                          <p>Complete the information needed.</p>
                          <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                              <li>
                                <a href="#step-1">
                                  <span class="step_no">1</span>
                                  <span class="step_descr">
                                                    Step 1<br />
                                                    <small>Student Detail</small>
                                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#step-2">
                                  <span class="step_no">2</span>
                                  <span class="step_descr">
                                                    Step 2<br />
                                                    <small>Program</small>
                                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#step-3">
                                  <span class="step_no">3</span>
                                  <span class="step_descr">
                                                    Step 3<br />
                                                    <small>Course Description</small>
                                                </span>
                                </a>
                              </li>
                              <li>
                                <a href="#step-4">
                                  <span class="step_no">4</span>
                                  <span class="step_descr">
                                                    Step 4<br />
                                                    <small>Checking of Student Information</small>
                                                </span>
                                </a>
                              </li>
                            </ul>
                            <div id="step-1">
                              <form class="form-horizontal form-label-left">
      
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sex</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                      </label>
                                      <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="female"> Female
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                  </div>
                                </div>
      
                              </form>
      
                            </div>
                            <div id="step-2">
                              <h2 class="StepTitle">Step 2 Content</h2>
                              <p>
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                            </div>
                            <div id="step-3">
                              <h2 class="StepTitle">Step 3 Content</h2>
                              <p>
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                            </div>
                            <div id="step-4">
                              <h2 class="StepTitle">Step 4 Content</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                            </div>
      
                          </div>
                          <!-- End SmartWizard Content -->
      
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