@extends('layouts.layout')
    @section('style')
    <style>
        .download-elements {
            float: left;
            width: 100%;
            border-bottom: 1px dotted #000000;
            margin: 10px 0;
            padding-bottom: 10px;
        }

        .download-elements a img {
            height: auto;
        }
    </style>
    @endsection
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gtr_u">
                    <div class="download-elements">
                        <a href="{{ route('download-app') }}">
                            <img src="{{ asset('assets/img/pakege-2.png') }}" alt="W3Schools" width="104" height="142">
                            <span>Download</span>
                        </a>
                    </div>
                    <div class="download-elements">
                        <a href="{{ route('download-color-pdf') }}">
                            <img src="{{ asset('assets/img/pakege-4.png') }}" alt="W3Schools" width="104" height="142">
                            <span>Download</span>
                        </a>
                    </div>
                    <div class="download-elements">
                        <a href="{{ route('download-demo-ac-pdf') }}">
                            <img src="{{ asset('assets/img/pakege-1.jpg') }}" alt="W3Schools" width="104" height="142">
                            <span>Download</span>
                        </a>
                    </div>
                    <div class="download-elements">
                        <a href="{{ route('download-gift-pdf') }}">
                            <img src="{{ asset('assets/img/pakege-3.png') }}" alt="W3Schools" width="104" height="142">
                            <span>Download</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection   