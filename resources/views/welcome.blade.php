
    @extends('layouts.layout')
    @section('content')

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    
            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename"><span>e</span>Startup</h1>
            </a>
    
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    
    <main class="main">
        <section id="pricing" class="pricing section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12 deasw" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem all_off doi-1">
                            <div class="myhr">
                                <img src="{{ asset('assets/img/pakege-1.jpg') }}" >
                            </div>
                            <div class="sr">
                                <h3 style="color: #20c997;">82 LOTTERY DEMO ACCOUNT</h3>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-12 col-md-12 deasw" data-aos="zoom-in" data-aos-delay="100">
            
                        <div class="pricing-tem all_off doi-2">
                            <div class="myhr">
                                <img src="{{ asset('assets/img/pakege-2.png') }}" >
                            </div>
                            <div class="sr">
                                <h3 style="color: #20c997;">COLOR PREDICTION SERVER HACK</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 deasw" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem all_off doi-3">
                            <div class="myhr">
                                <img src="{{ asset('assets/img/pakege-3.png') }}" >
                            </div>
                            <div class="sr">
                                <h3 style="color: #20c997;">10 GIFT CODES VALUE UPTO RS.1000/-</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 deasw" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem all_off doi-4">
                            <div class="myhr">
                                <img src="{{ asset('assets/img/pakege-4.png') }}" >
                            </div>
                            <div class="sr">
                                <h3 style="color: #20c997;">COLOR PREDICTION CHART PATTERN PDF</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 deasw" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem all_off gfe">
                            <div class="sr">
                                <h3 style="color: #20c997;">All Packages Get @199</h3>
                                <div class="d-flex">
                                    <a href="{{ route('callback') }}" class="btn-get-started">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="" style="display: flex;justify-content: center;align-items: center;">
                            <div class="row">
                                <div class="" style="display: flex;justify-content: center;">
                                    <img src="{{ asset('assets/img/rating.png') }}" width="208px" alt="">
                                </div>
                                <div class="" style="display: flex;justify-content: center;">
                                    &nbsp;&nbsp; <a href="javascript:void(0);" style="font-size: 20px;font-weight: 600;"><span id="user-rating">4.8</span> &nbsp; (<span id="user-count">4104</span>) Ratings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="li_nk">
                        <a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @endsection
