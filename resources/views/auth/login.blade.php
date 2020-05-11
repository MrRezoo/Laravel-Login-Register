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
<title>@lang('auth.login')</title>
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/fontawesome.css")}}'>
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/icofont.css")}}'>
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/themify.css")}}'>
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/flag-icon.css")}}'>
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/feather-icon.css")}}'>
<!-- Plugins css start-->
@yield('css')
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/prism.css")}}'>
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/vertical-menu.css")}}'>
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/bootstrap.css")}}'>
<!-- App css-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/style.css")}}'>
<link id="color" rel="stylesheet" href='{{asset("/assets/css/light-1.css")}}' media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/responsive.css")}}'>
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
            <div class="authentication-box">
                <div class="text-center"><img src="{{asset('/assets/images/endless-logo.png')}}" alt=""></div>
                <div class="card mt-4">
                    <div class="card-body">
                        @include('partials.alerts')
                        <div class="text-center">
                            <h4>@lang('auth.login')</h4>
                        </div>
                        <form class="theme-form" action="{{route('auth.login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label" for="email">@lang('auth.email')</label>
                                <input aria-describedby="emailHelp"
                                       class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email"
                                       placeholder="@lang('auth.enter your email')"
                                       type="email" value="{{old('email')}}">
                               @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="password">@lang('auth.password')</label>
                                <input class="form-control @error('password') is-invalid @enderror " type="password" name="password" id="password"
                                       placeholder="@lang('auth.enter your password')" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="offset-sm-3">
                            </div>
                            <div class="checkbox p-0 ">
                                <input type="checkbox"  name="remember" id="remember">
                                <label class="form-check-label" for="remember">@lang('auth.remember me')</label>
                            </div>
                            <div class="form-group form-row mt-3 mb-0">
                                <button class="btn btn-primary btn-block" type="submit">@lang('auth.login')</button>
                            </div>
                            <div class="form-group form-row mt-3 mb-0 ">
                                <button class="btn btn-outline-danger-2x btn-block"
                                        >@lang('auth.forget your password?')</button>
                            </div>
                            <div class="login-divider"></div>
                            <div class="social form-row mt-auto">
                                <div class="col-sm-12">
                                    <button class="btn btn-google btn-block " href="#"><i
                                            class="fa fa-google"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- login page with video background end-->
    </div>
</div>

@include('layouts.js')
</body>
</html>
