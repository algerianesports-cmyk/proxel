<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title', __('messages.app_name'))</title>
    <!-- hreflang SEO tags -->
    <link rel="alternate" hreflang="fr"
        href="{{ url('/fr' . '/' . ltrim(request()->path() !== app()->getLocale() ? Str::after(request()->path(), app()->getLocale()) : '', '/')) }}" />
    <link rel="alternate" hreflang="en"
        href="{{ url('/en' . '/' . ltrim(request()->path() !== app()->getLocale() ? Str::after(request()->path(), app()->getLocale()) : '', '/')) }}" />
    <link rel="alternate" hreflang="x-default"
        href="{{ url('/fr' . '/' . ltrim(request()->path() !== app()->getLocale() ? Str::after(request()->path(), app()->getLocale()) : '', '/')) }}" />
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
    <style>
        /* Align language switcher with nav items on desktop */
        .navbar_nav {
            display: flex;
            align-items: center;
        }

        .navbar_nav .menu-item.nav-item {
            display: flex;
            align-items: center;
        }

        /* Ensure nav links (including the language button) are vertically centered */
        .navbar_nav .menu-item.nav-item .nav-link {
            display: inline-flex;
            align-items: center;
            align-self: center;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .navbar_nav .nav-link.lang-switch-btn {
            background: none !important;
            color: #fff !important;
            padding: 6px 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border-radius: 0;
        }

        .navbar_nav .nav-link.lang-switch-btn svg {
            display: inline-block;
            vertical-align: middle;
        }

        /* Mobile: stack hours and days on two lines */
        @media (max-width: 767px) {
            .mobile_topbar_text {
                display: flex !important;
                flex-direction: column !important;
                align-items: flex-start;
                gap: 2px;
            }

            .mobile_topbar_hours,
            .mobile_topbar_days {
                display: block !important;
            }

            .lang-switcher-mobile {
                display: inline-flex !important;
            }
        }
    </style>
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
                                    <span class="mobile_topbar_hours"
                                        data-i18n="messages.hours_range">{{ __('messages.hours_range') }}</span>
                                    <span class="mobile_topbar_sep">|</span>
                                    <span class="mobile_topbar_days"
                                        data-i18n="messages.monday_friday">{{ __('messages.monday_friday') }}</span>
                                </div>
                                <a class="mobile_topbar_phone" href="tel:+15147048045"
                                    aria-label="{{ __('messages.call_us') }}">
                                    <i class="icon-phone-call"></i>
                                </a>
                                @php
                                    $otherLocaleMobile = app()->getLocale() === 'fr' ? 'en' : 'fr';
                                @endphp
                                <a href="#" class="lang-switcher-mobile lang-switch-btn"
                                    data-locale="{{ $otherLocaleMobile }}"
                                    style="display:inline-flex; align-items:center; gap:4px; padding:4px 10px; cursor:pointer; text-decoration:none; background:#fff; border-radius:4px; margin-left:8px;">
                                    @if ($otherLocaleMobile === 'en')
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 25" width="24"
                                            height="15" style="border-radius:2px;">
                                            <rect width="40" height="25" fill="#fff" />
                                            <rect width="10" height="25" fill="#FF0000" />
                                            <rect x="30" width="10" height="25" fill="#FF0000" />
                                            <path d="M20 4l-1.5 4.5H15l3 2.5-1 4L20 13l3 2-1-4 3-2.5h-3.5z"
                                                fill="#FF0000" />
                                        </svg>
                                        <span style="font-weight:700; color:#333; font-size:11px;">EN</span>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 25" width="24"
                                            height="15" style="border-radius:2px;">
                                            <rect width="40" height="25" fill="#003DA5" />
                                            <rect y="10.5" width="40" height="4" fill="#fff" />
                                            <rect x="18" width="4" height="25" fill="#fff" />
                                            <g fill="#fff" transform="translate(9,5.5) scale(.35)">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                            </g>
                                            <g fill="#fff" transform="translate(26,5.5) scale(.35)">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                            </g>
                                            <g fill="#fff" transform="translate(9,16) scale(.35)">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                            </g>
                                            <g fill="#fff" transform="translate(26,16) scale(.35)">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                            </g>
                                        </svg>
                                        <span style="font-weight:700; color:#333; font-size:11px;">FR</span>
                                    @endif
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
                                                    <h4 data-i18n="messages.hours_range">
                                                        {{ __('messages.hours_range') }}</h4>
                                                    <p data-i18n="messages.monday_friday">
                                                        {{ __('messages.monday_friday') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-4 same_column">
                                            <div class="mid_content one">
                                                <span class="icon-24-hours mid_icon"></span>
                                                <div class="text">
                                                    <h4 data-i18n="messages.contact_number">
                                                        {{ __('messages.contact_number') }}</h4>
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
                                                @php
                                                    $otherLocale = app()->getLocale() === 'fr' ? 'en' : 'fr';
                                                @endphp
                                                <ul id="myNavbar" class="navbar_nav">
                                                    <li class="menu-item nav-item">
                                                        <a href="#" id="lang-switcher"
                                                            class="nav-link lang-switch-btn"
                                                            data-locale="{{ $otherLocale }}"
                                                            style="display:inline-flex; align-items:center; gap:6px; padding:6px 14px; cursor:pointer; text-decoration:none;">
                                                            @if ($otherLocale === 'en')
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 40 25" width="28" height="18"
                                                                    style="border-radius:3px; box-shadow:0 1px 3px rgba(0,0,0,.2);">
                                                                    <rect width="40" height="25"
                                                                        fill="#fff" />
                                                                    <rect width="10" height="25"
                                                                        fill="#FF0000" />
                                                                    <rect x="30" width="10" height="25"
                                                                        fill="#FF0000" />
                                                                    <path
                                                                        d="M20 4l-1.5 4.5H15l3 2.5-1 4L20 13l3 2-1-4 3-2.5h-3.5z"
                                                                        fill="#FF0000" />
                                                                </svg>
                                                                <span
                                                                    style="font-weight:700; color:#fff; font-size:13px;">EN</span>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 40 25" width="28" height="18"
                                                                    style="border-radius:3px; box-shadow:0 1px 3px rgba(0,0,0,.2);">
                                                                    <rect width="40" height="25"
                                                                        fill="#003DA5" />
                                                                    <rect y="10.5" width="40" height="4"
                                                                        fill="#fff" />
                                                                    <rect x="18" width="4" height="25"
                                                                        fill="#fff" />
                                                                    <g fill="#fff"
                                                                        transform="translate(9,5.5) scale(.35)">
                                                                        <path
                                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                                                    </g>
                                                                    <g fill="#fff"
                                                                        transform="translate(26,5.5) scale(.35)">
                                                                        <path
                                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                                                    </g>
                                                                    <g fill="#fff"
                                                                        transform="translate(9,16) scale(.35)">
                                                                        <path
                                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                                                    </g>
                                                                    <g fill="#fff"
                                                                        transform="translate(26,16) scale(.35)">
                                                                        <path
                                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                                                    </g>
                                                                </svg>
                                                                <span
                                                                    style="font-weight:700; color:#fff; font-size:13px;">FR</span>
                                                            @endif
                                                        </a>
                                                    </li>
                                                    <li class="menu-item nav-item active">
                                                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                                                            class="nav-link">
                                                            <span
                                                                data-i18n="messages.home">{{ __('messages.home') }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item nav-item">
                                                        <a href="#" class="nav-link">
                                                            <span
                                                                data-i18n="messages.about">{{ __('messages.about') }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
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

    <!-- Language Switcher JS -->
    <script>
        (function() {
            'use strict';

            const SUPPORTED_LOCALES = ['en', 'fr'];
            // Base path from Laravel (e.g. "/pr/public" or "")
            const BASE_URL = '{{ rtrim(url('/'), '/') }}';
            const basePath = new URL(BASE_URL).pathname.replace(/\/+$/, '');

            /**
             * Get the current locale from the URL path (after the base path).
             */
            function getCurrentLocale() {
                let path = window.location.pathname;
                // Strip the base path to get the app-relative path
                if (basePath && path.startsWith(basePath)) {
                    path = path.substring(basePath.length);
                }
                const segments = path.split('/').filter(Boolean);
                if (segments.length > 0 && SUPPORTED_LOCALES.includes(segments[0])) {
                    return segments[0];
                }
                return '{{ app()->getLocale() }}';
            }

            /**
             * Build a new URL with the target locale prefix.
             */
            function buildLocalizedUrl(targetLocale) {
                const currentLocale = getCurrentLocale();
                let path = window.location.pathname;

                // Strip the base path
                let relative = path;
                if (basePath && path.startsWith(basePath)) {
                    relative = path.substring(basePath.length);
                }

                // Replace the locale segment
                if (relative.startsWith('/' + currentLocale)) {
                    relative = '/' + targetLocale + relative.substring(('/' + currentLocale).length);
                } else {
                    relative = '/' + targetLocale + relative;
                }

                // Clean up trailing slashes
                relative = relative.replace(/\/+$/, '') || '/';

                return window.location.origin + basePath + relative + window.location.search;
            }

            /**
             * Apply translations to all elements with data-i18n attributes.
             */
            function applyTranslations(translations) {
                document.querySelectorAll('[data-i18n]').forEach(function(el) {
                    const key = el.getAttribute('data-i18n');
                    const parts = key.split('.');
                    let value = translations;

                    for (let i = 0; i < parts.length; i++) {
                        if (value && typeof value === 'object' && parts[i] in value) {
                            value = value[parts[i]];
                        } else {
                            value = null;
                            break;
                        }
                    }

                    if (value && typeof value === 'string') {
                        // Check if it's an input placeholder
                        if (el.tagName === 'INPUT' && el.hasAttribute('placeholder')) {
                            el.placeholder = value;
                        } else if (el.tagName === 'INPUT' && el.type === 'submit') {
                            el.value = value;
                        } else {
                            el.textContent = value;
                        }
                    }
                });
            }

            /**
             * Switch language via AJAX without page refresh.
             */
            function switchLanguage(targetLocale) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch(BASE_URL + '/api/language/switch', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            locale: targetLocale
                        }),
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        if (data.success) {
                            // Apply translations to data-i18n elements
                            applyTranslations(data.translations);

                            // Update the <html> lang attribute
                            document.documentElement.lang = targetLocale;

                            // Update the URL using History API
                            const newUrl = buildLocalizedUrl(targetLocale);
                            window.history.pushState({
                                locale: targetLocale
                            }, '', newUrl);

                            // Update all switcher buttons (desktop + mobile) with flag + label
                            const otherLocale = targetLocale === 'fr' ? 'en' : 'fr';
                            const canadaFlag =
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 25" width="{W}" height="{H}" style="border-radius:3px; box-shadow:0 1px 3px rgba(0,0,0,.2);"><rect width="40" height="25" fill="#fff"/><rect width="10" height="25" fill="#FF0000"/><rect x="30" width="10" height="25" fill="#FF0000"/><path d="M20 4l-1.5 4.5H15l3 2.5-1 4L20 13l3 2-1-4 3-2.5h-3.5z" fill="#FF0000"/></svg>';
                            const quebecFlag =
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 25" width="{W}" height="{H}" style="border-radius:3px; box-shadow:0 1px 3px rgba(0,0,0,.2);"><rect width="40" height="25" fill="#003DA5"/><rect y="10.5" width="40" height="4" fill="#fff"/><rect x="18" width="4" height="25" fill="#fff"/><g fill="#fff" transform="translate(9,5.5) scale(.35)"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></g><g fill="#fff" transform="translate(26,5.5) scale(.35)"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></g><g fill="#fff" transform="translate(9,16) scale(.35)"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></g><g fill="#fff" transform="translate(26,16) scale(.35)"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></g></svg>';

                            document.querySelectorAll('.lang-switch-btn').forEach(function(btn) {
                                btn.setAttribute('data-locale', otherLocale);
                                var isMobile = btn.classList.contains('lang-switcher-mobile');
                                var w = isMobile ? '24' : '28';
                                var h = isMobile ? '15' : '18';
                                var fs = isMobile ? '11px' : '13px';
                                var color = isMobile ? '#333' : '#fff';
                                var flag = otherLocale === 'en' ? canadaFlag : quebecFlag;
                                flag = flag.replace(/\{W\}/g, w).replace(/\{H\}/g, h);
                                btn.innerHTML = flag +
                                    '<span style="font-weight:700;color:' + color + ';font-size:' + fs +
                                    ';">' +
                                    otherLocale.toUpperCase() + '</span>';
                            });

                            // Update hreflang tags
                            document.querySelectorAll('link[hreflang]').forEach(function(link) {
                                const hl = link.getAttribute('hreflang');
                                // Get path after basePath + locale
                                let rel = window.location.pathname;
                                if (basePath && rel.startsWith(basePath)) {
                                    rel = rel.substring(basePath.length);
                                }
                                rel = rel.replace(/^\/[a-z]{2}/, '');
                                if (hl === 'x-default') {
                                    link.href = window.location.origin + basePath + '/fr' + rel;
                                } else {
                                    link.href = window.location.origin + basePath + '/' + hl + rel;
                                }
                            });
                        }
                    })
                    .catch(function(error) {
                        console.error('Language switch failed:', error);
                        // Fallback: do a full redirect
                        window.location.href = buildLocalizedUrl(targetLocale);
                    });
            }

            // Bind click event to all language switcher buttons (desktop + mobile)
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.lang-switch-btn').forEach(function(btn) {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        var targetLocale = this.getAttribute('data-locale');
                        switchLanguage(targetLocale);
                    });
                });
            });

            // Handle browser back/forward
            window.addEventListener('popstate', function(event) {
                if (event.state && event.state.locale) {
                    switchLanguage(event.state.locale);
                } else {
                    window.location.reload();
                }
            });
        })();
    </script>

    <!-- Cookie Consent -->
    @include('components.cookie-consent')
</body>

</html>
