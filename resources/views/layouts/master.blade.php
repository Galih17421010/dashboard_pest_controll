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
  <body class="theme-light" data-highlight="highlight-blue" data-gradient="body-default">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    <div id="page">

        @yield('navhead')

      <div id="footer-bar" class="footer-bar-1">
        @include('layouts.menu')
      </div>




        @yield('content')

      @include('layouts.settings')

      @include('layouts.highlights')

      @include('layouts.backgrounds')



    </div>
    @include('layouts.script')
    @yield('scripts')
  </body>
</html>
