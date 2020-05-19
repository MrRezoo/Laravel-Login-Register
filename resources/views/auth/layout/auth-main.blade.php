<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <link rel="shortcut icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('auth.layout.auth-css')
    @yield('css')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
</head>

<body main-theme-layout="rtl">
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <!-- login page with video background start-->
        <div class="auth-bg-video">
            <video id="bgvid" poster="{{asset('/assets/images/other-images/coming-soon-bg.jpg')}}" playsinline=""
                   autoplay="" muted="" loop="">
                <source src="http://admin.pixelstrap.com/endless/assets/video/auth-bg.mp4" type="video/mp4">
            </video>
            @yield('content')
        </div>
        <!-- login page with video background end-->
    </div>
</div>

@include('auth.layout.js')
@yield('js')

</body>

</html>
