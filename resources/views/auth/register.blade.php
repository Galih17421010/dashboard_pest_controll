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
        <title>{{ config('app.name', 'Laravel') }} - Registrasi</title>
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
                            <a href="#" data-back-button class="me-auto icon icon-m"><i class="font-14 fa fa-arrow-left color-theme"></i></a>
                            <a href="#" data-toggle-theme class="show-on-theme-light ms-auto icon icon-m"><i class="font-12 fa fa-moon color-theme"></i></a>
                            <a href="#" data-toggle-theme class="show-on-theme-dark ms-auto icon icon-m"><i class="font-12 fa fa-sun color-yellow-dark"></i></a>
                        </div>
                    </div>
                    <div class="card-center">
                        <div class="ps-5 pe-5">
                            <h1 class="text-center font-800 font-40 mb-1">
                                Sign Up
                            </h1>
                            <p class="color-highlight text-center font-12">
                                Create an Account. It's free!
                            </p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-style no-borders has-icon validate-field">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" class="form-control validate-name" id="name" placeholder="Name" required />
                                    <label for="form1a" class="color-blue-dark font-10 mt-1">Name</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="input-style no-borders has-icon validate-field mt-2" >
                                    <i class="fa fa-at"></i>
                                    <input type="email" name="email" class="form-control validate-name" id="email" placeholder="Email" required/>
                                    <label for="form1aa" class="color-blue-dark font-10 mt-1" >Email</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="input-style no-borders has-icon validate-field mt-2">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" class="form-control validate-text" id="password" placeholder="Choose a Password"/>
                                    <label for="form3a" class="color-blue-dark font-10 mt-1">Choose a Password</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="input-style no-borders has-icon validate-field mt-2">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password_confirmation" class="form-control validate-text" id="password_confirmation" placeholder="Confirm your Password" required/>
                                    <label for="form3a1" class="color-blue-dark font-10 mt-1" >Confirm your Password</label>
                                    <i class="fa fa-times disabled invalid color-red-dark" ></i>
                                    <i class="fa fa-check disabled valid color-green-dark" ></i>
                                    <em>(required)</em>
                                </div>
                                <div class="text-center mb-5 mt-5">
                                    <a href="{{ route('login') }}" class="font-12"
                                        >Already Registered? Sign in Here</a
                                    >
                                </div>
                                <a href="{{ route('register') }}" onclick="event.preventDefault();
                                this.closest('form').submit();" type="submit" class="btn btn-full btn-m shadow-large rounded-sm text-uppercase font-900 bg-highlight">Create Account</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.script')
    </body>
</html>
