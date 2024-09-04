@extends('layouts.app-login')
@section('title') Login @endsection
@section('content')
    <!-- Begin page -->
    <div class="accountbg"></div>
        <div class="account-pages my-2 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20">Welcome Back !</h5>
                                    <p class="text-white-50">Sign in to continue to Khelo Digital.</p>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="mt-4" action="{{url('/checkuser')}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>

                                        <div class="mb-3 password-container">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" name="password" class="form-control password-new-field" id="userpassword" placeholder="Enter password">
                                            <span class="toggle-password" onclick="togglePassword(this)"><i class="fas fa-eye"></i></span>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customControlInline" name="remember" id="remember">
                                                    <label class="form-check-label" for="customControlInline">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                                    Log In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mt-5 text-center" style="position: relative;">
                                        &copy; Khalo Digital. 2024 All Rights Reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection