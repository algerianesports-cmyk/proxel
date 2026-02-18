<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>@yield('title', __('messages.app_name'))</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-png" />
    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900%7CSpartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext"
        type="text/css" media="all" />
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/scss/elements/theme-css.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/woocommerce-layout.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('build/assets/custom.css') }}" type="text/css" media="all" />
    @yield('extra_styles')
</head>

<body class="home theme-creote page-home-default-one">
    <div id="page" class="page_wapper hfeed site">
        <div id="wrapper_full" class="content_all_warpper">
            <!-- Preloader -->
            <div class="preloader-wrap">
                <div class="preloader" style="background-image: url({{ asset('assets/images/preloader.gif') }})"></div>
                <div class="overlay"></div>
            </div>
            <!-- Header -->
            <div class="header_area" id="header_contents">
                <header class="header header_default style_three">
                    <div class="mobile_topbar">
                        <div class="medium-container">
                            <div class="mobile_topbar_inner">
                                <div class="navbar_togglers hamburger_menu color_white">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                                <div class="mobile_topbar_text">
                                    <span class="mobile_topbar_hours">{{ __('messages.hours_range') }}</span>
                                    <span class="mobile_topbar_sep">|</span>
                                    <span class="mobile_topbar_days">{{ __('messages.monday_friday') }}</span>
                                </div>
                                <a class="mobile_topbar_phone" href="tel:+15147048045"
                                    aria-label="{{ __('messages.call_us') }}">
                                    <i class="icon-phone-call"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header_mid">
                        <div class="medium-container">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2 col-md-12">
                                    <div class="logo mid_logo_icon">
                                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                                            class="logo_mid">
                                            <img src="{{ asset('assets/images/logo-wide.png') }}"
                                                alt="{{ __('messages.app_name') }}" class="logo_default" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 header_mid_info">
                                    <div class="row">
                                        <div class="col-lg-4 d-none d-lg-block same_column hidden-sm"></div>
                                        <div class="col-6 col-lg-4 same_column">
                                            <div class="mid_content one">
                                                <span class="icon-deadline mid_icon"></span>
                                                <div class="text">
                                                    <h4>{{ __('messages.hours_range') }}</h4>
                                                    <p>{{ __('messages.monday_friday') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-4 same_column">
                                            <div class="mid_content one">
                                                <span class="icon-24-hours mid_icon"></span>
                                                <div class="text">
                                                    <h4>{{ __('messages.contact_number') }}</h4>
                                                    <p>+15147048045</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar_outer mod_btn_enable get_sticky_header">
                        <div class="medium-container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 menu_column">
                                    <div class="navbar_togglers hamburger_menu">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                    <div class="header_content_collapse">
                                        <div class="header_menu_box">
                                            <div class="navigation_menu">
                                                <ul id="myNavbar" class="navbar_nav">
                                                    <li class="menu-item nav-item active">
                                                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                                                            class="nav-link">
                                                            <span>{{ __('messages.home') }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item nav-item">
                                                        <a href="#" class="nav-link">
                                                            <span>{{ __('messages.about') }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="header_right_content">
                                            <ul>
                                                <li class="language-selector-item">
                                                    @include('components.language-selector')
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn five">
                                                        {{ __('messages.service_appointment') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn five">
                                                        {{ __('messages.schedule_installation') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <!-- Page Content -->
            <div id="content" class="site-content">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('components.footer')
        </div>

        <!-- Mobile Menu -->
        <div class="crt_mobile_menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="close-btn">
                    <i class="icon-close"></i>
                </div>
                <form role="search" method="get" action="#">
                    <input type="search" class="search" placeholder="{{ __('messages.search_placeholder') }}" />
                    <button type="submit" class="sch_btn">
                        <i class="icon-search"></i>
                    </button>
                </form>
                <div class="menu-outer"></div>
            </nav>
        </div>

        <!-- Search Popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search">
                <i class="fa fa-times"></i>
            </div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <fieldset>
                        <form role="search" method="get" action="#">
                            <input type="search" class="search"
                                placeholder="{{ __('messages.search_placeholder') }}" />
                            <button type="submit" class="sch_btn">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>

        <!-- Back to top -->
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/simpleParallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/sharer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('assets/js/map-helper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/creote-extension.js') }}"></script>
    <script>
        (function() {
            const header = document.querySelector("header.header_default.style_three");
            if (!header) return;

            const topbarHours = header.querySelector(".mobile_topbar_hours");
            const topbarDays = header.querySelector(".mobile_topbar_days");
            const topbarPhone = header.querySelector(".mobile_topbar_phone");

            const hoursSrc = header.querySelector(".header_mid_info .mid_content .text h4");
            const ps = header.querySelectorAll(".header_mid_info .mid_content .text p");
            const daysSrc = ps.length > 0 ? ps[0] : null;
            const phoneSrc = ps.length > 1 ? ps[1] : null;

            if (hoursSrc && topbarHours) topbarHours.textContent = hoursSrc.textContent.trim();
            if (daysSrc && topbarDays) topbarDays.textContent = daysSrc.textContent.trim();

            if (phoneSrc && topbarPhone) {
                const raw = phoneSrc.textContent.trim();
                const tel = raw.replace(/[^0-9+]/g, "");
                if (tel) topbarPhone.setAttribute("href", `tel:${tel}`);
                if (raw) topbarPhone.setAttribute("aria-label", `Call us at ${raw}`);
            }
        })();
    </script>
    @yield('extra_scripts')

    <!-- Cookie Consent -->
    @include('components.cookie-consent')
</body>

</html>
