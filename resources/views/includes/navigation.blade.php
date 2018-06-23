<div class="visible-xs no-print">
    <nav class="navbar-mobile navbar navbar-default">
        <div class="container">
            <div class="navbar-header navbar-mobile__header">
                <div class="navbar-mobile__header-section">
                    <span class="navbar-mobile__brand navbar-brand u-ellipsis-overflow">Home</span>
                </div>
                <div class="navbar-mobile__header-section navbar-mobile__header-section--buttons">
                    <button class="navbar-toggle navbar-mobile__toggle" type="button" data-toggle="collapse" data-target="#xs-navbar" aria-controls="xs-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-mobile__toggle-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse navbar-mobile__menu" id="xs-navbar">
            <ul class="nav navbar-nav navbar-mobile__menu-items">
                <li class="navbar-mobile-item dropdown">
                    <a data-toggle="dropdown" class="navbar-mobile-item__main dropdown-toggle" href="https://osu.ppy.sh/home">
                        <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--closed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
            
                        <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--opened">
                            <i class="fas fa-chevron-down"></i>
                        </span>

                        Home
                    </a>
            
                    <ul class="dropdown-menu" role="menu" aria-labelledby="expand-home">
                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                News
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                Team
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>

                                Changelog
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navbar-mobile-item dropdown">
                    <a data-toggle="dropdown" class="navbar-mobile-item__main dropdown-toggle" href="https://osu.ppy.sh/home">
                        <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--closed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
            
                        <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--opened">
                            <i class="fas fa-chevron-down"></i>
                        </span>

                        Administration
                    </a>
            
                    <ul class="dropdown-menu" role="menu" aria-labelledby="expand-home">
                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                Office of the President
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                Office of the Vice President for Administration and Finance
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
        
                                Board of Trustees
                            </a>
                        </li>

                        <li>
                            <a class="navbar-mobile-item__submenu" href="" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                <span class="navbar-mobile-item__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>

                                Management Committee
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="hidden-xs no-print nav2-header">
    <div class="ptc-page">
        <div class="nav2">
            <div class="nav2__colgroup nav2__colgroup--menu">
                <div class="nav2__col nav2__col--menu">
                    <a href="{{ route('home') }}" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-home">
                        <span class="nav2__menu-link-main-text">
                            Home
                            {{-- Active --}}
                            <span class="nav2__menu-link-bar u-section--bg-normal"></span>
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-home" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                News
                            </a>
                            <a href="#" class="simple-menu__item">
                                Team
                            </a>
                            <a href="#" class="simple-menu__item">
                                Changelog
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-administration">
                        <span class="nav2__menu-link-main-text">
                            Administration
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-administration" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Office of the President
                            </a>
                            <a href="#" class="simple-menu__item">
                                Office of the Vice President for Administration and Finance
                            </a>
                            <a href="#" class="simple-menu__item">
                                Board of Trustees
                            </a>
                            <a href="#" class="simple-menu__item">
                                Management Committee
                            </a>
                            <a href="#" class="simple-menu__item">
                                College Department Faculty
                            </a>
                            <a href="#" class="simple-menu__item">
                                Senior High School Department Faculty
                            </a>
                            <a href="#" class="simple-menu__item">
                                ITRED Faculty and Staff
                            </a>
                            <a href="#" class="simple-menu__item">
                                Administrative Personnel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-organization">
                        <span class="nav2__menu-link-main-text">
                            Organization
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-organization" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Faculty Club
                            </a>
                            <a href="#" class="simple-menu__item">
                                PTC Cup
                            </a>
                            <a href="#" class="simple-menu__item">
                                College Supreme Student Council
                            </a>
                            <a href="#" class="simple-menu__item">
                                PTC Student Volunteers
                            </a>
                            <a href="#" class="simple-menu__item">
                                Senior High School Officers
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-academics">
                        <span class="nav2__menu-link-main-text">
                            Academics
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-academics" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Four Year Program
                            </a>
                            <a href="#" class="simple-menu__item">
                                Two Year Program
                            </a>
                            <a href="#" class="simple-menu__item">
                                Senior High School
                            </a>
                            <a href="#" class="simple-menu__item">
                                Executive Program
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-admission">
                        <span class="nav2__menu-link-main-text">
                            Admission
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-admission" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                College Application
                            </a>
                            <a href="#" class="simple-menu__item">
                                Senior High School Application
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-student">
                        <span class="nav2__menu-link-main-text">
                            Student
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-student" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Portal
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-alumni">
                        <span class="nav2__menu-link-main-text">
                            Alumni
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-alumni" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Alumni
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-about">
                        <span class="nav2__menu-link-main-text">
                            About
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-about" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                History
                            </a>
                            <a href="#" class="simple-menu__item">
                                Mission/Core Values
                            </a>
                            <a href="#" class="simple-menu__item">
                                PTC Hymn
                            </a>
                            <a href="#" class="simple-menu__item">
                                Retrospections and Insights
                            </a>
                            <a href="#" class="simple-menu__item">
                                PTC President's Report
                            </a>
                            <a href="#" class="simple-menu__item">
                                PTC Under the New Administration
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav2__col nav2__col--menu">
                    <a href="#" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-dashboard">
                        <span class="nav2__menu-link-main-text">
                            Dashboard
                        </span>
                    </a>

                    <div class="nav2__menu-popup">
                        <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-dashboard" data-visibility="hidden">
                            <a href="#" class="simple-menu__item">
                                Settings
                            </a>
                            <a href="#" class="simple-menu__item">
                                Login
                            </a>
                            <a href="#" class="simple-menu__item">
                                Register
                            </a>
                            <a href="#" class="simple-menu__item">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
