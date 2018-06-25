@extends('master', ['title' => 'Home'])

@section('content')
    <div class="wrapper ptc-welcome ptc-welcome--overlay">
        <div id="pageintro" class="ptc-page"> 
            <article>
                <h2 class="heading underline center font-weight-light"><span class="text-secondary font-weight-bold">OUR</span>VISION</h2>
                <blockquote class="font-weight-light">
                    <i class="fas fa-quote-left"></i> The Pateros Technological College envisions itself as an institution of higher learning which is strongly committed to the holistic development of the students to improve their lives in particular and the society in general. <i class="fas fa-quote-right"></i>
                </blockquote>
            </article>
        </div>{{-- #pageintro --}}
    </div>

    <div class="wrapper">
        <div class="ptc-page ptc-introblocks"> 
            <ul class="nospace">
                <li>
                    <article>
                        <img src="{{ asset('images/logo_bsit.png') }}" alt="PTC-BSIT-LOGO">
                        <h4>Bachelor of Science in Information Technology</h4>
                        <h4>Certificate in Computer Science</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_bsoa.png') }}" alt="PTC-BSOA-LOGO">
                        <h4>Bachelor of Science in Office Administration</h4>
                        <h4>Certificate in Office Administration</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_chrm.png') }}" alt="PTC-CHRM-LOGO">
                        <h4>Certificate in Hotel and Restaurant Management</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_tesda.png') }}" alt="PTC-TESDA-LOGO">
                        <h4>Institute of Technical Resources and Entreprenurial Development</h4>
                    </article>
                </li>

                <li>
                    <article>
                        <img src="{{ asset('images/logo_shs.png') }}" alt="PTC-SHS-LOGO">
                        <h4>Senior High School</h4>
                    </article>
                </li>
            </ul>{{-- #introblocks --}}
        </div>
    </div>

    <div class="wrapper mb-4 mt-4">
        <main class="ptc-page">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h2 class="ptc-card__header-title">News and Announcements</h2>
                            <a href="#" class="ptc-card__header-link">View All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="ptc-card__body">
                            <article class="ptc-card__list-news-image">
                                <div class="ptc-card__list-news-image--img" style="background-image: url('{{ asset('images/announcements/no-image.png') }}');"></div>
                                <div class="ptc-card__list-news-inner">
                                    <a href="#" class="ptc-card__list-news-title">{{ str_limit('Eveniet excepturi laboriosam ipsa illo, molestiae architecto minima dignissimos commodi aspernatur accusantium sunt dolorem hic iusto, recusandae perspiciatis illum nulla officiis ratione quos nihil optio ab corrupti aperiam accusamus. Voluptatem earum enim molestiae, dignissimos optio nihil nisi? Nihil fugit odit perferendis ab.', 30) }}</a>
                                    <div class="ptc-card__list-news-date">1 day ago</div>
                                    <div class="ptc-card__list-news-tags"><span class="badge badge-success">News</span></div>
                                    <div class="ptc-card__list-news-summary">
                                        {{ str_limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius id porro alias debitis asperiores, dolore, error assumenda officiis atque commodi ducimus fugiat possimus, similique nulla dolor odit? Repellendus dolor sunt repellat architecto minima fugiat! Repellat dicta, illum repudiandae quis quae aliquid soluta cupiditate! Itaque, incidunt quaerat nobis praesentium laboriosam ullam.', 155) }}
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </article>
                            <article class="ptc-card__list-news-image">
                                <div class="ptc-card__list-news-image--img" style="background-image: url('{{ asset('images/announcements/no-image.png') }}');"></div>
                                <div class="ptc-card__list-news-inner">
                                    <a href="#" class="ptc-card__list-news-title">{{ str_limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error sunt cupiditate quibusdam sint officia non illo eaque omnis et iste numquam debitis, nostrum quo ducimus, tenetur porro mollitia culpa.', 30) }}</a>
                                    <div class="ptc-card__list-news-date">1 day ago</div>
                                    <div class="ptc-card__list-news-tags"><span class="badge badge-warning">Event</span></div>
                                    <div class="ptc-card__list-news-summary">
                                            {{ str_limit('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet excepturi laboriosam ipsa illo, molestiae architecto minima dignissimos commodi aspernatur accusantium sunt dolorem hic iusto, recusandae perspiciatis illum nulla officiis ratione quos nihil optio ab corrupti aperiam accusamus. Voluptatem earum enim molestiae, dignissimos optio nihil nisi? Nihil fugit odit perferendis ab.', 155) }}
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </article>
                            <article class="ptc-card__list-news-image">
                                <div class="ptc-card__list-news-image--img" style="background-image: url('{{ asset('images/announcements/no-image.png') }}');"></div>
                                <div class="ptc-card__list-news-inner">
                                    <a href="#" class="ptc-card__list-news-title">{{ str_limit('Quas necessitatibus, deserunt iusto vero ducimus suscipit minus est placeat nostrum laboriosam. Officia magni, molestiae quibusdam illum laudantium veniam nemo earum consectetur exercitationem.', 30) }}</a>
                                    <div class="ptc-card__list-news-date">1 day ago</div>
                                    <div class="ptc-card__list-news-tags"><span class="badge badge-info">Guide</span></div>
                                    <div class="ptc-card__list-news-summary">
                                        {{ str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatibus quisquam, adipisci quibusdam totam illum eius earum animi eum. Distinctio reiciendis neque quos harum, amet, quis repellendus deleniti sit aut doloremque tempore ducimus hic voluptates quibusdam impedit repudiandae minus architecto excepturi mollitia doloribus. Ullam vero fuga praesentium unde, dignissimos voluptates.', 155) }}
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </article>
                            <article class="ptc-card__list-news-image">
                                <div class="ptc-card__list-news-image--img" style="background-image: url('{{ asset('images/announcements/no-image.png') }}');"></div>
                                <div class="ptc-card__list-news-inner">
                                    <a href="#" class="ptc-card__list-news-title">{{ str_limit('Deleniti voluptatibus quisquam, adipisci quibusdam totam illum eius earum animi eum.', 30) }}</a>
                                    <div class="ptc-card__list-news-date">1 day ago</div>
                                    <div class="ptc-card__list-news-tags"><span class="badge badge-danger">Announcement</span></div>
                                    <div class="ptc-card__list-news-summary">
                                        {{ str_limit('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas necessitatibus, deserunt iusto vero ducimus suscipit minus est placeat nostrum laboriosam. Officia magni, molestiae quibusdam illum laudantium veniam nemo earum consectetur exercitationem. Sit error nesciunt, accusantium sunt veritatis, facere qui vero cumque doloremque excepturi labore, nam reprehenderit voluptas temporibus nostrum eveniet.', 155) }}
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h2 class="ptc-card__header-title">Presidents Corner</h2>
                            <a href="#" class="ptc-card__header-link">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="ptc-card__body">
                            <img class="ptc-card__image mb-3" src="{{ asset('images/ptc-staff/dr-arcega.png') }}">
                            <h3 class="ptc-card__president text-center mb-0">
                                ANALIZA F. ARCEGA, DEM
                                <span>The PTC President</span>
                            </h3>
                        </div>
                    </div>

                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h2 class="ptc-card__header-title">Event Calendar</h2>
                            <a href="#" class="ptc-card__header-link">View All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="ptc-card__body">
                            <ul class="infolist ptc-card__calendar mb-0">
                                <li>
                                    <div>
                                        <time data-title="June"><strong>Jun</strong> <em>06</em></time>
                                    </div>
                                    <div>
                                        <a href="#">Quis nunc fusce vestibulum</a>
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> Vestibulum</li>
                                            <li><i class="fas fa-clock"></i> 08:00 - 09:00am</li>
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
                                            <li><i class="fas fa-map-marker-alt"></i> Faucibus orci</li>
                                            <li><i class="fas fa-clock"></i> 13:00 - 14:00pm</li>
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
                                            <li><i class="fas fa-map-marker-alt"></i> Luctus et ultrices</li>
                                            <li><i class="fas fa-clock"></i> 16:30 - 18:00pm</li>
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
                                            <li><i class="fas fa-map-marker-alt"></i> Luctus et ultrices</li>
                                            <li><i class="fas fa-clock"></i> 16:30 - 18:00pm</li>
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
                                            <li><i class="fas fa-map-marker-alt"></i> Luctus et ultrices</li>
                                            <li><i class="fas fa-clock"></i> 16:30 - 18:00pm</li>
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

    <div class="ptc-footer ptc-footer--image">{{-- to add image background: ptc-footer--image --}}
        <div class="ptc-page">
            <footer class="topspace-0"> 
                <div class="group">
                    <div class="ptc-footer__logo">
                        <img src="{{ asset('images/logo_ptcbw.png') }}" alt="PTC-LOGO-BW">
                    </div>

                    <div class="one_half first">
                        <h6 class="ptc-footer__title mb-1">Pateros Technological College</h6>
                        <p class="ptc-footer__text">Ang Pateros Technological College ay isang kolehiyong paaralan na matatagpuan sa bayan ng Pateros, Kalakhang Maynila, Pilipinas. Ito ay itinatag noong 1993</p>
                        <p class="ptc-footer__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quis, quidem quaerat porro necessitatibus soluta velit eaque facilis atque id. Nostrum explicabo ipsam voluptates asperiores quis iure eius iste, laudantium qui tempore harum delectus quos tempora accusamus incidunt porro facilis magnam! Consequatur nisi incidunt error veniam, doloremque assumenda libero!</p>

                        <ul class="nospace inline pushright ptc-footer__list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Security</a></li>
                        </ul>
                    </div>

                    <div class="one_quarter">
                        <h6 class="ptc-footer__title mb-1">Accreditation</h6>
                        
                        {{-- <time datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                        <p class="ptc-footer__text">Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos integer volutpat.</p> --}}
                        <p class="ptc-footer__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, exercitationem?</p>
                        <p class="ptc-footer__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolores necessitatibus aspernatur, praesentium laudantium quos voluptatem accusamus beatae corporis repellendus.</p>
                    </div>

                    <div class="one_quarter">
                        <h6 class="ptc-footer__title mb-1">About Links</h6>
                        <ul class="nospace linklist ptc-footer__list">
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

            <div class="ptc-footer__copyright"> 
                <p class="fl_left">&copy; 2018 Pateros Technological College. All rights reserved </p>
                <p class="fl_right">Developed and maintained by <span class="text-primary" data-toggle="tooltip" data-placement="top" title="PTC-Technical Information System collaboration with Emmanuel See Te">PTC-TIS</span></p>
            </div>
        </div>
    </div>
@endsection
