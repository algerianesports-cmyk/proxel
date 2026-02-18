@extends('layouts.app')

@section('title', __('messages.page_title_home'))

@section('content')
    <!-- Slider -->
    <section class="slider style_three pag_position_two">
        <div class="banner_carousel owl-carousel owl_nav_none owl_dots_block theme_carousel owl-theme"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            <div class="slide-item">
                <div class="slide-item-content content_left">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/hero.jpg') }})"></div>
                    <div class="auto-container" style="margin-left: 0; margin-right: auto; padding-left: 0">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content" style="padding: 50px 0px">
                                    <h1 class="animated _fadeInDownBig goUP">{{ __('messages.hero_title') }}</h1>
                                    <p class="animated _flipInY">{{ __('messages.hero_subtitle') }}</p>
                                    <div class="theme_btn_all color_one" style="margin-top: 30px;">
                                        <a href="{{ route('service') }}"
                                            class="theme-btn five">{{ __('messages.service_request') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="service-section bg_light_1">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">{{ __('messages.leading') }}</div>
                            <h2>{{ __('messages.effective_solutions') }}</h2>
                            <p>{{ __('messages.service_description') }}</p>
                        </div>
                        <div class="mr_bottom_30"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service_section grid_all three_column news_wrapper_grid dark_color">
                        <div class="grid_show_case grid_layout clearfix">
                            <div class="grid_box _card">
                                <div class="service_post style_three">
                                    <div class="image_box">
                                        <img width="500" height="500"
                                            src="{{ asset('assets/images/service/service-image-6.jpg') }}" alt="img" />
                                    </div>
                                    <div class="text_box">
                                        <div class="text_box_inner">
                                            <span class="icon icon-thumbs-up icon"></span>
                                            <h2 class="title_service"><a href="#">{{ __('messages.service_1') }}</a>
                                            </h2>
                                            <p class="short_desc">{{ __('messages.service_1_desc') }}</p>
                                            <a class="read_more" href="#">{{ __('messages.read_more') }} <i
                                                    class="icon-right-arrow-long"></i></a>
                                            <div class="bg_icon">
                                                <span class="icon icon-thumbs-up icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="service_post style_three">
                                    <div class="image_box">
                                        <img width="500" height="500"
                                            src="{{ asset('assets/images/service/service-image-5.jpg') }}"
                                            alt="img" />
                                    </div>
                                    <div class="text_box">
                                        <div class="text_box_inner">
                                            <span class="icon icon-thumbs-up icon"></span>
                                            <h2 class="title_service"><a href="#">{{ __('messages.service_2') }}</a>
                                            </h2>
                                            <p class="short_desc">{{ __('messages.service_2_desc') }}</p>
                                            <a class="read_more" href="#">{{ __('messages.read_more') }} <i
                                                    class="icon-right-arrow-long"></i></a>
                                            <div class="bg_icon">
                                                <span class="icon icon-thumbs-up icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="service_post style_three">
                                    <div class="image_box">
                                        <img width="500" height="500"
                                            src="{{ asset('assets/images/service/service-image-4.jpg') }}"
                                            alt="img" />
                                    </div>
                                    <div class="text_box">
                                        <div class="text_box_inner">
                                            <span class="icon icon-thumbs-up icon"></span>
                                            <h2 class="title_service"><a href="#">{{ __('messages.service_3') }}</a>
                                            </h2>
                                            <p class="short_desc">{{ __('messages.service_3_desc') }}</p>
                                            <a class="read_more" href="#">{{ __('messages.read_more') }} <i
                                                    class="icon-right-arrow-long"></i></a>
                                            <div class="bg_icon">
                                                <span class="icon icon-thumbs-up icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_60"></div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="pd_top_85"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                    <div class="image_boxes style_four">
                        <div class="image_box one">
                            <img src="{{ asset('assets/images/about/about-11.jpg') }}" class="img-fluid" alt="about" />
                        </div>
                        <div class="image_box">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('assets/images/about/about-3.jpg') }}"
                                            class="img-fluid one_img" alt="about" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('assets/images/about/about-4.jpg') }}"
                                            class="img-fluid one_img" alt="about" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image_content_inner viceo_en">
                            <h2>{{ __('messages.years_experience') }}</h2>
                            <div class="video_box_null">
                                <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                                    <i class="icon-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="pd_left_20">
                        <div class="pd_top_25"></div>
                        <div class="title_all_box style_three dark_color">
                            <div class="title_sections three left">
                                <div class="before_title">{{ __('messages.intelligent') }}</div>
                                <h2>{{ __('messages.leaders_appliance') }}</h2>
                                <p>{{ __('messages.about_description') }}</p>
                            </div>
                        </div>
                        <div class="mr_bottom_25"></div>
                        <div class="extra_content image_with_content dark_color">
                            <div class="simple_image">
                                <img src="{{ asset('assets/images/cuntry-1.png') }}" alt="img" />
                                <h2>{{ __('messages.since_1990') }}</h2>
                            </div>
                        </div>
                        <div class="mr_bottom_25"></div>
                        <div class="description_box">
                            <p>{{ __('messages.commitment') }}</p>
                        </div>
                        <div class="mr_bottom_25"></div>
                        <div class="row gutter_15px">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon_box_all style_two">
                                    <div class="icon_content icon_imgs">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon-img-n-1.png') }}"
                                                class="img-fluid svg_image" alt="icon" />
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="#">{{ __('messages.expert_service') }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="icon_box_all style_two">
                                    <div class="icon_content icon_imgs">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon-img-n-2.png') }}"
                                                class="img-fluid svg_image" alt="icon" />
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="#">{{ __('messages.affordable_rates') }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mr_bottom_30"></div>
                        <div class="theme_btn_all color_one">
                            <a href="#contact" class="theme-btn five">{{ __('messages.contact_us') }} <i
                                    class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_60"></div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">The Steps of</div>
                            <h2>Our Service Process</h2>
                            <p>We follow a systematic approach to ensure quality service delivery.</p>
                        </div>
                        <div class="pd_bottom_25"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-0 mb-xl-0">
                    <div class="process_box style_three dark_color">
                        <div class="process_box_outer_three left">
                            <div class="icon">
                                <div class="img">
                                    <img src="{{ asset('assets/images/service-ico-3.png') }}" class="img-fluid svg_image"
                                        alt="icon" />
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Diagnostic Assessment</a></h2>
                                <p>Thorough inspection and diagnosis of your appliance issue.</p>
                            </div>
                            <div class="number">
                                <h6>01</h6>
                            </div>
                        </div>
                    </div>
                    <div class="pd_top_30"></div>
                    <div class="divider_1"></div>
                    <div class="pd_bottom_40"></div>
                    <div class="process_box style_three dark_color">
                        <div class="process_box_outer_three left">
                            <div class="icon">
                                <div class="img">
                                    <img src="{{ asset('assets/images/process-icon-im-1.png') }}"
                                        class="img-fluid svg_image" alt="icon" />
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Repair Execution</a></h2>
                                <p>Professional repair using quality parts and techniques.</p>
                            </div>
                            <div class="number">
                                <h6>02</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-0 mb-xl-0">
                    <div class="image_boxes style_three border_yes">
                        <img src="{{ asset('assets/images/video-box-img-1.jpg') }}" class="background_image"
                            alt="image" />
                        <div class="video_box">
                            <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="process_box style_three dark_color">
                        <div class="process_box_outer_three right">
                            <div class="icon">
                                <div class="img">
                                    <img src="{{ asset('assets/images/service-ico-2.png') }}" class="img-fluid svg_image"
                                        alt="icon" />
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Quality Testing</a></h2>
                                <p>Comprehensive testing to ensure proper operation.</p>
                            </div>
                            <div class="number">
                                <h6>03</h6>
                            </div>
                        </div>
                    </div>
                    <div class="pd_top_30"></div>
                    <div class="divider_1"></div>
                    <div class="pd_bottom_40"></div>
                    <div class="process_box style_three dark_color">
                        <div class="process_box_outer_three right">
                            <div class="icon">
                                <div class="img">
                                    <img src="{{ asset('assets/images/process-icon-im-2.png') }}"
                                        class="img-fluid svg_image" alt="icon" />
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Customer Satisfaction</a></h2>
                                <p>Follow-up and warranty guarantee on all services.</p>
                            </div>
                            <div class="number">
                                <h6>04</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_75"></div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">Dedicated Team</div>
                            <h2>Professional Technicians</h2>
                        </div>
                        <div class="mr_bottom_30"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="team_box style_two">
                        <div class="team_box_outer">
                            <div class="image_box">
                                <img src="{{ asset('assets/images/team/team-1.jpg') }}" alt="team member" />
                                <div class="overlay">
                                    <a href="#" class="read_m">{{ __('messages.view_profile') }} <i
                                            class="icon-right-arrow"></i></a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">{{ __('messages.technician_one') }}</a></h2>
                                <p class="job_details">{{ __('messages.senior_technician') }}</p>
                                <p>{{ __('messages.tech_one_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="team_box style_two">
                        <div class="team_box_outer">
                            <div class="image_box">
                                <img src="{{ asset('assets/images/team/team-2.jpg') }}" alt="team member" />
                                <div class="overlay">
                                    <a href="#" class="read_m">{{ __('messages.view_profile') }} <i
                                            class="icon-right-arrow"></i></a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">{{ __('messages.technician_two') }}</a></h2>
                                <p class="job_details">{{ __('messages.commercial_specialist') }}</p>
                                <p>{{ __('messages.tech_two_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="team_box style_two">
                        <div class="team_box_outer">
                            <div class="image_box">
                                <img src="{{ asset('assets/images/team/team-3.png') }}" alt="team member" />
                                <div class="overlay">
                                    <a href="#" class="read_m">{{ __('messages.view_profile') }} <i
                                            class="icon-right-arrow"></i></a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box">
                                <h2><a href="#">{{ __('messages.technician_three') }}</a></h2>
                                <p class="job_details">{{ __('messages.installation_expert') }}</p>
                                <p>{{ __('messages.tech_three_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_70"></div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="pd_top_80"></div>
        <div class="container">
            <div class="row gutter_35px">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">{{ __('messages.find_out_our') }}</div>
                            <h2>{{ __('messages.latest_articles') }}</h2>
                        </div>
                        <div class="mr_bottom_25"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog_post_section three_column news_wrapper_grid style_five">
                        <div class="grid_show_case grid_layout clearfix">
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="#">{{ __('messages.post_comment') }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-clock-o"></span>
                                                    October 6, 2024
                                                </a>
                                            </li>
                                        </ul>
                                        <h2 class="title">
                                            <a href="#">{{ __('messages.maintenance_tips') }}</a>
                                        </h2>
                                        <p class="short_desc">{{ __('messages.maintenance_desc') }}</p>
                                        <a href="#" class="link__go">{{ __('messages.read_more') }} <i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="#">{{ __('messages.post_comment') }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-clock-o"></span>
                                                    October 8, 2024
                                                </a>
                                            </li>
                                        </ul>
                                        <h2 class="title">
                                            <a href="#">{{ __('messages.repair_vs_replace') }}</a>
                                        </h2>
                                        <p class="short_desc">{{ __('messages.repair_desc') }}</p>
                                        <a href="#" class="link__go">{{ __('messages.read_more') }} <i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="#">{{ __('messages.post_comment') }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-clock-o"></span>
                                                    October 10, 2024
                                                </a>
                                            </li>
                                        </ul>
                                        <h2 class="title">
                                            <a href="#">{{ __('messages.refrigerator_problems') }}</a>
                                        </h2>
                                        <p class="short_desc">{{ __('messages.fridge_desc') }}</p>
                                        <a href="#" class="link__go">{{ __('messages.read_more') }} <i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_60"></div>
    </section>
@endsection
