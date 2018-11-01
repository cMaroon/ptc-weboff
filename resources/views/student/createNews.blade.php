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
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3>News Posts</h3>
                    </div>
      
                    <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="clearfix"></div>
      
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Plain Page</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            Add content to the page ...
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