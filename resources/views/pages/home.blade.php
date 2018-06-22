@extends('master', ['title' => 'Home'])

@section('content')
    <div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/welcome.jpg')">
        <div id="pageintro" class="hoc clear"> 
            <article>
                <h2 class="heading underline center font-weight-light"><span class="text-emerald font-weight-bold">OUR</span>VISION</h2>
                <blockquote class="font-weight-light">
                    <i class="fas fa-quote-left"></i> The Pateros Technological College envisions itself as an institution of higher learning which is strongly committed to the holistic development of the students to improve their lives in particular and the society in general. <i class="fas fa-quote-right"></i>
                </blockquote>
            </article>
        </div>{{-- #pageintro --}}
    </div>

    <div class="wrapper row3">
        <div id="introblocks" class="hoc clear"> 
            <ul class="nospace clear mb-0">
                <li>
                    <article>
                        <img src="{{ asset('images/logo_bsit.png') }}" alt="PTC-BSIT-LOGO">
                        <h4 class="heading underline center">Bachelor of Science in Information Technology</h4>
                        <h4 class="heading underline center">Certificate in Computer Science</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_bsoa.png') }}" alt="PTC-BSOA-LOGO">
                        <h4 class="heading underline center">Bachelor of Science in Office Administration</h4>
                        <h4 class="heading underline center">Certificate in Office Administration</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_chrm.png') }}" alt="PTC-CHRM-LOGO">
                        <h4 class="heading underline center">Certificate in Hotel and Restaurant Management</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_tesda.png') }}" alt="PTC-TESDA-LOGO">
                        <h4 class="heading underline center">Institute of Technical Resources and Entreprenurial Development</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_shs.png') }}" alt="PTC-SHS-LOGO">
                        <h4 class="heading underline center">Senior High School</h4>
                    </article>
                </li>
            </ul>{{-- #introblocks --}}
        </div>
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear" style="padding-top: 30px"> 
            <div class="group">
                <div class="two_third first"> 
                    <div class="card border-success mb-3" style="max-width: 50rem;">
                        <div class="card-header">
                            <span class="font-x2 font-weight-light font-italic">News</span>
                        </div>

                        <div class="card-body">
                            <div class="one_half first">
                                <img src="{{ asset('images/announcements/no-image.png') }}">
                            </div>

                            <figcaption class="one_half mb-4">
                                <span class="badge badge-success">News</span>
                                <h1 class="font-x1">This is a News Title</h1>
                                <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                                <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                                <footer>
                                    <a href="#">Continue Reading &raquo;</a>
                                </footer>
                            </figcaption>

                            <div class="one_half first">
                                <img src="{{ asset('images/announcements/no-image.png') }}">
                            </div>

                            <figcaption class="one_half mb-4">
                                <span class="badge badge-warning">Event</span>
                                <h1 class="font-x1">This is a Event Title</h1>
                                <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                                <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                                <footer>
                                    <a href="#">Continue Reading &raquo;</a>
                                </footer>
                            </figcaption>

                            <div class="one_half first">
                                <img src="{{ asset('images/announcements/no-image.png') }}">
                            </div>

                            <figcaption class="one_half mb-4">
                                <span class="badge badge-info">Guide</span>
                                <h1 class="font-x1">This is a Guide Title</h1>
                                <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                                <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                                <footer>
                                    <a href="#">Continue Reading &raquo;</a>
                                </footer>
                            </figcaption>

                            <div class="one_half first">
                                <img src="{{ asset('images/announcements/no-image.png') }}">
                            </div>

                            <figcaption class="one_half mb-0">
                                <span class="badge badge-success">News</span>
                                <h1 class="font-x1">This is a Second News Title</h1>
                                <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                                <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                                <footer>
                                    <a href="#">Continue Reading &raquo;</a>
                                </footer>
                            </figcaption>
                        </div>

                        <div class="card-footer text-muted">
                            <footer><a href="#">See All ></a></footer>
                        </div>
                    </div>
                </div>

                <div class="one_third"> 
                    <div class="card border-success mb-3">
                        <div class="card-header">
                            <span class="font-x2 font-weight-light font-italic">President's Corner</span>
                        </div>

                        <div class="card-body">
                            <p class="card-title">The PTC President</p>
                            <p class="card-subtitle text-muted">ANALIZA F. ARCEGA, DEM</p>
                        </div>

                        <img src="{{ asset('images/ptc-staff/dr-arcega.png') }}">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <div class="card-footer text-muted">
                            <footer><a href="#">Read More &raquo;</a></footer>
                        </div>
                    </div>

                    <div class="card border-success">
                        <div class="card-body">
                            <h4 class="heading underline font-x1 btmspace-30">School Calendar Event</h4>
                            <ul class="infolist">

                                <li>
                                    <div>
                                        <time data-title="June"><strong>Jun</strong> <em>06</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Quis nunc fusce vestibulum</a>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> Vestibulum</li>
                                            <li><i class="fa fa-clock"></i> 08:00 - 09:00am</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div>
                                        <time data-title="July"><strong>Jul</strong> <em>15</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Lorem mi semper aliquam</a>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> Faucibus orci</li>
                                            <li><i class="fa fa-clock"></i> 13:00 - 14:00pm</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div>
                                        <time data-title="August"><strong>Aug</strong> <em>21</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Pretium sapien enim eget</a>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> Luctus et ultrices</li>
                                            <li><i class="fa fa-clock-o"></i> 16:30 - 18:00pm</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div>
                                        <time data-title="September"><strong>Sept</strong> <em>29</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Pretium sapien enim eget</a>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> Luctus et ultrices</li>
                                            <li><i class="fa fa-clock-o"></i> 16:30 - 18:00pm</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div>
                                        <time data-title="October"><strong>Oct</strong> <em>01</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Pretium sapien enim eget</a>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> Luctus et ultrices</li>
                                            <li><i class="fa fa-clock-o"></i> 16:30 - 18:00pm</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="ptc-footer">
        <div class="wrapper">
            {{-- <div id="logo_ptcfooter">  
                <img src="{{ asset('images/logo_ptcbw.png') }}" alt="PTC-LOGO-BW">
            </div> --}}

            <footer id="footer" class="hoc topspace-0 clear"> 
                <div class="group">
                    <div class="one_half first">
                        <h6 class="title font-weight-bold">Pateros Technological College</h6>
                        <p class="btmspace-30 font-italic">This is the Official Website of Pateros Technological College</p>

                        <ul class="nospace inline pushright">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>

                    <div class="one_quarter">
                        <h6 class="title mb-1">Accreditation</h6>
                        <article>
                            <time datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos integer volutpat.</p>
                        </article>
                    </div>

                    <div class="one_quarter">
                        <h6 class="title mb-1">About</h6>
                        <ul class="nospace linklist">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Mission/Core Values</a></li>
                            <li><a href="#">PTC Hymn</a></li>
                            <li><a href="#">Retrospections and Insights</a></li>
                            <li><a href="#">PTC President's Report</a></li>
                            <li><a href="#">PTC Under the New Administration</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>

        <div class="wrapper">
            <div id="copyright" class="hoc clear ptc-copyright"> 
                <p class="fl_left">&copy; 2018 Pateros Technological College. All rights reserved </p>
                <p class="fl_right">Developed and maintained by <span class="text-nephritis" data-toggle="tooltip" data-placement="top" title="PTC-Technical Information System collaboration with Emmanuel See Te">PTC-TIS</span></p>
            </div>
        </div>
    </div>
@endsection
