<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | Khalo Digital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Khalo Digital" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="">
    
        <link href="{{ asset('dashboard_assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" id="bootstrap-ssstyle" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('dashboard_assets/css/app.min.css') }}" id="app-ddstyle" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="{{ asset('dashboard_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dashboard_assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Responsive datatable examples -->
        <link href="{{ asset('dashboard_assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('dashboard_assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dashboard_assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('dashboard_assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dashboard_assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">

        <!-- Sweet Alert-->
        <link href="{{ asset('dashboard_assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('dashboard_assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Toast message -->
        <link href="{{ asset('dashboard_assets/libs/toast/toastr.css') }}" rel="stylesheet" type="text/css" />
        <!-- Toast message -->

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box" style="display:flex;justify-content: center;align-items: center;">
                            <a href="{{ route('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <!-- WVS -->
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <!-- WVS -->
                                    <img src="" alt="" height="17">
                                </span>
                            </a>

                            <a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <!-- WVS -->
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <!-- <h1>WVS</h1> -->
                                    <img src="" alt="" height="70" style="padding-top: 5px;">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <!-- <div class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Create <i class="mdi mdi-chevron-down"></i>
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="d-flex">
                        <!-- <button type="button" onclick="javascript:window.location.href='{{url('/')}}'" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-eye"></i>
                        </button> -->
                          <!-- App Search-->
                          <!-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form> -->

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <!-- <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button> -->
                            <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        </div> 

                        

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('dashboard_assets/images/users/user-11.jpg') }}"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a> -->
                                <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a> -->
                                {{--<a class="dropdown-item" href="{{url('/changepass')}}"><i class="mdi mdi-lock-plus-outline font-size-17 align-middle me-1"></i> Change Password</a>
                                <div class="dropdown-divider"></div>--}}
                                <a href="{{url('/logout')}}" class="dropdown-item text-danger"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                                <!-- <a href="{{url('/logout')}}" class="btn btn-primary waves-effect waves-light" id="sa-title">Logout</a> -->
                            </div>
                        </div>

                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog-outline"></i>
                            </button>
                        </div> -->
            
                    </div>
                </div>
            </header>

            @include('admin.dash.left_side_bar')


            <div class="main-content">
                @yield('content')

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                &copy; Khalo Digital. 2024 All Rights Reserved
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('dashboard_assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/node-waves/waves.min.js') }}"></script>


        <!-- Peity chart-->
        <script src="{{ asset('dashboard_assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/parsleyjs/parsley.min.js') }}"></script>

        <!-- toast message -->
        <script src="{{ asset('dashboard_assets/libs/toast/toastr.js') }}"></script>
        <script src="{{ asset('dashboard_assets/js/pages/toastr.init.js') }}"></script>
        <!-- toast message -->
        @include('admin.dash._massages')

        <!-- Plugin Js-->
        
        <script src="{{ asset('dashboard_assets/js/pages/form-validation.init.js') }}"></script>
        

        <script src="{{ asset('dashboard_assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('dashboard_assets/js/app.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('dashboard_assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('dashboard_assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <!-- Datatable init js -->
        <script src="{{ asset('dashboard_assets/js/pages/datatables.init.js') }}"></script> 
        <!-- form mask -->
        <script src="{{ asset('dashboard_assets/libs/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>

        <!-- form mask init -->
        <script src="{{ asset('dashboard_assets/js/pages/form-mask.init.js') }}"></script>
        <!--tinymce js-->
        <script src="{{ asset('dashboard_assets/libs/tinymce/tinymce.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('dashboard_assets/js/pages/form-editor.init.js') }}"></script>

        <script src="{{ asset('dashboard_assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        
        <!-- form repeater js -->
        <script src="{{ asset('dashboard_assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/js/pages/form-repeater.int.js') }}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('dashboard_assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- Sweet alert init js-->
        <script src="{{ asset('dashboard_assets/js/pages/sweet-alerts.init.js') }}"></script>

        <script src="{{ asset('dashboard_assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js') }}"></script>

        <!-- form wizard -->
        <script src="{{ asset('dashboard_assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
        
        <!-- form wizard init -->
        <script src="{{ asset('dashboard_assets/js/pages/form-wizard.init.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('dashboard_assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('dashboard_assets/libs/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/js/pages/form-advanced.init.js') }}"></script>

        <script src="{{ asset('dashboard_assets/libs/dropzone/min/dropzone.min.js') }}"></script>


        @yield('script')
    </body>

</html>