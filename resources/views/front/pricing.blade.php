@extends('front.layout.app')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('front/assets/img/breadcumb/bg-img.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pricing Plan</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Pricing Plan</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Price Area
==============================-->
    <section class="bg-white space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Pricing Plan</span>
                <h2 class="sec-title">Our Pricing Plan Options.</h2>
            </div>
            <div class="row gy-30 justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="price-card style2 ">
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
                                    <li class="unavailable"><i class="fas fa-xmark"></i> Online Payments Service</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i>Unlimited Client Portal</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i>Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn btn-fw">Purchase Now</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="price-card style2 active">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Popular Plan </h3>
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
                                    <li class="unavailable"><i class="fas fa-xmark"></i> Unlimited Client Portal</li>
                                    <li class="unavailable"><i class="fas fa-xmark"></i> Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn btn-fw">Purchase Now</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="price-card style2 ">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Standard Plan </h3>
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
                                    <li class="unavailable"><i class="fas fa-xmark"></i> Backlink analysis & invoice</li>
                                </ul>
                            </div>
                        </div>
                        <a href="pricing.html" class="th-btn btn-fw">Purchase Now</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="price-card style2 ">
                        <span class="offer-tag">Save Over 25%</span>
                        <div class="price-bg-shape"><img src="{{ asset('front/assets/img/bg/pricing-box-bg.png') }}" alt="img"></div>
                        <h3 class="price-card_title box-title">
                            Premium Plan </h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price">
                                $85 <span class="duration">/ Month</span>
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
                        <a href="pricing.html" class="th-btn btn-fw">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Contact Area
==============================-->
    <div class="bg-title" id="contact-sec" data-bg-src="{{ asset('front/assets/img/bg/contact-bg.png') }}">
        <div class="container">
            <div class="contact-area">
                <div class="row justify-content-between">
                    <div class="col-xl-5 space">
                        <div class="title-area">
                            <span class="sub-title style3">Contact With Us</span>
                            <h2 class="sec-title text-white">We're here to Support You & Your company.</h2>
                        </div>
                        <div class="contact-box-wrap">
                            <h3 class="h6 contact-box-title">Working Times</h3>
                            <p class="contact-time">Mon - Fri : 9:00 am, - 5:00 pm,</p>
                            <p class="contact-time">Sat - Sun Closed</p>
                        </div>
                    </div>
                    <div class="col-xl-5 ps-xxl-5 align-self-end">
                        <form action="mail.php" method="POST" class="contact-form">
                            <div class="bg-arrow"><img src="{{ asset('front/assets/img/icon/contact-bg-arrow.svg') }}" alt="img"></div>
                            <h3 class="form-title">Contact with Expert</h3>
                            <div class="form-group">
                                <input type="text" class="form-control style-white" name="name" id="name" placeholder="Full Name">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email address">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control style-white" name="number" id="number" placeholder="Phone No :">
                                <i class="far fa-phone-flip"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Massage"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Submit Now <i class="fal fa-paper-plane"></i></button>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="client-group-thumb">
                    <div class="thumb">
                        <img src="{{ asset('front/assets/img/normal/testimonial-group-img.png') }}" alt="img">
                    </div>
                    <div class="counter">
                        <span class="counter-number">152</span>+
                    </div>
                    <h6>Client satisfaction
                        our services</h6>
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
