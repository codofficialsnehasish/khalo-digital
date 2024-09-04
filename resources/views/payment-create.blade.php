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
                            <div class="pricing-tem all_off">
                                <div class="srj">
                                    <h3 style="color: #20c997;">Payment for Khalo Digital</h3>
                                    <form action="{{ route('store') }}" method="POST" name="laravel9-cashfree-integration" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating py-2">
                                            <input type="text" class="form-control" required name="name" id="name" value="{{ old('name') }}" placeholder="name">
                                            <label for="name">Full Name</label>
                                        </div>
                                        <div class="form-floating py-2">
                                            <input type="number" class="form-control" required name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="mobile">
                                            <label for="mobile">Mobile Number</label>
                                        </div>
                                        <div class="form-floating py-2">
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="email">
                                            <label for="email">Email ID</label>
                                        </div>
                                        <p style="color:red;">*Screenshot This QR and Make the Payment*</p>
                                        <p style="color:red;padding-top:10px;">*इस QR का स्क्रीनशॉट लें और भुगतान करें*</p>
                                        <div class="all-images">
                                            <p>All UPI Payments Accepted</p>
                                            {{--<img src="{{ asset('assets/img/Capture.PNG') }}" alt="">--}}
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('assets/img/app-qr.png') }}" required alt="">
                                        </div>
                                        <p style="color:red;">*After Payment Upload The Screenshot*</p>
                                        <p  style="color:red;">*भुगतान के बाद स्क्रीनशॉट अपलोड करें*</p>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="payment_proof">
                                        </div>
                                        <button class="w-100 btn btn-lg btn-success mt-5" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="li_nk"><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></div>
                    </div>
                </div>
            </section>
         </main>
    @endsection