@extends('front.layout.app')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('front/assets/img/breadcumb/bg-img.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Servce Area
==============================-->
    <section class="service-sec space-bottom space">
        <div class="container">
            <div class="row justify-content-center service-slider2 th-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_about_1.svg') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Trusted Company</a></h3>
                            <p class="service-grid_text">Facilisis arcu. Mauris mi orci, pulvinar ac finibus</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_about_2.svg') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Refund Guarantee</a></h3>
                            <p class="service-grid_text">Dedicated Facilisis arcu. Mauris mi orci, pulvinar aca</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_about_3.svg') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Non-Policy Fee</a></h3>
                            <p class="service-grid_text">Support Facilisis arcu. Mauris mi pulvinar venen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Feature Area-2
==============================-->
    <div class="feature-area-2 overflow-hidden">
        <div class=" position-relative">
            <div class="img-half img-left feature-thumb-2">
                <img src="{{ asset('front/assets/img/normal/wcu-thumb-3.png') }}" alt="img">
                <div class="shape-mockup jump z-index-3 d-sm-block d-none" data-right="0" data-bottom="0"><img src="{{ asset('front/assets/img/normal/wcu-thumb-3-2.png') }}" alt="img"></div>
            </div>
            <div class="container">
                <div class="row justify-content-lg-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="title-area space-bottom mb-0 ms-xl-0 ms-lg-4 ms-0 text-center text-lg-start">
                            <span class="sub-title">Get to know Us</span>
                            <h2 class="sec-title">Excellent consultancy Gives you easy success.</h2>
                            <p class="mt-30 mb-40">Aenean tristique ante velit, iaculis semper est scelerisque nec. Nunc eget commodo dui, sit amet ullamcorper magna. Integer</p>
                            <div class="feature-circle-wrap">
                                <div class="feature-circle">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="95">
                                            <div class="circle-num">95%</div>
                                        </div>
                                        <div class="feature-circle_content">
                                            <h5 class="feature-circle_title">Claim Success Rates</h5>
                                            <p class="feature-circle_text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-circle">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="90">
                                            <div class="circle-num">90%</div>
                                        </div>
                                        <div class="feature-circle_content">
                                            <h5 class="feature-circle_title">Clients Satisfied</h5>
                                            <p class="feature-circle_text">Satisfied clients habitant morbi tristique senectus et netus et malesuada fames</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Cta Area
==============================-->
    <section class="cta-sec6 space text-center text-lg-start overflow-hidden" data-bg-src="{{ asset('front/assets/img/bg/cta_bg_5.png') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="title-area mb-0">
                        <span class="sub-title style3">Get to know Us</span>
                        <h2 class="sec-title style2 text-white">Insurance for your loved ones and belongings.</h2>
                    </div>
                </div>
                <div class="col-lg-auto mt-5 mt-lg-0 align-self-center">
                    <div class="cta-contact-wrap text-center">
                        <h6 class="subtitle">Emergency Call Us</h6>
                        <h3 class="title"><a href="tel:+01145656868">+011 (456) 568 68</a></h3>
                        <a href="contact.html" class="th-btn">Request a quote<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-right="0" data-bottom="0">
            <img src="{{ asset('front/assets/img/shape/cta-6-shape.png') }}" alt="img">
        </div>
    </section>
    <!--==============================
Team Area
==============================-->
    <section class="team-sec-2 overflow-hidden space ">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Team</span>
                <h2 class="sec-title">Experience Team Members</h2>
            </div>
            <div class="row th-carousel team-slider1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-dots="false">
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_1.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Eleanor Pena</a></h3>
                            <span class="team-desig">Founder & CEO</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_2.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Esther Howard</a></h3>
                            <span class="team-desig">Sr. Manager</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_3.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Annette Black</a></h3>
                            <span class="team-desig">UI Designer</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_4.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Ronald Richards</a></h3>
                            <span class="team-desig">Web Designer</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_5.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Jade Smith</a></h3>
                            <span class="team-desig">Founder & CEO</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_6.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Selena Mariasha</a></h3>
                            <span class="team-desig">Sr. Manager</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_7.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Emerson Anderson</a></h3>
                            <span class="team-desig">UI Designer</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team_3_8.png') }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a href="#" class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">Evelyn Romano</a></h3>
                            <span class="team-desig">Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
