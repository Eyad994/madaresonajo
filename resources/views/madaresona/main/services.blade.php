@extends('layouts.main')

@section('content')
    <section class="section-base section-color " id="services"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
        @else
            style="direction:ltr; text-align:left;">
        @endif

        <div class="container">
            <style>
                .img_services {
                    box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;
                    border: 2px solid #fff;
                    border-radius: 10px !important;
                    width: 500px;
                    height: 300px;
                }

                .title_header {
                    color: #1d556c;
                }
            </style>

            <div class="row ">
                <div class='col-lg-12 '>
                    <div class="row align-items-center"
                         style=" direction: {{(app()->getLocale() == 'ar') ? 'ltr':'rtl'}} ;">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><h2
                                    class="themekit-header title_header title_header">{{__('index.text_messages')}}</h2>
                            <p>{{__('index.services_ms1')}}</p>
                            <p>{{__('index.services_ms2')}}</p>
                            {{-- <a class="btn-text"
                                href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK"
                                #f5f5f5 rel="noopener"
                                data-mce-href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK">Check
                                 seo score</a>--}}</div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000"><img
                                    class="margin-23 img_services" src="{{ asset('assets/images/services_1.jpg') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.jpg"></div>
                    </div>
                    <hr class="space-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                            <img
                                    class="timer img_services"
                                    src="{{ asset('assets/images/services_3.jpg') }}"
                                    alt=""
                                    data-mce-src="images/intro/themekit.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 order-sm-first align-left-sm align-right" data-anima="fade-right"
                             data-time="1000"><h2
                                    class="themekit-header title_header">{{__('index.school_administration_systems')}}</h2>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class='col-lg-12  ' style="margin-top: 80px; ">
                    <div class="row align-items-center"
                         style=" direction: {{(app()->getLocale() == 'ar') ? 'ltr':'rtl'}} ;">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                            <h2 class="themekit-header title_header">{{__('index.website_design')}}</h2>
                            <p></p>
                        </div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000">
                            <img
                                    class="margin-23 img_services" src="{{ asset('assets/images/services_2.jpg') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.jpg"></div>
                    </div>
                    <hr class="space-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><img
                                    class="timer img_services"
                                    src="{{ asset('assets/images/services_4.jpg') }}"
                                    alt=""
                                    data-mce-src="images/intro/themekit.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 order-sm-first align-left-sm align-right" data-anima="fade-right"
                             data-time="1000"><h2 class="themekit-header title_header">{{__('index.social_media')}}</h2>
                            <p></p></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection