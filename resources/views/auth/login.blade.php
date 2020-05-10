<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <link rel="shortcut icon" href='{{asset("/assets/images/favicon.png")}}' type="image/x-icon">
    <title>@lang('auth.login')</title>
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
    <div class="container-fluid p-0">
        <!-- login page with video background start-->
        <div class="auth-bg-video">
            <video id="bgvid" poster="{{asset('/assets/images/other-images/coming-soon-bg.jpg')}}" playsinline="" autoplay="" muted="" loop="">
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
                        <form class="theme-form">
                            <div class="form-group">
                                <label class="col-form-label" for="email">@lang('auth.email')</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}"
                                       aria-describedby="emailHelp" placeholder="@lang('auth.enter your email')" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="password">@lang('auth.password')</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="@lang('auth.enter your password')" required="">
                            </div>
                            <div class="offset-sm-3">
                                @include('partials.validation_error')
                            </div>
                            <div class="checkbox p-0">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label class="form-check-label" for="remember"><small>@lang('auth.remember me')</small></label>
                            </div>
                            <div class="form-group form-row mt-3 mb-0">
                                <button class="btn btn-primary btn-block" type="submit">@lang('auth.login')</button>
                            </div>
                            <div class="form-group form-row mt-3 mb-0 ">
                                <button class="btn btn-outline-danger btn-block" type="submit">@lang('auth.forget your password?')</button>
                            </div>
                            <div class="login-divider"></div>
                            <div class="social mt-3">
                                <div class="form-group btn-showcase d-flex">
                                    <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                    <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-twitter"></i></button>
                                    <button class="btn social-btn btn-google d-inline-block"><i class="fa fa-google"></i></button>
                                    <button class="btn social-btn btn-github d-inline-block"><i class="fa fa-github"></i></button>
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