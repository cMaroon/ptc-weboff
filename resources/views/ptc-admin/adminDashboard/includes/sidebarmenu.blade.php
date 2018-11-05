<!-- menu profile quick info -->
<div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/logo_ptcbw.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-tasks" ></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                      <li><a href="{{ route('studentlist') }}">Student List</a></li>
                      <li><a href="index.html">Recent Activities</a></li>
                      <li><a href="index3.html">Quick Reports</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-users"></i> Records <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Add Employee</a></li>
                      <li><a href="{{ route('addStudent') }}">Add Student</a></li>
                      <li><a href="index3.html">View Report</a></li>
                    </ul>
                  </li>

                  <li><a href="{{ route('managePosts') }}"><i class="fa fa-file-text"></i> Manage Posts </a></li> 
                  

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->