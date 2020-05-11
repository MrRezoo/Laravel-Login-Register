<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <link rel="shortcut icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <title>@lang('auth.register')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
<body>

<div class="page-wrapper">
    <div class="container-fluid">
        <!-- sign up page start-->
        <div class="auth-bg-video">
            <video id="bgvid" poster='{{asset("/assets/images/other-images/coming-soon-bg.jpg")}}' playsinline="" autoplay=""
                   muted="" loop="">
                <source src="http://admin.pixelstrap.com/endless/assets/video/auth-bg.mp4" type="video/mp4">
            </video>
            <div class="authentication-box">
                <div class="text-center"><img src='{{asset("/assets/images/endless-logo.png")}}' alt=""></div>
                <div class="card mt-4 p-4">
                    @include('partials.alerts')
                    <h4 class="text-center">@lang('auth.register user')</h4>
                    <form class="theme-form" action="{{route('auth.register')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="offset-sm-3">
                                    </div>
                                    <label class="col-form-label" for="name">@lang('auth.name')</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}"
                                           placeholder="@lang('auth.enter your name')">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="last_name">@lang('auth.last name')</label>
                                    <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{old('last_name')}}"
                                           placeholder="@lang('auth.enter your last name')">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="email">@lang('auth.email')</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{old('email')}}"
                                   aria-describedby="emailHelp" placeholder="@lang('auth.enter your email')">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="phone_number">@lang('auth.phone number')</label>
                            <input class="form-control @error('phone_number') is-invalid @enderror " type="tel" name="phone_number" id="phone_number" value="{{old('phone_number')}}"
                                   placeholder="@lang('auth.enter your phone number')">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">@lang('auth.password')</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password"
                                   placeholder="@lang('auth.enter your password')">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"
                                   for="password_confirmation">@lang('auth.confirm password')</label>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation"
                                   id="password_confirmation" placeholder="@lang('auth.confirm your password')">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="offset-sm-3">
                        </div>
                        <div class="form-row">
                            <div class="col-sm-4">
                                <button class="btn btn-outline-primary-2x btn-block" type="submit">@lang('auth.register')</button>
                            </div>
                            <div class="col-sm-8">
                                <a class="btn btn-outline-danger-2x btn-block" href="{{route('auth.login.form')}}" type="submit">@lang('auth.early register')</a>
                            </div>
                        </div>
                        <div class="form-divider"></div>
                        <div class="social form-row mt-auto">
                            <div class="col-sm-12">
                                <button class="btn btn-google btn-block " href="{{route('auth.login.form')}}" ><i class="fa fa-google"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- sign up page ends-->
    </div>
</div>
</body>
@include('layouts.js')
</html>
