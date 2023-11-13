@extends('front.layout.app')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('front/assets/img/breadcumb/bg-img.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Insurance</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Insurance</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Servce Area
==============================-->
    <section class="service-sec space-bottom space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Insurance</span>
                <h2 class="sec-title">We offer Amazing Insurance</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_1.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_1.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Family Insurance</a></h3>
                            <p class="service-card_text">Dignissim sapien sollicitudin purus. Quisque eget.</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_2.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_4.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Home Insurance</a></h3>
                            <p class="service-card_text">Integer dignissim nibh mattis Sollicitudin eu a purus.</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_3.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_5.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Business Insurance</a></h3>
                            <p class="service-card_text">Efficiently optimize innovative services Efficiently.</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_4.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_2.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Vehicle Insurance</a></h3>
                            <p class="service-card_text">Integer dignissim nibh mattis Quisque eget nisi tortor.</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_5.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_3.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Health Insurance</a></h3>
                            <p class="service-card_text">Optimize innovative interoper able bandwidth Efficiently.</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('front/assets/img/service/service_1_6.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_content">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon_1_6.svg') }}" alt="Icon">
                            </div>
                            <h3 class="service-title box-title h4"><a href="service-details.html">Fire Insurance</a></h3>
                            <p class="service-card_text">Integer non lacus dui. Duis eu quam ut arcu efficitur</p>
                            <a href="service-details.html" class="half-line-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Feature Area
==============================-->
    <div class="feature-area-3 bg-smoke overflow-hidden">
        <div class="shape-mockup jump-reverse d-none d-xl-block" data-top="-20px" data-left="0">
            <img src="{{ asset('front/assets/img/bg/why_bg_shape.png') }}" alt="shape">
        </div>
        <div class="space position-relative z-index-3">
            <div class="img-half img-right video-box2 z-index-1">
                <img src="{{ asset('front/assets/img/normal/wcu-thumb-1.png') }}" alt="img">
                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
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
Counter Area
==============================-->
    <div class="counter-sec1" data-bg-src="{{ asset('front/assets/img/bg/fact_bg_1.png') }}">
        <div class="container">
            <div class="row gy-40 justify-content-between">
                <div class="col-lg-auto col-md-6">
                    <div class="counter-wrapper">
                        <div class="global-icon">
                            <img src="{{ asset('front/assets/img/icon/counter-icon-1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="counter-wrap_title text-white"><span class="counter-number">4563</span>+</h3>
                        <p class="counter-wrap_text text-white">Success Insurance</p>
                    </div>
                </div>
                <div class="col-auto d-lg-block d-none">
                    <div class="counter-divider"></div>
                </div>
                <div class="col-lg-auto col-md-6">
                    <div class="counter-wrapper">
                        <div class="global-icon">
                            <img src="{{ asset('front/assets/img/icon/counter-icon-2.svg') }}" alt="Icon">
                        </div>
                        <h3 class="counter-wrap_title text-white"><span class="counter-number">866</span>+</h3>
                        <p class="counter-wrap_text text-white">Satisfied clients</p>
                    </div>
                </div>
                <div class="col-auto d-lg-block d-none">
                    <div class="counter-divider"></div>
                </div>
                <div class="col-lg-auto col-md-6">
                    <div class="counter-wrapper">
                        <div class="global-icon">
                            <img src="{{ asset('front/assets/img/icon/counter-icon-3.svg') }}" alt="Icon">
                        </div>
                        <h3 class="counter-wrap_title text-white"><span class="counter-number">185</span>+</h3>
                        <p class="counter-wrap_text text-white">International Award </p>
                    </div>
                </div>
                <div class="col-auto d-lg-block d-none">
                    <div class="counter-divider"></div>
                </div>
                <div class="col-lg-auto col-md-6">
                    <div class="counter-wrapper">
                        <div class="global-icon">
                            <img src="{{ asset('front/assets/img/icon/counter-icon-4.svg') }}" alt="Icon">
                        </div>
                        <h3 class="counter-wrap_title text-white"><span class="counter-number">225</span>+</h3>
                        <p class="counter-wrap_text text-white">Our Global Agents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Price Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Pricing Plan</span>
                <h2 class="sec-title">Our Pricing Plan Options.</h2>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Basic Plan </h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price">
                                $25 <span class="duration">/ Month</span>
                            </h4>
                            <p class="price-card_text">10,000 monthly active users</p>
                            <div class="available-list">
                                <ul class="checklist">
                                    <li><i class="fas fa-check-circle"></i> Projects and Time Sheet

                                    </li>
                                    <li><i class="fas fa-check-circle"></i> Recurring Transations</li>
                                    <li><i class="fas fa-check-circle"></i> Online Payments Service</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i>Unlimited Client Portal</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i>Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn">Purchase Order</a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card active">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Standard Plan </h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price">
                                $35 <span class="duration">/ Month</span>
                            </h4>
                            <p class="price-card_text">10,000 monthly active users</p>
                            <div class="available-list">
                                <ul class="checklist">
                                    <li> <i class="fas fa-check-circle"></i> Projects and Time Sheet

                                    </li>
                                    <li> <i class="fas fa-check-circle"></i> Recurring Transations</li>
                                    <li> <i class="fas fa-check-circle"></i> Online Payments Service</li>
                                    <li><i class="fas fa-check-circle"></i> Unlimited Client Portal</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i> Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn">Purchase Order</a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Premium Plan </h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price">
                                $45 <span class="duration">/ Month</span>
                            </h4>
                            <p class="price-card_text">10,000 monthly active users</p>
                            <div class="available-list">
                                <ul class="checklist">
                                    <li> <i class="fas fa-check-circle"></i> Projects and Time Sheet

                                    </li>
                                    <li> <i class="fas fa-check-circle"></i> Recurring Transations</li>
                                    <li> <i class="fas fa-check-circle"></i> Online Payments Service</li>
                                    <li> <i class="fas fa-check-circle"></i> Unlimited Client Portal</li>
                                    <li> <i class="fas fa-check-circle"></i> Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn">Purchase Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
