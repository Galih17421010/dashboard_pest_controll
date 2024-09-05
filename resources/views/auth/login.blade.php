<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta
            name="apple-mobile-web-app-status-bar-style"
            content="black-translucent"
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"
        />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} - Login</title>
        @include('layouts.head')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>
        <div id="page">
            <div class="page-content pb-0">
                <div data-card-height="cover" class="card">
                    <div class="card-top notch-clear">
                        <div class="d-flex">
                            {{-- <a href="#" data-back-button class="me-auto icon icon-m"><i class="font-14 fa fa-arrow-left color-theme"></i></a> --}}
                            <a href="#" data-toggle-theme class="show-on-theme-light ms-auto icon icon-m"><i class="font-12 fa fa-moon color-theme"></i></a>
                            <a href="#" data-toggle-theme class="show-on-theme-dark ms-auto icon icon-m"><i class="font-12 fa fa-sun color-yellow-dark"></i></a>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="ps-5 pe-5">
                            <h1 class="text-center font-800 font-40 mb-1">
                                Sign In
                            </h1>
                            <p class="color-highlight text-center font-12">
                                Let's get you logged in
                            </p>
                            {{-- <form method="POST" action="{{ route('login') }}"> --}}
                                {{-- @csrf --}}
                                <div class="input-style no-borders has-icon validate-field">
                                    <i class="fa fa-user"></i>
                                    <input type="email" class="form-control validate-name" id="email" placeholder="Email" required />
                                    <label for="email" class="color-blue-dark font-10 mt-1">Name</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="input-style no-borders has-icon validate-field mt-4" >
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control validate-password" id="password" placeholder="Password" required/>
                                    <label for="password" class="color-blue-dark font-10 mt-1" >Password</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="d-flex mt-4 mb-4">
                                    <div class="w-50 font-11 pb-2 text-start">
                                        <a href="{{route('register')}}">Create Account</a>
                                    </div>
                                    <div class="w-50 font-11 pb-2 text-end">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Credentials</a>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ route('login') }}" class="back-button btn btn-full btn-m shadow-large rounded-sm text-uppercase font-700 bg-highlight" type="submit">LOGIN</a>
                            {{-- </form> --}}
                            <div class="divider mt-4"></div>
                            <a href="#" class="btn btn-icon btn-m btn-full shadow-l rounded-sm bg-facebook text-uppercase font-700 text-start">
                                <i class="fab fa-facebook-f text-center bg-transparent"></i>Sign in with Facebook</a>
                            <a href="#" class="btn btn-icon btn-m btn-full shadow-l rounded-sm bg-twitter text-uppercase font-700 text-start mt-2" >
                                <i class="fab fa-twitter text-center bg-transparent"></i>Sign in with Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.script')
    </body>
</html>
