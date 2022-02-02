<footer class="footer theme-bg">
    <div class="primary-footer">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div>
                        <h2 class="title">{{ __('messages.landing.subscribe_our_newsletter') }}</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-4">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="ajax-message"></div>
                    <div class="subscribe-form">
                        <form id="mc-form" class="group d-md-flex align-items-center" method="POST">
                            <input type="email" value="" name="email" class="email" id="email"
                                   placeholder="Enter Email Address" required>
                            <button class="btn btn-theme" type="submit" id="subscribeBtn">
                                <span>{{__('messages.landing.subscribe')}}</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo mb-3">
                        <img id="footer-logo-white-img" src="{{ getSuperAdminSettingValue('app_logo') }}"
                             class="img-fluid" alt="">
                    </div>
                    <p class="mb-0">{!! getSuperAdminSettingValue('footer_text') !!}</p>

                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <h4 class="mb-4 text-white">{{__('messages.landing.usefull_link')}}</h4>
                    <div class="footer-list justify-content-between d-flex">
                        <ul class="list-unstyled w-100">
                            <li><a href="{{ route('landing.home') }}">{{ __('messages.landing.home') }}</a>
                            </li>
                            <li><a href="{{ route('landing.about.us') }}">{{ __('messages.landing.about') }}</a>
                            </li>
                            <li><a href="{{ route('landing.services') }}">{{ __('messages.services') }}</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled w-100">
                            @if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin'))
                                <li><a href="{{ route('landing.pricing') }}">{{ __('messages.landing.pricing') }}</a>
                                </li>
                            @endif
                            <li><a href="{{ route('landing.contact.us') }}">{{ __('messages.enquiry.contact') }}</a>
                            </li>
                            <li><a href="{{ route('landing.faq') }}">{{ __('messages.landing.faqs') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                    <div class="footer-cntct">
                        <h4 class="mb-4 text-white">{{ __('messages.landing.get_in_touch') }}</h4>
                        <ul class="media-icon list-unstyled">
                            <li>
                                <p class="mb-0"><i class="la la-map-o"></i>
                                    <b>{{ getSuperAdminSettingValue('address') }}</b>
                                </p>
                            </li>
                            <li><i class="la la-envelope-o"></i> <a
                                        href="mailto:{{ getSuperAdminSettingValue('email') }}"><b>{{getSuperAdminSettingValue('email')}}</b></a>
                            </li>
                            <li><i class="la la-phone"></i> <a
                                        href="tel:{{getSuperAdminSettingValue('phone')}}"><b>{{ getSuperAdminSettingValue('phone') }}</b></a>
                            </li>
                        </ul>
                        <div class="social-icons mt-3">
                            <ul class="list-inline">
                                <li class="{{ empty(getSuperAdminSettingValue('facebook_url')) ? 'd-none' : ''}}"><a
                                            href="{{ getSuperAdminSettingValue('facebook_url') }}" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="{{ empty(getSuperAdminSettingValue('instagram_url')) ? 'd-none' : ''}}"><a
                                            href="{{ getSuperAdminSettingValue('instagram_url') }}"><i
                                                class="fab fa-instagram" target="_blank"></i></a>
                                </li>
                                <li class="{{ empty(getSuperAdminSettingValue('twitter_url')) ? 'd-none' : ''}}"><a
                                            href="{{ getSuperAdminSettingValue('twitter_url') }}"><i
                                                class="fab fa-twitter"
                                                target="_blank"></i></a>
                                </li>
                                <li class="{{ empty(getSuperAdminSettingValue('linkedin_url')) ? 'd-none' : ''}}"><a
                                            href="{{ getSuperAdminSettingValue('linkedin_url') }}"><i
                                                class="fab fa-linkedin-in" target="_blank"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer mt-5 text-center">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12">
                        <span>
                            {{ __('messages.web_menu.copyright') }} © {{ date('Y') }} <b>{{ getSuperAdminSettingValue('app_name') }}</b> | {{__('messages.landing.all_rights_reserved')}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
