@extends('master', ['title' => 'Home'])

@section('content')


<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/welcome.jpg')">
    <div id="pageintro" class="hoc clear"> 

        <article>
            <h2 class="heading underline center" >OUR VISION</h2>
            <blockquote class="font-weight-light"><i class="fas fa-quote-left"></i> The Pateros Technological College envisions itself as an institution of higher learning which is strongly committed to the holistic development of the students to improve their lives in particular and the society in general. <i class="fas fa-quote-right"></i></blockquote>
        </article>

    </div>
</div>

<div class="wrapper row3">
    <div id="introblocks" class="hoc clear"> 
        <ul class="nospace clear mb-0">
            <li>
                <article>
                    <img src="{{ asset('images/logo_bsit.png') }}" alt="PTC-LOGO"><br>
                    <h4 class="heading underline center">Bachelor of Science in Information Technology<br> (BSIT)</h4>
                    <h4 class="heading underline center">Certificate in Computer Science <br>(CCS)</h4>
                </article>
            </li>

            <li>
                <article>
                    <img src="{{ asset('images/logo_bsoa.png') }}" alt="PTC-LOGO"><br>
                    <h4 class="heading underline center">Bachelor of Science in Office Administration<br> (BSOA)</h4>
                    <h4 class="heading underline center">Certificate in Office Administration<br> (COA)</h4>
                </article>
            </li>

            <li>
                <article>
                    <img src="{{ asset('images/logo_chrm.png') }}" alt="PTC-LOGO"><br>
                    <h4 class="heading underline center">Certificate in Hotel and Restaurant Management<br> (CHRM)</h4>
                </article>
            </li>


            <li>
                <article>
                    <img src="{{ asset('images/logo_tesda.png') }}" alt="PTC-LOGO"><br>
                    <h4 class="heading underline center">Institute of Technical Resources and Entreprenurial Development<br> (ITRED)</h4>
                </article>
            </li>

            <li>
                <article>
                    <img src="{{ asset('images/logo_shs.png') }}" alt="PTC-LOGO"><br>
                    <h4 class="heading underline center">Senior High School<br> (SHS)</h4>
                </article>
            </li>
        </ul>
    </div>
</div>

<div class="wrapper row3">
    <main class="hoc container clear" style="padding-top: 30px"> 
    <!-- main body -->

        <div class="group">
            <div class="two_third first"> 

                <div class="card border-success mb-3" style="max-width: 50rem;">
                    <div class="card-header">
                        <span class="font-x2 font-weight-light font-italic">News</span>
                    </div>
                    <div class="card-body">

                        <div class="one_half first">
                            <img src="{{ asset('images/announcements/no-image.png') }}" alt="">
                        </div>

                        <figcaption class="one_half mb-4">
                            <span class="badge badge-success">News</span>
                            <h1 class="font-x1">This is a News Title</h1>
                            <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                            <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                            <footer>
                                <a href="#">Read More &raquo;</a>
                            </footer>
                        </figcaption>

                        <div class="one_half first">
                            <img src="{{ asset('images/announcements/no-image.png') }}" alt="">
                        </div>

                        <figcaption class="one_half mb-4">
                            <span class="badge badge-warning">Event</span>
                            <h1 class="font-x1">This is a Event Title</h1>
                            <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                            <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                            <footer>
                                <a href="#">Read More &raquo;</a>
                            </footer>
                        </figcaption>

                        <div class="one_half first">
                            <img src="{{ asset('images/announcements/no-image.png') }}" alt="">
                        </div>

                        <figcaption class="one_half mb-4">
                            <span class="badge badge-info">Guide</span>
                            <h1 class="font-x1">This is a Guide Title</h1>
                            <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                            <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                            <footer>
                                <a href="#">Read More &raquo;</a>
                            </footer>
                        </figcaption>

                        <div class="one_half first">
                            <img src="{{ asset('images/announcements/no-image.png') }}" alt="">
                        </div>

                        <figcaption class="one_half mb-4">
                            <span class="badge badge-success">News</span>
                            <h1 class="font-x1">This is a Second News Title</h1>
                            <p>Turpis aliquam ullamcorper non ut urna phasellus imperdiet magna.</p>
                            <p>Nibh eget eleifend nunc hendrerit vitae cras auctor nibh a ipsum rutrum et sagittis ipsum tristique</p>
                            <footer>
                                <a href="#">Read More &raquo;</a>
                            </footer>
                        </figcaption>

                        <div class="card rounded-1 mb-0">
                            <div class="card-body text-center">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <div class="one_third"> 
        <div class="card border-success mb-3">
        <div class="card-header font-x2">President's Corner</div>
        <div class="card-body">
        <div class="card-title">The PTC President</div>
        <div class="card-subtitle text-muted">ANALIZA F. ARCEGA, DEM</div>
        </div>
        <img src="{{ asset('images/ptc-staff/dr-arcega.png') }}" alt="">
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
        <div><a href="#">Quis nunc fusce vestibulum</a>
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
        <div><a href="#">Lorem mi semper aliquam</a>
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
        <div><a href="#">Pretium sapien enim eget</a>
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
        <div><a href="#">Pretium sapien enim eget</a>
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
        <div><a href="#">Pretium sapien enim eget</a>
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

        <!-- / main body -->
    </main>
</div>

<div class="wrapper row4 ">
    <div id="logo_ptcfooter">
        
        <img src="{{ asset('images/logo_ptcbw.png') }}" alt="PTC-LOGO" >
    </div>


    <footer id="footer" class="hoc topspace-0 clear "> 
        <div class="group ">

            <div class="one_half first">

            <h6 class="title ">Pateros Technological College</h6>
            <p class="btmspace-30">This is the Official Website of Pateros Technological College</p>

            <ul class="nospace inline pushright">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Security</a></li>
            </ul>
            <br>
            PTC GOOGLE MAP HERE

            </div>

            <div class="one_quarter">
                <h6 class="title">Accreditation</h6>
                <article>
                    <h2 class="nospace font-x1"><a href="#">Official</a></h2>
                    <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos integer volutpat.</p>
                </article>
            </div>

            <div class="one_quarter">
                <h6 class="title">Important Links</h6>
                <ul class="nospace linklist">
                    <li><a href="#">Scelerisque tortor ac mollis</a></li>
                    <li><a href="#">Lectus nisl semper sit amet</a></li>
                    <li><a href="#">Quis dictum vestibulum arcu</a></li>
                    <li><a href="#">Curabitur dignissim nulla</a></li>
                    <li><a href="#">Pulvinar integer dapibus</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
        <p class="fl_left">&copy; 2018. Pateros Technological College. All rights reserved </p>
        <p class="fl_right">Developed and maintained by <a target="_blank" href="#" title="PTC-TIS">PTC-Technical Information System</a></p>
    </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
@endsection
