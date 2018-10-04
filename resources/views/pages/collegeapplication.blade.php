@extends('master', ['title' => 'Admission'])

@section('content')
    


    <div class="wrapper mb-4 mt-4">
        <main class="ptc-page">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h1 class="ptc-card__header-title">College Online Registration</h1>
                            
                        </div>
                        <div class="ptc-card__body">
                           <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                        <label for="fullname">Full Name * :</label>
                        <input type="text" id="fullname" class="form-control" name="fullname" required />
  
                        <label for="email">Email * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
  
       
                            <label for="heard">Heard us by *:</label>
                            <select id="heard" class="form-control" required>
                              <option value="">Choose..</option>
                              <option value="press">Press</option>
                              <option value="net">Internet</option>
                              <option value="mouth">Word of mouth</option>
                            </select>
  
                            <label for="message">Message (20 chars min, 100 max) :</label>
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"></textarea>
  
                            <br/>
                            <span class="btn btn-primary">Validate form</span>
  
                      </form>
                      <!-- end form for validations -->
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
                        <p class="ptc-footer__text">Pateros Technological College Web-based Integrated School Information System</p>

                        <ul class="nospace inline pushright ptc-footer__list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                        <center>
                        <a href="/images/qr_ptc.png?299857bd87f9318948665bafa8a65975" target="_blank"><div class="ptc-qrptc ptc-qrptc--image"></div></a>
                        </center>
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
                <p class="fl_right">Developed and maintained by <span class="text-primary" data-toggle="tooltip" data-placement="top" title="PTC-Information Technology System collaboration with Emmanuel See Te">PTC-ITS</span></p>
            </div>
        </div>
    </div>
@endsection
