@extends('front.layout.app')
@section('content')
    <main class="position-relative overflow-hidden">
        <!--==============================
Hero Area
==============================-->
        <div class="th-hero-wrapper hero-6" id="hero">
            <div class="hero-slider-6 th-carousel" id="heroSlide6" data-slide-show="1" data-md-slide-show="1" data-fade="true">


                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="{{ asset('front/assets/img/hero/bg_5.1.jpg') }}">
                        <img src="{{ asset('front/assets/img/update1/hero/hero_overlay_6.png') }}" alt="Hero Image">
                    </div>
                    <div class="container">
                        <div class="hero-style6">
                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Let’s Plan for an Insurance</span>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">Secure Insurance</h1>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">For Your Future</h1>
                            <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                                <ul>
                                    <li>Experts Advisors</li>
                                    <li>538+ Insurance</li>
                                </ul>
                            </div>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                                <a href="about.html" class="th-btn style3">Get Started<i class="fas fa-long-arrow-right ms-2"></i></a>
                                <a href="service.html" class="th-btn style6">Our Services<i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="{{ asset('front/assets/img/hero/bg_5.2.jpg') }}">
                        <img src="{{ asset('front/assets/img/update1/hero/hero_overlay_6.png') }}" alt="Hero Image">
                    </div>
                    <div class="container">
                        <div class="hero-style6">
                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Insure Your Peace of Mind</span>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">Great Insurance</h1>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Build Better Future</h1>
                            <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                                <ul>
                                    <li>Experts Advisors</li>
                                    <li>538+ Insurance</li>
                                </ul>
                            </div>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                                <a href="about.html" class="th-btn style3">Get Started<i class="fas fa-long-arrow-right ms-2"></i></a>
                                <a href="service.html" class="th-btn style6">Our Services<i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="{{ asset('front/assets/img/hero/bg_5.3.jpg') }}">
                        <img src="{{ asset('front/assets/img/update1/hero/hero_overlay_6.png') }}" alt="Hero Image">
                    </div>
                    <div class="container">
                        <div class="hero-style6">
                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Turning Lifes Uncertainties</span>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">We Provide Home</h1>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Insurance For You</h1>
                            <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                                <ul>
                                    <li>Experts Advisors</li>
                                    <li>538+ Insurance</li>
                                </ul>
                            </div>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                                <a href="about.html" class="th-btn style3">Get Started<i class="fas fa-long-arrow-right ms-2"></i></a>
                                <a href="service.html" class="th-btn style6">Our Services<i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-box">
                <button data-slick-prev="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-left"></i></button>
                <button data-slick-next="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-right"></i></button>
            </div>
        </div>
        <!--======== / Hero Section ========-->
        <!--==============================
    Servce Area
    ==============================-->
        <section class="service-sec7 ">
            <div class="container">
                <div class="row gy-4 justify-content-center service-wrap">
                    <div class="col-xl-3 col-lg-4 col-md-6 service-box-wrap">
                        <div class="service-box style2">
                            <div class="service-box_inner">
                                <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                            </div>
                            <div class="service-box_icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_5_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-box_title h4"><a href="service-details.html">Trusted Company</a></h3>
                            <p class="service-box_text">The trust then manages the policy and pays the premiums.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 service-box-wrap">
                        <div class="service-box style2">
                            <div class="service-box_inner">
                                <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                            </div>
                            <div class="service-box_icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_5_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-box_title h4"><a href="service-details.html">Safe your money</a></h3>
                            <p class="service-box_text">Its important to compare insurance rates the best deal.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 service-box-wrap">
                        <div class="service-box style2">
                            <div class="service-box_inner">
                                <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                            </div>
                            <div class="service-box_icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_5_3.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-box_title h4"><a href="service-details.html">Get a free quote</a></h3>
                            <p class="service-box_text">Insurance is a contract within an individual company.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 service-box-wrap">
                        <div class="service-box style2">
                            <div class="service-box_inner">
                                <img src="{{ asset('front/assets/img/shape/service-box-shape2.png') }}" alt="img">
                            </div>
                            <div class="service-box_icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_5_4.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-box_title h4"><a href="service-details.html">24/7 Fast Support</a></h3>
                            <p class="service-box_text"> Provides coverage for business related losses or injury caused</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    About Area
    ==============================-->
        <div class="overflow-hidden space">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 mb-xl-0 mb-40">
                        <div class="about-thumb5">
                            <div class="about-counter-wrap">
                                <div class="about-counter1">
                                    <div class="icon"><img src="{{ asset('front/assets/img/icon/counter-icon-5-1.svg') }}" alt="icon"></div>
                                    <h3 class="counter-title h2"><span class="counter-number">458</span>+</h3>
                                    <span class="counter-text">Saticfied Customers</span>
                                </div>
                                <div class="about-counter1">
                                    <div class="icon"><img src="{{ asset('front/assets/img/icon/counter-icon-5-2.svg') }}" alt="icon"></div>
                                    <h3 class="counter-title h2"><span class="counter-number">24</span>+</h3>
                                    <span class="counter-text">Our Global Agents</span>
                                </div>
                            </div>
                            <div class="img1">
                                <img class="tilt-active" src="{{ asset('front/assets/img/normal/img-5.1.png') }}" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="title-area mb-30">
                        <span class="sub-title">
                            About Company
                        </span>
                            <h2 class="sec-title">Reliable Protection for Life's Journey</h2>
                        </div>
                        <p class="mt-n1 mb-30">Having insurance can provide peace of mind, knowing that you are financially protected in the event of an unexpected loss or damage. It's important to carefully review insurance policies.</p>
                        <div class="row justify-content-between">
                            <div class="col-xxl-4 col-xl-3 col-lg-3 col-sm-5 order-sm-2 align-self-end">
                                <div class="about-client-box mb-sm-0 mb-5">
                                    <div class="client-thumb-group">
                                        <div class="thumb">
                                            <img src="{{ asset('front/assets/img/testimonial/client-img-5-1.png') }}" alt="avater">
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('front/assets/img/testimonial/client-img-5-2.png') }}" alt="avater">
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('front/assets/img/testimonial/client-img-5-2.png') }}" alt="avater">
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('front/assets/img/testimonial/client-img-5-2.png') }}" alt="avater">
                                        </div>
                                        <div class="thumb icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                    <span class="cilent-box_title">Clients Reviews</span>
                                    <h4 class="cilent-box_counter"><span class="counter-number">256</span>k</h4>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-9 col-lg-6 col-sm-7 order-sm-1">
                                <div class="checklist mb-50">
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Large number of insurance policies</li>
                                        <li><i class="fa fa-check-circle"></i>Experience & qualified agents</li>
                                        <li><i class="fa fa-check-circle"></i> Experts Team Member</li>
                                    </ul>
                                </div>
                                <a href="{{ route('about') }}" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
    Servce Area
    ==============================-->
        <section class="service-sec8 space" data-bg-src="{{ asset('front/assets/img/bg/service-bg-6.png') }}">
            <div class="container">
                <div class="title-area mb-30 text-center">
                <span class="sub-title">
                    Our Insurance
                </span>
                    <h2 class="sec-title">Amazing Insurance Services</h2>
                </div>
                <div class="row justify-content-center service-slider3 th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                   @foreach($service as $vv)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-box style3">
                            <div class="service-box_thumb">
                                <img src="{{ asset('uploads/'.$vv->image) }}" alt="img">
                                <div class="service-box_icon">
                                    <img src="{{ asset('front/assets/img/icon/service_icon_6_1.svg') }}" alt="Icon">
                                </div>
                            </div>
                            <div class="service-box_content">
                                <h3 class="service-box_title h4"><a href="service-details.html">{{ $vv->title }}</a></h3>
                                <p class="service-box_text">Property coverage provides protection for home belongings.</p>
                                <a class="icon-btn-with-text" href="service-details.html"><i class="fa-regular fa-arrow-right"></i> <span>Load More </span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--==============================
    Cta Area
    ==============================-->
        <section class="cta-sec7" data-bg-src="{{ asset('front/assets/img/bg/cta_bg_6.png') }}">
            <div class="cta-thumb7 shape-mockup d-lg-block d-none" data-top="0" data-left="0"><img src="{{ asset('front/assets/img/normal/bg_6.png') }}" alt="img"></div>
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="title-area mb-0">
                            <h2 class="cta-title h3 text-white">Where Protection Meets Convenience</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-md-end">
                        <a href="contact.html" class="th-btn style3">Contact Us <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    why choose Area
    ==============================-->
        <div class="why-area-3 overflow-hidden space">
            <div class="position-relative z-index-3">
                <div class="container">
                    <div class="row justify-content-between align-items-xl-center">
                        <div class="col-lg-6 align-self-end order-lg-2">
                            <div class="why-thumb7 mb-lg-0 mb-5">
                                <img src="{{ asset('front/assets/img/normal/img4.1.jpg') }}" alt="img">
                                <div class="why-thumb-wrap">
                                    <h4 class="about-counter_title"><span class="counter-number">25</span>+ Years Of Working Experience</h4>
                                    <div class="thumb"><img src="{{ asset('front/assets/img/normal/img4.2.png') }}" alt="img"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="me-xxl-5 pe-xxl-4">
                                <div class="title-area mb-40 text-center text-lg-start">
                                    <span class="sub-title">Why Choose Us</span>
                                    <h2 class="sec-title">Covering your risks, and Securing your future.</h2>
                                    <p class="sec-text mt-30">Business insurance premiums are based on several factors, including the size of the business, the level of risk, and the coverage limits selected.</p>
                                </div>
                            </div>
                            <div class="feature-slider-wrap">
                                <div class="row th-carousel feature-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2" data-arrows="false">
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="service-box style2">
                                            <div class="service-box_icon">
                                                <img src="{{ asset('front/assets/img/icon/wcu-icon-2-1.svg') }}" alt="Icon">
                                            </div>
                                            <h3 class="service-box_title h6"><a href="service-details.html">Protect and save
                                                    Your money</a></h3>
                                            <p class="service-box_text">As your circumstances change, its important</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="service-box style2">
                                            <div class="service-box_icon">
                                                <img src="{{ asset('front/assets/img/icon/wcu-icon-2-2.svg') }}" alt="Icon">
                                            </div>
                                            <h3 class="service-box_title h6"><a href="service-details.html">Easy process
                                                    systems</a></h3>
                                            <p class="service-box_text">Its important to carefully insurance policies</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="service-box style2">
                                            <div class="service-box_icon">
                                                <img src="{{ asset('front/assets/img/icon/wcu-icon-2-3.svg') }}" alt="Icon">
                                            </div>
                                            <h3 class="service-box_title h6"><a href="service-details.html">Digital insurance
                                                    Policy</a></h3>
                                            <p class="service-box_text">Liability protection if someone is injured</p>
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
    Portfolio Area
    ==============================-->
        <div class="overflow-hidden ">
            <div class="container-fluid p-0">
                <div class="row th-carousel project-slider-4" data-slide-show="1" data-xl-slide-show="1" data-ml-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true" data-xl-center-mode="true" data-dots="false">
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_1.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Health Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Long-term Care Solutions</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_1.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_2.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Liability Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Family Liability Solution</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_2.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_3.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Life Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Future Financial Solutions</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_3.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_4.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Health Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Long-term Care Solutions</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_4.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_5.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Liability Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Family Liability Solution</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_5.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="project-card style3">
                            <div class="project-img">
                                <img src="{{ asset('front/assets/img/project/img_6.png') }}" alt="project image">
                            </div>
                            <div class="project-content">
                                <div class="media-left">
                                    <h6 class="project-subtitle">Life Insurance</h6>
                                    <h4 class="project-title"><a href="project-details.html">Future Financial Solutions</a></h4>
                                </div>
                                <div class="media-body">
                                    <a href="{{ asset('front/assets/img/project/img_6.png') }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
    Process Area
    ==============================-->
        <section class="process-area5 overflow-hidden space" data-bg-src="{{ asset('front/assets/img/shape/process-bg-shape.png') }}">
            <div class="container">
                <div class="title-area text-center">
                <span class="sub-title">
                    Work Process
                </span>
                    <h2 class="sec-title">Easy our Work Process in 4 step</h2>
                </div>
                <div class="process-wrapper">
                    <div class="process-line">
                        <img src="{{ asset('front/assets/img/shape/process-line.png') }}" alt="img">
                    </div>
                    <div class="row gy-40">
                        @foreach($package as $kk)
                        <div class="col-sm-6 col-xl-3">
                            <div class="process-box">
                                <div class="process-box_img">
                                    <img src="{{ asset('uploads/' . $kk -> image) }}" alt="process">
                                    <div class="process-box_icon">
                                        <span class="number1">01</span>
                                    </div>
                                </div>
                                <div class="process-box_content">
                                    <h2 class="process-box_title">{{ $kk ->title }}</h2>
                                    <p class="process-box_text">The first step in selecting insurance is to assess your needs</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    Contact Area
    ==============================-->
        <div class="bg-title contact-sec-2" data-bg-src="{{ asset('front/assets/img/bg/contact-bg2.png') }}">
            <div class="contact-border-shape shape-mockup d-xl-block d-none"><img src="{{ asset('front/assets/img/shape/contact-img-border.png') }}" alt="img" data-top="0" data-left="0"></div>
            <div class="contact-thumb2 shape-mockup d-xl-block d-none h-100" data-mask-src="{{ asset('front/assets/img/shape/contact-img-shape.png') }}" data-top="0" data-left="0">
                <img src="{{ asset('front/assets/img/normal/img4.1.jpg') }}" alt="img">
            </div>
            <div class="container">
                <div class="contact-area">
                    <div class="row justify-content-end">
                        <div class="col-xl-6 align-self-end space-bottom">
                            <div class="contact-form-wrap">
                                <div class="contact-video shape-mockup d-xl-block d-none" data-top="220px" data-left="-210px">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="title-area mb-40">
                                    <span class="sub-title">Free Quote</span>
                                    <h2 class="sec-title">Get an Insurance Quote</h2>
                                </div>

                                <form action="mail.php" method="POST" class="contact-form2">
                                    <ul class="insurance-tab nav nav-pills mb-40" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-regular fa-house-chimney"></i> Home</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-family-tab" data-bs-toggle="pill" data-bs-target="#pills-family" type="button" role="tab" aria-controls="pills-family" aria-selected="false"><i class="fa-regular fa-umbrella"></i> Family</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="fa-regular fa-clipboard-medical"></i> Health</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-vehicle-tab" data-bs-toggle="pill" data-bs-target="#pills-vehicle" type="button" role="tab" aria-controls="pills-vehicle" aria-selected="false"><i class="fa-solid fa-car"></i> Vehicle</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="subject" id="subject" class="form-select style-white">
                                                    <option value="" disabled selected hidden>Select Insurance</option>
                                                    <option value="Life Insurance">Life Insurance</option>
                                                    <option value="Health Insurance">Health Insurance</option>
                                                    <option value="Vehicle Insurance">Vehicle Insurance</option>
                                                    <option value="Family Insurance">Family Insurance</option>
                                                </select>
                                            </div>
                                            <div class="btn-group form-btn col-12">
                                                <button class="th-btn">Get free Quote <i class="far fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control style-white" name="name" id="name2" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control style-white" name="email" id="email2" placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="subject" id="subject2" class="form-select style-white">
                                                    <option value="" disabled selected hidden>Select Insurance</option>
                                                    <option value="Life Insurance">Life Insurance</option>
                                                    <option value="Health Insurance">Health Insurance</option>
                                                    <option value="Vehicle Insurance">Vehicle Insurance</option>
                                                    <option value="Family Insurance">Family Insurance</option>
                                                </select>
                                            </div>
                                            <div class="btn-group form-btn col-12">
                                                <button class="th-btn">Get free Quote <i class="far fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control style-white" name="name" id="name3" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control style-white" name="email" id="email3" placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="subject" id="subject3" class="form-select style-white">
                                                    <option value="" disabled selected hidden>Select Insurance</option>
                                                    <option value="Life Insurance">Life Insurance</option>
                                                    <option value="Health Insurance">Health Insurance</option>
                                                    <option value="Vehicle Insurance">Vehicle Insurance</option>
                                                    <option value="Family Insurance">Family Insurance</option>
                                                </select>
                                            </div>
                                            <div class="btn-group form-btn col-12">
                                                <button class="th-btn">Get free Quote <i class="far fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-vehicle" role="tabpanel" aria-labelledby="pills-vehicle-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control style-white" name="name" id="name4" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control style-white" name="email" id="email4" placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="subject" id="subject4" class="form-select style-white">
                                                    <option value="" disabled selected hidden>Select Insurance</option>
                                                    <option value="Life Insurance">Life Insurance</option>
                                                    <option value="Health Insurance">Health Insurance</option>
                                                    <option value="Vehicle Insurance">Vehicle Insurance</option>
                                                    <option value="Family Insurance">Family Insurance</option>
                                                </select>
                                            </div>
                                            <div class="btn-group form-btn col-12">
                                                <button class="th-btn">Get free Quote <i class="far fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="skill-feature mt-40 mb-0">
                                    <h5 class="skill-feature_title">Limit Of Balance</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%;">
                                            <div class="progress-value">$2563</div>
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
    Testimonial Area
    ==============================-->
        <div class="testimonial-sec5 space-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="title-area">
                            <span class="sub-title">Testimonials</span>
                            <h2 class="sec-title">What client say About Us</h2>
                        </div>
                        <div class="testimonial-slider5-arrow mb-lg-0 mb-30">
                            <button data-slick-prev="#testimonial-slider5" class="slick-arrow slick-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                            <button data-slick-next="#testimonial-slider5" class="slick-arrow slick-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="th-carousel testi-slider5" id="testimonial-slider5" data-slide-show="2" data-lg-slide-show="1" data-dots="false" data-arrows="false">
                            @foreach($testimonial as $vvv)
                            <div class="testi-box5">
                                <div class="testi-box_wrap">
                                    <div class="testi-box_avater">
                                        <div class="thumb">
                                            <img src="{{ asset('uploads/' . $vvv -> image ) }}" alt="testimonial">
                                        </div>
                                    </div>
                                    <div class="testi-box_content">
                                        <h4 class="testi-box_title h6">
                                            “{{ $vvv->title }}” <span class="review-rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span> </span>
                                        </h4>
                                        <p class="testi-box_text">{!!   $vvv->description !!} </p>
                                        <div class="media">
                                            <div class="media-left">
                                                <h3 class="testi-box_name h6">{{ $vvv->name }}</h3>
                                                <span class="testi-box_desig">{{ $vvv->position }}</span>
                                            </div>
                                            <div class="media-body">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
    Blog Area
    ==============================-->
        <section class="space" id="blog-sec">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Blog & News</span>
                    <h2 class="sec-title">Latest Blog & News</h2>
                </div>
                <div class="row slider-shadow th-carousel" id="blogSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                    @foreach($blog as $item)
                    <div class="col-md-6 col-xl-4">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('uploads/'.$item->image) }}" alt="blog image">
                            </div>
                            <div class="blog-card_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>Annette Black</a>
                                    <a href="blog.html"><i class="fal fa-calendar-alt"></i>12 Jun. 2023</a>
                                </div>
                                <h3 class="blog-title border-bottom box-title"><a href="blog-details.html">{{ $item -> title }}</a></h3>
                                <a href="blog-details.html" class="half-line-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

    </main>
@endsection
