<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>500 | Khalo Digital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Khalo Digital" name="description">
        <meta content="" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- Bootstrap Css -->
        <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('dashboard_assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Begin page -->
        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 ms-auto">
                                                <div class="ex-page-content">
                                                    <h1 class="text-dark display-1 mt-4">500</h1>
                                                    <h4 class="mb-4">Internal Server Error</h4>
                                                    <p class="mb-5">It will be as simple as Occidental in fact, it will be Occidental to an English person</p>
                                                    <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{ route('index') }}"><i class="mdi mdi-home"></i> Back to Home</a>
                                                </div>
                                    
                                            </div>
                                            <div class="col-lg-5 mx-auto">
                                                <img src="{{ asset('dashboard_assets/images/error.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
            </div>

        </div>
        <!-- end error page -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('dashboard_assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('dashboard_assets/js/app.js') }}"></script>

    </body>
</html>
