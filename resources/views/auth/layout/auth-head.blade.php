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
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
</head>
