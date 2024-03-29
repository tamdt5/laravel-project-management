
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from yoddenhtml.websitelayout.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Aug 2022 13:50:43 GMT -->

<head>
    @include('website.partials.head')

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        
        <!-- BANNER
        ================================================== -->
        <section class="p-0 full-screen banner1 top-position1">
            <div class="slider-fade owl-carousel owl-theme w-100 min-vh-100">
                <div class="item bg-img cover-background" data-overlay-dark="7" data-background="{{ asset('images/'.$datahead1->image) }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100">
                            <div class="col-md-10 col-lg-8">
                                <h1 class="mb-2-2 title">{{$datahead1->title}}</h1>
                                <p class="display-28 w-sm-95 w-md-90 mb-2-2 opacity8 d-none d-sm-block">{{$datahead1->intro}}</p>
                                <a href="{{ route('website.dangky')}}" class="butn me-2 my-1 my-sm-0">
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('website.dangky')}}" class="butn secondary my-1 my-sm-0">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img cover-background" data-overlay-dark="7" data-background="{{ asset('images/'.$datahead2->image) }}">
                    <div class="container d-flex flex-column">
                        <div class="row justify-content-center justify-content-sm-start align-items-center min-vh-100">
                            <div class="col-md-10 col-lg-8">
                                <h1 class="mb-2-2 title">{{$datahead2->title}}</h1>
                                <p class="display-28 w-sm-95 w-md-90 mb-2-2 opacity8 d-none d-sm-block">{{$datahead2->intro}}</p>
                                <a href="{{ route('website.dangky')}}" class="butn me-2 my-1 my-sm-0">
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('website.dangky')}}" class="butn secondary my-1 my-sm-0">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img cover-background" data-overlay-dark="7" data-background="{{ asset('images/'.$datahead3->image) }}">
                    <div class="container d-flex flex-column">
                        <div class="row justify-content-center justify-content-sm-start align-items-center min-vh-100">
                            <div class="col-md-10 col-lg-8">
                                <h1 class="mb-2-2 title">{{$datahead3->title}}</h1>
                                <p class="display-28 w-sm-95 w-md-90 mb-2-2 opacity8 d-none d-sm-block">{{$datahead3->intro}}</p>
                                <a href="{{ route('website.dangky')}}" class="butn me-2 my-1 my-sm-0">
                                    <span>Read More</span>
                                </a>
                                <a href="{{ route('website.dangky')}}" class="butn secondary my-1 my-sm-0">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="banner-shape1 ani-top-bottom d-none d-md-block"></span>
            <span class="banner-shape2 d-none d-md-block"></span>
            <div class="d-none d-sm-inline-block px-1-9 py-1-6 border position-absolute left bottom-5 border-radius-5 z-index-3"></div>
            <div class="d-none d-sm-inline-block px-1-9 py-1-6 bg-secondary position-absolute left-5 bottom-10 border-radius-5 z-index-2"></div>
            <div class="d-inline-block p-2 bg-secondary rounded-circle position-absolute right-20 bottom-25 ani-move z-index-2"></div>
            <div class="d-inline-block p-2 bg-white rounded-circle position-absolute left-15 top-20 ani-move z-index-2"></div>
        </section>

        <!-- OUR SERVICES
        ================================================== -->
        <section class="p-0 overflow-visible">
            <div class="container">
                <div class="service-style1 pt-6 pt-lg-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-4 mb-5 mb-lg-0 wow fadeIn" data-wow-delay="100ms">
                            <div class="px-5">
                                <div class="section-heading text-start mb-0">
                                    <span class="subtitle">Our Services</span>
                                    <h2 class="mb-0 w-100">Explore Our <span class="font-weight-400">Best Services</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row g-0">
                                <div class="col-md-6 wow fadeIn" data-wow-delay="200ms">
                                    <div class="card border-0 card-style1 active h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img src="{{ asset('website/img/icons/icon-01.png') }}" class="mb-4" alt="...">
                                                <span class="round-shape"></span>
                                            </div>
                                            <h4 class="mb-4"><a href="broadband.html">Broadband</a></h4>
                                            <p class="mb-0">High-speed Internet get right of entry to this is constantly on & fast.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="card border-0 card-style1 h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img src="{{ asset('website/img/icons/icon-02.png') }}" class="mb-4" alt="...">
                                                <span class="round-shape"></span>
                                            </div>
                                            <h4 class="mb-4"><a href="wifi-internet.html">WIFI Internet</a></h4>
                                            <p class="mb-0">High-speed Internet get right of entry to this is constantly on & fast.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeIn" data-wow-delay="200ms">
                                    <div class="card border-0 card-style1 h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img src="{{ asset('website/img/icons/icon-03.png') }}" class="mb-4" alt="...">
                                                <span class="round-shape"></span>
                                            </div>
                                            <h4 class="mb-4"><a href="netfix-tv-box.html">Netfix TV box</a></h4>
                                            <p class="mb-0">High-speed Internet get right of entry to this is constantly on & fast.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="card border-0 card-style1 h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img src="{{ asset('website/img/icons/icon-04.png') }}" class="mb-4" alt="...">
                                                <span class="round-shape"></span>
                                            </div>
                                            <h4 class="mb-4"><a href="satellite-tv.html">Satellite TV</a></h4>
                                            <p class="mb-0">High-speed Internet get right of entry to this is constantly on & fast.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-inline-block p-2 border-secondary border border-width-2 position-absolute left-5 bottom-25 ani-left-right"></div>
            <div class="d-inline-block p-2 bg-primary rounded-circle position-absolute left-10 top-25 ani-move"></div>
        </section>

        <!-- ABOUTUS
        ================================================== -->
        <section class="bg-light pt-16 pt-md-18 pt-lg-22 about-style1 overflow-visible">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6 mb-1-9 mb-sm-2-2 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="position-relative">
                            <div class="text-center text-sm-end text-md-center text-lg-end pe-xxl-1-9 overflow-hidden position-relative">
                                <img src="{{ asset('website/img/content/about-01.jpg') }}" alt="...">
                                <span class="about-shape1"></span>
                                <span class="about-shape2"></span>
                            </div>
                            <img src="{{ asset('website/img/content/about-02.jpg') }}" class="border-radius-10 position-absolute top-15 d-none d-sm-block" alt="...">
                            <div class="bg-white text-center border-radius-10 p-1-9 d-inline-block position-absolute bottom-10 left-10">
                                <h4 class="h1"><span class="countup">28</span>+</h4>
                                <span>Years of experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="ps-xl-6">
                            <h2 class="h1 mb-4 font-weight-700">Discover A Wider <span class="font-weight-400">World Of Recreation</span></h2>
                            <p class="lead text-primary">Broadband provider offers a higher-speed of data transmission.</p>
                            <p class="mb-4">We’ve streamlined our plans to give you the fastest internet available at your address for one low monthly price.</p>
                            <div class="about-list mb-3 active">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Our fastest ever router</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about-list mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Browse and download around the clock</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about-list">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Superfast and ultra-reliable</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1-9">
                                <div class="d-flex align-items-center">
                                    <div class="bg-img px-7 text-center py-3 cover-background border-radius-10 border-primary border border-width-3" data-background="{{ asset('website/img/content/about-03.jpg') }}">
                                        <div class="z-index-1 position-relative">
                                            <a class="popup-social-video" href="https://www.youtube.com/watch?v=yd1JhZzoS6A"><i class="fas fa-play display-20 text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="ms-2 ms-md-5">
                                        <h4 class="mb-0 h5">Sandra Braun</h4>
                                        <span class="small">Senior Executive</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('website/img/content/line-01.png') }}" class="position-absolute top-n15 right-5 ani-top-bottom" alt="...">
        </section>

        <!-- COUNTER
        ================================================== -->
        <section class="bg-primary counter-style1">
            <div class="container position-relative z-index-9">
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <h3 class="h1 text-white mb-0 countup fw-bolder count">{{$data->countid}}</h3>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <span class="text-white">Customers<br>Interact</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <h3 class="h1 text-white mb-0 countup fw-bolder count">{{$data2->countstatus}}</h3>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <span class="text-white">Successful Setup<br>Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="600ms">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <h3 class="h1 text-white mb-0 countup fw-bolder count">{{$data3->countid}}</h3>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <span class="text-white">Branchs<br>Around VietNam</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="800ms">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <h3 class="h1 text-white mb-0 countup fw-bolder count">{{$data1->countid}}</h3>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <span class="text-white">Worker<br>over 2 years exp</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="counter-shape1"></span>
            <span class="counter-shape2"></span>
            <span class="counter-shape3"></span>
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section>
            <div class="container z-index-2 position-relative">
                <div class="section-heading">
                    <span class="subtitle">Why Choose Us</span>
                    <h2>Best Internet <span class="font-weight-400">Provider In Town</span></h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center z-index-2 position-relative">
                    <div class="col-xxl-9">
                        <div class="row align-items-md-center">
                            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="d-flex ms-lg-6 mb-1-9 mb-md-6">
                                    <div class="flex-grow-1 text-lg-end ms-4 ms-lg-0 me-lg-1-9 order-2 order-lg-1">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">4K and 8K Quality</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                    <div class="flex-shrink-0 position-relative order-1 order-lg-2">
                                        <div class="icon-box">
                                            <img src="{{ asset('website/img/icons/icon-07.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-1-9 mb-md-6 me-lg-6">
                                    <div class="flex-grow-1 text-lg-end ms-4 ms-lg-0 me-lg-1-9 order-2 order-lg-1">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">Free Installation</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                    <div class="flex-shrink-0 position-relative order-1 order-lg-2">
                                        <div class="icon-box">
                                            <img src="{{ asset('website/img/icons/icon-08.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-1-9 mb-md-0 ms-lg-6">
                                    <div class="flex-grow-1 text-lg-end ms-4 ms-lg-0 me-lg-1-9 order-2 order-lg-1">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">Fast Support 24/7</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                    <div class="flex-shrink-0 position-relative order-1 order-lg-2">
                                        <div class="icon-box">
                                            <img src="{{ asset('website/img/icons/icon-09.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-none d-lg-block my-md-5 my-xl-0 wow fadeInUp" data-wow-delay="400ms">
                                <img src="{{ asset('website/img/content/why-choose-us.png') }}" alt="...">
                            </div>
                            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="600ms">
                                <div class="d-flex me-lg-6 mb-1-9 mb-md-6">
                                    <div class="flex-shrink-0 position-relative">
                                        <div class="icon-box right">
                                            <img src="{{ asset('website/img/icons/icon-10.png') }}" alt="...">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-1-6 ms-md-1-9">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">Best Pricing</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1-9 mb-md-6 ms-lg-6">
                                    <div class="flex-shrink-0 position-relative">
                                        <div class="icon-box right">
                                            <img src="{{ asset('website/img/icons/icon-11.png') }}" alt="...">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-1-6 ms-md-1-9">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">Home Security</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                </div>
                                <div class="d-flex me-lg-6">
                                    <div class="flex-shrink-0 position-relative">
                                        <div class="icon-box right">
                                            <img src="{{ asset('website/img/icons/icon-12.png') }}" alt="...">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-1-6 ms-md-1-9">
                                        <h4 class="h5 mb-1 mb-md-3"><a href="#!">Ultrafast Connect</a></h4>
                                        <p class="mb-0">Broadband is provides you with to a high-speed connection to the Internet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="why-choose-shape1"></span>
            <img src="{{ asset('website/img/content/line-02.png') }}" class="position-absolute left-5 bottom-10 ani-top-bottom d-none d-sm-block" alt="...">
        </section>

        <!-- OFFER
        ================================================== -->
        <section class="py-0">
            <div class="container-fluid px-lg-0">
                <div class="row g-0 overlap-column">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms">
                        <div class="bg-dark py-6 py-lg-8 py-xl-10 py-xxl-13 px-1-9 px-xxl-9 border-radius-10 position-relative">
                            <div class="w-lg-80 mx-auto">
                                <h2 class="h1 font-weight-700 text-white mb-4">We Deliver The <span class="font-weight-400">Best Networking Devices</span></h2>
                                <p class="mb-1-9 text-white opacity8">Broadband is usually related and eliminates the want for dial-up. Its significance is far-reaching; it lets in for incredible and brief get entry to to information, teleconferencing, information transmission, and greater in numerous capacities. Broadband is a community connection technology that provides you with to a high-pace connection to the Internet. Broadband has come to be a need in each workplace and domestic settings.</p>
                                <div class="d-flex align-items-center mb-1-9">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('website/img/icons/icon-01.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="text-white">Try Free For 1 Month</h5>
                                        <span class="text-white">High-quality data of a wide bandwidth.</span>
                                    </div>
                                </div>
                                <a href="{{ route('website.dangky')}}" class="butn small">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-img cover-background border-radius-10 wow fadeIn" data-wow-delay="400ms" data-overlay-dark="0" data-background="{{ asset('website/img/content/01.jpg') }}">
                        <span class="offer-shape1"></span>
                        <span class="offer-shape2"></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING PLANS
        ================================================== -->
        <section>
            <div class="container z-index-2 position-relative">
                <div class="section-heading mb-8 wow fadeIn" data-wow-delay="100ms">
                    <span class="subtitle">Our Services</span>
                    <h2 class="w-100">Explore Our <span class="font-weight-400">Best Services</span></h2>
                </div>
                <div class="row mt-n6 g-xxl-5">
                    <div class="col-md-6 col-xl-4 mt-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style6 border-0 position-relative">
                            <div class="card-header text-center bg-white p-1-9 p-sm-2-3 pt-5">
                                <i class="ti-rss-alt card-icon top-20 start-50 translate-middle-x"></i>
                                <h4>Internet</h4>
                                <h3 class="fw-bold">$55<span class="display-29"> /Per Month</span></h3>
                                <span class="w-80 d-block mx-auto">For 12 mos when bundled, + taxes & equip fee</span>
                            </div>
                            <div class="card-body p-1-9 p-sm-2-9">
                                <ul class="list-style1 mb-0">
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>Internet with a 80Mbps</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>65 + HD Channels</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>WiFi connection</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>2 devices</li>
                                </ul>
                                <a href="{{ route('website.dangky')}}" class="butn mt-1-9">I need advice</a>
                                <a href="https://shop.fpt.vn/?aff_sid=9563d6a71f39489fa2acac30dee3dd73&utm_source=accesstrade" class="butn mt-1-9">I will choose this plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style6 border-0 position-relative">
                            <div class="card-header text-center bg-white p-1-9 p-sm-2-3 pt-5">
                                <i class="ti-desktop card-icon top-20 start-50 translate-middle-x"></i>
                                <h4>TV</h4>
                                <h3 class="fw-bold">$75<span class="display-29"> /Per Month</span></h3>
                                <span class="w-80 d-block mx-auto">For 12 mos when bundled, + taxes & equip fee</span>
                            </div>
                            <div class="card-body p-1-9 p-sm-2-9">
                                <ul class="list-style1 mb-0">
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>Internet with a 130Mbps</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>85 + HD Channels</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>TV connection</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>4 devices</li>
                                </ul>
                                <a href="{{ route('website.dangky')}}" class="butn mt-1-9">I need advice</a>
                                <a href="https://shop.fpt.vn/?aff_sid=9563d6a71f39489fa2acac30dee3dd73&utm_source=accesstrade" class="butn mt-1-9">I will choose this plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="card card-style6 bg-dark border-0 position-relative">
                            <div class="card-header text-center bg-dark border-color-light-white p-1-9 p-sm-2-3 pt-5">
                                <i class="ti-rss-alt card-icon top-20 left-30"></i>
                                <i class="ti-desktop card-icon top-20 left-50"></i>
                                <h4 class="text-white">Internet + TV</h4>
                                <h3 class="fw-bold text-white">$95<span class="display-29"> /Per Month</span></h3>
                                <span class="w-80 d-block mx-auto text-white opacity8">For 12 mos when bundled, + taxes & equip fee</span>
                            </div>
                            <div class="card-body p-1-9 p-sm-2-9">
                                <ul class="list-style1 mb-0 text-white">
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>Internet with a 150Mbps</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>105 + HD Channels</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>WiFi &amp; TV connection</li>
                                    <li><i class="ti-check display-27 align-middle text-secondary me-3 font-weight-600"></i>Unlimited devices</li>
                                </ul>
                                <a href="{{ route('website.dangky')}}" class="butn mt-1-9">I need advice</a>
                                <a href="https://shop.fpt.vn/?aff_sid=9563d6a71f39489fa2acac30dee3dd73&utm_source=accesstrade" class="butn mt-1-9">I will choose this plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-inline-block d-none p-2 bg-primary rounded-circle position-absolute right-5 bottom-25 ani-left-right"></div>
            <div class="d-sm-inline-block d-none p-2 border-secondary border border-width-2 position-absolute right-10 top-25 ani-move"></div>
            <div class="d-inline-block px-5 py-6 border position-absolute left-5 top-5 border-radius-10 ani-move"></div>
        </section>

       
        <!-- FOOTER
        ================================================== -->
        @include('website.modules.footer')

    </div>

    <!-- BUY TEMPLATE
    ================================================== -->

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fa-solid fa-wifi" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('website/js/jquery.min.js')}}"></script>

    <!-- popper js -->
    <script src="{{ asset('website/js/popper.min.js')}}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('website/js/bootstrap.min.js')}}"></script>

    <!-- jquery -->
    <script src="{{ asset('website/js/core.min.js')}}"></script>

    <!-- Search -->
    <script src="{{ asset('website/search/search.js')}}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('website/js/main.js')}}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('website/quform/js/plugins.js')}}"></script>

    <!-- form scripts js -->
    <script src="{{ asset('quform/js/scripts.js')}}"></script>

    <!-- all js include end -->

</body>


<!-- Mirrored from yoddenhtml.websitelayout.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Aug 2022 13:50:51 GMT -->
</html>