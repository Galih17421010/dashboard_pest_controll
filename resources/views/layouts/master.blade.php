<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    <div id="page">
      <div class="header header-fixed header-auto-show header-logo-center">
        @include('layouts.navhead')
      </div>
      <div id="footer-bar" class="footer-bar-1">
        @include('layouts.menu')
      </div>
      @include('components.snackbar-cart')
      @include('components.snackbar-favorites')


      <div class="page-content header-clear-small">
        @yield('content')
      </div>

     @include('layouts.settings')

      @include('layouts.highlights')

      @include('layouts.backgrounds')

      @include('layouts.share')

      @include('layouts.menu-cart')

      @include('layouts.menu-favorites')
    </div>
    @include('layouts.script')
  </body>
</html>
