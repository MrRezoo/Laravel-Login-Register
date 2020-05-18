<!DOCTYPE html>
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
    @include('layouts.css')
    @yield('css')
</head>

<link rel="stylesheet" type="text/css" href='{{url("/assets/css/owlcarousel.css")}}'>
<body main-theme-layout="rtl">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="whirly-loader"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper vertical">
@include('layouts.header')
<!-- vertical menu start-->
@include('layouts.vertical_menu')
<!-- vertical menu ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Right sidebar Start-->
        <!-- Right sidebar Ends-->
        <div class="page-body vertical-menu-mt">
            <div class="container-fluid">
                <div class="page-header">
                    @include('partials.alerts')
                    @if(session('mustVerifyEmail'))
                        <div class="alert alert-warning">
                            @lang('auth.you must verify your email',['link'=>route('auth.email.send.verification')])
                        </div>
                    @endif
                    @if(session('verificationEmailSent'))
                        <div class="alert alert-success text-center">
                            @lang('auth.verification email sent')
                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            @yield('breadcrumb')
                            <div class="page-header-left">
                                <h3>منوی عمودی</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">گزینههای منو</li>
                                    <li class="breadcrumb-item active">منوی عمودی</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Bookmark Start-->

                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        @include('layouts.footer')
    </div>
</div>

<!-- js-->
@include('layouts.js')
@yield('js')
<script src='{{url("/assets/js/owlcarousel/owl.carousel.js")}}'></script>
<script src='{{url("/assets/js/owlcarousel/owl-custom.js")}}'></script>
</body>

</html>
