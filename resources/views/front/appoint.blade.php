@extends('front.layout.app')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('front/assets/img/breadcumb/bg-img.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Appointment</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Appointment</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Project Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sub-title">Company Fun Pact</span>
                        <h2 class="sec-title">Excellent Achievement for Insurance Consulting </h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="appointment-author-wrap mb-40 mb-xl-0">
                        <div class="author-wrap">
                            <div class="thumb"><img src="{{ asset('front/assets/img/normal/appointment-author.png') }}" alt="img"></div>
                            <div class="author-details">
                                <h4 class="auhtor-title">Ronald Richards</h4>
                                <p class="author-desig">Founder & CEO</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="author-sign">
                            <img src="{{ asset('front/assets/img/normal/appointment-author-sign.png') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="page-single">
                        <div class="video-box3">
                            <img src="{{ asset('front/assets/img/normal/appointment-video.png') }}" alt="video">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Project Area
==============================-->

    <!--==============================
Appointment Area
==============================-->
    <section class="space overflow-hidden bg-title">
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="-5%" data-left="0%"><img src="{{ asset('front/assets/img/shape/appointment-bg-shape.png') }}" alt="shape"></div>
        <div class="img-half img-right video-box2">
            <img src="{{ asset('front/assets/img/normal/appointment-form-thumb.png') }}" alt="img">
            <div class="appointment-cta-wrap media">
                <div class="global-icon">
                    <i class="fa-light fa-phone-volume"></i>
                </div>
                <div class="media-body">
                    <h6 class="wrap_text">Have any Questions</h6>
                    <h3 class="wrap_title"><a href="tel:01145656868">+011 (456) 568 68</a></h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-40 align-items-end">
                <div class="col-xl-5">
                    <div class="title-area">
                        <span class="sub-title">Make an appointment</span>
                        <h2 class="sec-title text-white">Request an Quote </h2>
                    </div>
                    <form action="mail.php" method="POST" class="quote-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control style-dark" name="name" id="name" placeholder="Full Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control style-dark" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control style-dark" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone-flip"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control style-dark" name="company" id="company" placeholder="Company">
                            </div>
                            <div class="form-group col-md-12">
                                <select name="subject" id="subject" class="form-select style-dark">
                                    <option value="" disabled selected hidden>Select consultant</option>
                                    <option value="Life Insurance">Life Insurance</option>
                                    <option value="Business consultant">Business consultant</option>
                                    <option value="Health Insurance">Health Insurance</option>
                                    <option value="Vehicle Insurance">Vehicle Insurance</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control style-dark" placeholder="Type Massage"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn style2">Submit Now <i class="far fa-paper-plane"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
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
