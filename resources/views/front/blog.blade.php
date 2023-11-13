@extends('front.layout.app')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('front/assets/img/breadcumb/bg-img.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Grid</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Grid</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog-s-1-3.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Annette Black</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 Jul, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Family first with our insurance coverage</a>
                            </h2>
                            <p class="blog-text">Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi elementum condimentum dapibus vel nisi.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-carousel" data-arrows="true" data-slide-show="1" data-fade="true">
                            <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog-s-1-2.jpg') }}" alt="Blog Image"></a>
                            <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog-s-1-4.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Brooklyn Simmons</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>12 Jan, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Healthy living with our health insurance.</a>
                            </h2>
                            <p class="blog-text">Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi elementum condimentum dapibus vel nisi.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Theresa Webb</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>12 Jan, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Safe and secure with our coverage.</a>
                            </h2>
                            <p class="blog-text">Quisque vel auctor ex, et ullamcorper orci. Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi </p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="title" data-opacity="8">
                            <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog-s-1-1.jpg') }}" alt="Blog Image"></a>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Dianne Russell</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>05 Jun, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(3)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Drive assured with our car insurance</a>
                            </h2>
                            <p class="blog-text">Change all you have in your business world. Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi </p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-audio">
                            <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Adam Thomas</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>24 May, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(05)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Invest in family's future with reliable insurance</a>
                            </h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven scenarios. Conveniently enhance cross-unit communities with testing procedures. Dynamically embrace team building expertise. Proactively monetize parallel solutions.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html"><i class="fas fa-angles-left"></i></a></li>
                            <li><a href="blog.html">01</a></li>
                            <li><a href="blog.html">02</a></li>
                            <li><a href="blog.html">03</a></li>
                            <li><a href="blog.html">04</a></li>
                            <li><a href="blog.html"><i class="fas fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_nav_menu  ">
                            <h3 class="widget_title">All Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Insurance Strategy</a><span>(08)</span></li>
                                    <li><a href="service-details.html">Insurance Consulting</a> <span>(12)</span></li>
                                    <li><a href="service-details.html">Financial Planiing</a><span>(15)</span></li>
                                    <li><a href="service-details.html">Business Insurance</a><span>(21)</span></li>
                                    <li><a href="service-details.html">Family Insurance</a><span>(14)</span></li>
                                    <li><a href="service-details.html">Health Insurance</a><span>(05)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/recent-post-1-1.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-alt"></i> 21 June, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Secure your life's moments with us</a></h4>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/recent-post-1-2.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"> <i class="fal fa-calendar-alt"></i>22 June, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Delivering solutions that Result unique situation.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/recent-post-1-3.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"> <i class="fal fa-calendar-alt"></i>12 Jul, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">When asked for solutions, We provide best Insurance</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_banner text-center  " data-bg-src="{{ asset('front/assets/img/widget/widget_banner.png') }}" data-overlay="title" data-opacity="9">
                            <h4 class="widget_title">Need Help? <br> Talk with expert</h4>
                            <div class="widget-banner">
                                <p class="banner-text">Call anytime</p>
                                <h4><a class="banner-link" href="tel:+01145656896">+011 (456) 568 96</a></h4>
                                <a href="contact.html" class="th-btn style2">Contact Us<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Insurance</a>
                                <a href="blog.html">Consulting</a>
                                <a href="blog.html">Covarage</a>
                                <a href="blog.html">Family Insurance</a>
                                <a href="blog.html">Health Insurance</a>
                                <a href="blog.html">Policy</a>
                                <a href="blog.html">Strategy</a>
                                <a href="blog.html">Solutions</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
