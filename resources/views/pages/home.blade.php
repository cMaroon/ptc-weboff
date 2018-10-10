@extends('master', ['title' => 'Home'])

@section('content')
    <div class="wrapper ptc-welcome">
        <div class="ptc-page"> 
            <article>
                <h1><span class="font-weight-bold">OUR</span>VISION</h1>
                <blockquote>
                    <i class="fas fa-quote-left"></i> The Pateros Technological College envisions itself as an institution of higher learning which is strongly committed to the holistic development of the students to improve their lives in particular and the society in general. <i class="fas fa-quote-right"></i>
                </blockquote>
            </article>
        </div>
    </div>

    <div class="wrapper">
        <div class="ptc-page ptc-introblocks"> 
            <ul>
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
                        <img src="{{ asset('images/logo_itred.png') }}" alt="PTC-TESDA-LOGO">
                        <h4>Institute of Technical Resources and Entrepreneurial Development</h4>
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
                            <h1 class="ptc-card__header-title">News and Announcements</h1>
                            <a href="#" class="ptc-card__header-link">View All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="ptc-card__body">
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <article class="ptc-card__list-news-image">
                                        <div class="ptc-card__list-news-image--img" style="background-image: url('{{ asset('images/announcements/no-image.png') }}');"></div>
                                        <div class="ptc-card__list-news-inner">
                                            <a href="{{ route('home') }}" class="ptc-card__list-news-title" data-toggle="tooltip" data-placement="top" data-title="{{ $post->title }}">{{ str_limit($post->title, 30) }}</a>
                                            <div class="ptc-card__list-news-date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</div>
                                            <div class="ptc-card__list-news-tags"><span class="badge {{$post->category->color}}">{{$post->category->title}}</span></div>
                                            <div class="ptc-card__list-news-summary">
                                                {{ str_limit($post->body, 155) }}
                                                <a href="{{ route('home') }}">Continue Reading</a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h1 class="ptc-card__header-title">Presidents Corner</h1>
                            <a href="#" class="ptc-card__header-link">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="ptc-card__body">
                            <img class="ptc-card__image mb-3" src="{{ asset('images/ptc-staff/dr-arcega.png') }}">
                            <h3 class="ptc-card__president text-center mb-0">
                                ANALIZA F. ARCEGA, DEM
                                <span><b>The PTC President</b></span>
                            </h3>
                        </div>
                    </div>

                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h1 class="ptc-card__header-title">Event Calendar</h1>
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

    @include('includes.footer')

    
@endsection
