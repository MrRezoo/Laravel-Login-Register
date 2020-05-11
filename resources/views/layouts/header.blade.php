<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href="index.html"><img src='{{asset("/assets/images/endless-logo.png")}}'
                                                                alt=""></a></div>
        </div>
        <div class="mobile-sidebar d-none">
            <div class="media-body text-right switch-sm">
                <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
        </div>
        <div class="nav-right col p-0">
            <ul class="nav-menus">
                <li>
                    <form class="form-inline search-form" action="#" method="get">
                        <div class="form-group">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text"
                                           name="q" placeholder="جستجو...">
                                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">در حال بارگذاری...</span>
                                    </div>
                                    <span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                </li>
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>EN</h6></a>
                    <ul class="language-dropdown onhover-show-div p-20">
                        <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> انگلیسی</a></li>
                        <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> اسپانیا</a></li>
                        <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> پرتغال</a></li>
                        <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> فرانسه</a></li>
                    </ul>
                </li>

                @auth()
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>اطلاعیه <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color"
                                                                  data-feather="shopping-bag"></i></span>سفارش شما برای
                                            ارسال آماده است..!<small class="pull-right">9:30 صبح</small></h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                                              data-feather="download"></i></span>دانلود
                                            کامل<small class="pull-right">2:30 غروب</small></h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                                             data-feather="alert-circle"></i></span>250
                                            مگابایت فایل های حذف شده<small class="pull-right">5:00 غروب</small></h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-light txt-dark"><a href="#">همه</a> اطلاعیه ها</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-circle"></i><span
                                class="dot"></span></a></li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img
                                class="align-self-center pull-right img-50 rounded-circle"
                                src='{{asset("/assets/images/dashboard/user.png")}}' alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span
                                    class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="#"><i data-feather="user"></i>ویرایش پروفایل</a></li>
                            <li><a href="#"><i data-feather="mail"></i> صندوق ورودی</a></li>
                            <li><a href="#"><i data-feather="lock"></i> قفل صفحه</a></li>
                            <li><a href="#"><i data-feather="settings"></i> تنظیمات</a></li>
                            <li>
                                    <a class="dropdown" href="{{route('auth.logout')}}"><i data-feather="log-out"></i> خروج</a>
                            </li>
                        </ul>
                    </li>
                @endauth

                @guest()
                    <div class="col-lg-auto">
                        <a class="btn btn-info" href="{{route('auth.login.form')}}">@lang('public.login')</a>
                        <a class="btn btn-info" href="{{route('auth.register.form')}}"> @lang('public.register')</a>
                    </div>
                @endguest
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-airplay m-0">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                </div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">{{'name'}}</div>
                </div>
            </div>
        </script>
        <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">جستجوی شما 0 نتیجه را به دست آورد. این احتمالا به این معنی است که باطن پایین است،
                وای!
            </div>

        </script>
    </div>
</div>
