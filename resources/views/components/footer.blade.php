<div class="footer_area footer_four bg_dark_3">
    <div class="pd_top_80"></div>
    <div class="footer_widgets_wrap">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                    <div class="footer_contact_form light_c type_one">
                        <div class="form_box_foo">
                            <h2>{{ __('messages.contact_us') }}</h2>
                            <div class="contact_form_shortcode">
                                <form method="POST" action="#">
                                    @csrf
                                    <p>
                                        <label>
                                            <span class="wpcf7-form-control-wrap" data-name="name">
                                                <input type="text" name="name" value="" size="40"
                                                    required placeholder="{{ __('messages.enter_your_name') }}" />
                                            </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <span class="wpcf7-form-control-wrap" data-name="email">
                                                <input type="email" name="email" value="" size="40"
                                                    required placeholder="{{ __('messages.enter_your_mail') }}" />
                                            </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <span class="wpcf7-form-control-wrap" data-name="subject">
                                                <input type="text" name="subject" value="" size="40"
                                                    required placeholder="{{ __('messages.enter_your_subject') }}" />
                                            </span>
                                        </label>
                                    </p>
                                    <p>
                                        <input type="submit" value="{{ __('messages.submit') }}"
                                            class="wpcf7-submit" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                    <div class="pd_top_30"></div>
                    <div class="footer_widgets wid_tit style_two">
                        <div class="fo_wid_title">
                            <h2>{{ __('messages.informations') }}</h2>
                        </div>
                    </div>
                    <div class="footer_widgets clearfix navigation_foo light_color style_three">
                        <div class="navigation_foo_box">
                            <div class="navigation_foo_inner">
                                <div class="left">
                                    <ul>
                                        <li><a href="#">{{ __('messages.how_it_works') }}</a></li>
                                        <li><a href="#">{{ __('messages.partners') }}</a></li>
                                        <li><a href="#">{{ __('messages.testimonials') }}</a></li>
                                        <li><a href="#">{{ __('messages.key_areas') }}</a></li>
                                        <li><a href="#">{{ __('messages.case_studies') }}</a></li>
                                        <li><a href="#">{{ __('messages.pricing') }}</a></li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#">{{ __('messages.careers') }}</a></li>
                                        <li><a href="#">{{ __('messages.infrastructure') }}</a></li>
                                        <li><a href="#">{{ __('messages.client_support') }}</a></li>
                                        <li><a href="#">{{ __('messages.privacy_policy') }}</a></li>
                                        <li><a href="#">{{ __('messages.terms_of_use') }}</a></li>
                                        <li><a href="#">{{ __('messages.sitemap') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="pd_top_30"></div>
                    <div class="footer_widgets wid_tit style_two">
                        <div class="fo_wid_title">
                            <h2>{{ __('messages.subscribe_us') }}</h2>
                        </div>
                    </div>
                    <div class="footer_widgets foo_subscribe light_color style_one">
                        <div class="item_subscribe with_text">
                            <p>{{ __('messages.subscribe_desc') }}</p>
                            <div class="shortcodes">
                                <form method="post" data-name="Subscribe">
                                    @csrf
                                    <div class="mc4wp-form-fields">
                                        <input type="email" name="email"
                                            placeholder="{{ __('messages.email_address') }}" required />
                                        <input type="submit" value="{{ __('messages.sign_up') }}" />
                                    </div>
                                </form>
                            </div>
                            <p>* {{ __('messages.email_not_shared') }}</p>
                        </div>
                    </div>
                    <div class="social_media_v_one">
                        <ul>
                            <li><a href="#"><span
                                        class="fa fa-facebook"></span><small>{{ __('messages.facebook') }}</small></a>
                            </li>
                            <li><a href="#"><span
                                        class="fa fa-twitter"></span><small>{{ __('messages.twitter') }}</small></a>
                            </li>
                            <li><a href="#"><span
                                        class="fa fa-skype"></span><small>{{ __('messages.skype') }}</small></a></li>
                            <li><a href="#"><span
                                        class="fa fa-instagram"></span><small>{{ __('messages.instagram') }}</small></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_70"></div>
    <div class="footer-copyright bg_dark_1">
        <div class="pd_top_15"></div>
        <div class="auto-container">
            <div class="footer_copy_right style_two">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-2 mb-lg-0 mb-xl-0">
                        <div class="footer_copy_content color_white">
                            © 2024 <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                                class="color_white">{{ __('messages.company_name') }}.</a>
                            {{ __('messages.all_rights_reserved') }}.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="footer_copy_content_right text-md-end">
                            <div class="nav_link_v_one">
                                <ul>
                                    <li><a href="#" class="color_white">{{ __('messages.terms_of_use') }}</a>
                                    </li>
                                    <li><a href="#" class="color_white">{{ __('messages.support') }}</a></li>
                                    <li><a href="#" class="color_white">{{ __('messages.private_policy') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd_bottom_10"></div>
    </div>
</div>
