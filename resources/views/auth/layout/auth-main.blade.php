<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" dir="rtl">
@include('auth.auth-head')
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

@include('layouts.js')
</body>
</html>
