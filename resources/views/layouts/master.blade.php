<?php
/**
 * File For: pizza-website.com
 * File Name: master.blade.php.
 * Author: Mike Giammattei
 * Created On: 8/4/2017, 7:22 PM
 */;
 ?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pizza Websites - @yield('page title')</title>
        <meta name="description" content="@yield('page description')">
        <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            @include('includes.header');
            @yield('content')
        </div>
    <?php /* Code for enabling auto refresh in dev mode */ ?>
    @if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
@endif
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
