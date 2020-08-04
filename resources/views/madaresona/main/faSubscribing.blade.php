@extends('layouts.main')

@section('content')
    <section class="section-base section-color align-center">

        <style>
            .fa_services {
                font-size: 50px;
                margin: 30px 0px 0px 0px;
                color: #1d556c;
            }
        </style>

        <div class="container" id="subscribe_features"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
            @else
                style="direction:ltr; text-align:left;">
            @endif

            <h2 class="align-center" style="color: #ff6000; font-weight: bold;">{{__('index.subscribe_features')}}</h2>
            <p class="align-center width-700">{{__('index.subscribe_features_text')}}</p>
            <hr class="space"/>
            <div class="row ">
                <div class='col-lg-12  '>
                    <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-xs="1"
                         data-anima="fade-bottom" data-timeline="asc" data-time="1000" data-timeline-time="300">
                        <div class="grid-box">
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-ad fa_services"></i>
                                    <div class="caption"><h2>{{__('index.employment_ads')}}</h2>
                                        <p></p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-address-card fa_services"></i>
                                    <div class="caption"><h2>{{__('index.access_curriculum')}}</h2>
                                        <p></p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-sms fa_services"></i>
                                    <div class="caption"><h2>{{__('index.text_messages')}}</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-address-card fa_services"></i>
                                    <div class="caption"><h2>{{__('index.send_cvs')}}</h2>
                                        <p></p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-newspaper fa_services"></i>
                                    <div class="caption"><h2>{{__('index.news_activities')}}</h2>
                                        <p></p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center" style="height: 100%"><i
                                            class="fad fa-user-plus fa_services"></i>
                                    <div class="caption"><h2>{{__('index.Facilitate_students')}}</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection