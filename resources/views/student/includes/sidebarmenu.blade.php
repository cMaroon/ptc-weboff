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

                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-tasks"></i> Dashboard </a></li> 
                    <li><a href="{{ route('studentprofile') }}"><i class="fa fa-user"></i> Profile </a></li> 
                    
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                  <i class="fa fa-power-off"></i>
                          
                                      {{ __('Logout') }}
                                
                        </a>
    
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
    
                    <li>
                        <a onclick="openFullscreen();">
                            <i class="fa fa-arrows-alt"></i> Fullscreen 
                          </a>
                    </li>
                
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->