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

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('dashboard_assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    <!-- Toast message -->
    <link href="{{ asset('dashboard_assets/libs/toast/toastr.css') }}" rel="stylesheet" type="text/css" />
    <!-- Toast message -->

    <style>
        @media (max-width: 500px) {
            .account-page-full { 
                width: 100%!important; 
            }
        }
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 72%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body class="account-pages">

    @yield('content')

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard_assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- toast message -->
    <script src="{{ asset('dashboard_assets/libs/toast/toastr.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/pages/toastr.init.js') }}"></script>
    <!-- toast message -->
    @include('admin.dash._massages')

    <script src="{{ asset('dashboard_assets/js/app.js') }}"></script>
    <script>
        function togglePassword(toggleIcon) {
            const passwordField = toggleIcon.previousElementSibling;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordField.type = 'password';
                toggleIcon.innerHTML = '<i class="fas fa-eye"></i>';
            }
        }
    </script>
</body>

</html>