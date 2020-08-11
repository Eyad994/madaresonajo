@extends('layouts.main')
<style>
    .main-head {
        background: #1d556c;
        box-shadow: 0px 1px 10px -6px rgba(0, 0, 0, .15);
        padding: 1rem;
        margin-bottom: 0;
        margin-top: 5rem;
        color: #fff;
        font-weight: 500;
        text-transform: uppercase;
        border-radius: 4px;
        font-size: 16px;
    }

    .pricing-table {
        background: #fff;
        box-shadow: 0px 1px 10px -6px rgba(0, 0, 0, .15);
        padding: 2rem;
        border-radius: 4px;
        transition: .3s;
    }

    .pricing-table:hover {
        box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, .15);
    }

    .pricing-table .pricing-label {
        border-radius: 2px;
        padding: .25rem .5rem;
        margin-bottom: 1rem;
        display: inline-block;
        font-size: 12px;
        font-weight: 500;
    }

    .pricing-table h2 {
        color: #3b3b3b;
        font-size: 24px;
        font-weight: 500;
    }

    .pricing-table h5 {
        color: #B3B3B3;
        font-size: 14px;
        font-weight: 400;
    }

    .pricing-table .pricing-features {
        margin-top: 2rem;
        height: 320px;
    }

    .pricing-table .pricing-features .feature {
        font-size: 14px;
        margin: .5rem 0;
        color: #B3B3B3;
    }

    .pricing-table .pricing-features .feature span {
        display: inline-block;
        float: right;
        color: #3b3b3b;
        font-weight: 500;
    }

    .pricing-table 	.price-tag {
        margin-top: 2rem;
        text-align: center;
        font-weight: 500;
    }

    .pricing-table .price-tag .symbol {
        font-size: 24px;
    }

    .pricing-table .price-tag .amount {
        letter-spacing: -2px;
        font-size: 64px;
    }

    .pricing-table .price-tag .after {
        color: #3b3b3b;
        font-weight: 500;
    }

    .pricing-table .price-button {
        display: block;
        color: #fff;
        margin-top: 2rem;
        padding: .75rem;
        border-radius: 2px;
        text-align: center;
        font-weight: 500;
        transition: .3s;
    }

    .pricing-table .price-button:hover {
        text-decoration: none;
    }

    .purple .pricing-label {
        background: #ff7f27;
        color: #ffffff;
    }

    .purple .price-tag {
        color: #627afe;
    }

    .purple .price-button {
        background: #1d556c;
    }

    .purple .price-button:hover {
        background: #ff7f27;
    }

    .turquoise .pricing-label {
        background: #ff7f27;
        color: #ffffff;
    }

    .turquoise .price-tag {
        color: #44cdd2;
    }

    .turquoise .price-button {
        background: #1d556c;
    }

    .turquoise .price-button:hover {
        background: #1d556c;
    }

    .red .pricing-label {
        background: #ffc4c4;
        color: #ff5e5e;
    }

    .red .price-tag {
        color: #ff5e5e;
    }

    .red .price-button {
        background: #ff5e5e;
    }

    .red .price-button:hover {
        background: #f23c3c;
    }
</style>

@section('content')

    <div class="container"
         @if((app()->getLocale() == 'ar'))
         style="direction: rtl; text-align: right;margin-top: 200px; margin-bottom: 200px;"
        @else
            style="direction:ltr; text-align:left;margin-top: 200px;  margin-bottom: 200px;">
        @endif
        >
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3 class="main-head" style="text-align: center;">{{ __('pricing_index.pricing_text') }} </h3>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="pricing-table turquoise flex-column">
                    <!-- Table Head -->
                    <div class="pricing-label">تجريبي</div>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature">{{ __('pricing_index.number_users') }} : 1</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 1</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }}</div>

                    </div>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol"></span>
                        <span class="amount"></span>
                        <span class="after"></span>
                    </div>
                    <!-- Button -->
                    <a class="price-button"  href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="pricing-table turquoise flex-column">
                    <!-- Table Head -->
                    <div class="pricing-label">اساسي</div>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 2</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.send_cv') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.edit_information_profile_school') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.send_school_profile') }}</div>
                    </div>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol"></span>
                        <span class="amount"></span>
                        <span class="after"></span>
                    </div>
                    <!-- Button -->
                    <a class="price-button" href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="pricing-table purple flex-column">
                    <!-- Table Head -->
                    <div class="pricing-label">متقدم</div>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 2</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.send_cv') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.edit_information_profile_school') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }}</div>
                        <div class="feature"><i class="fa fa-check"></i>{{ __('pricing_index.send_school_profile') }}</div>
                    </div>

                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol"></span>
                        <span class="amount"></span>
                        <span class="after"></span>
                    </div>
                    <!-- Button -->
                    <a class="price-button" href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                </div>
            </div>

        </div>
    </div>

    {{--<div class="container" >
        <section class="price-sec"
                 @if((app()->getLocale() == 'ar'))
                 style="direction: rtl; text-align: right;margin-bottom: 200px;">
            @else
                style="direction:ltr; text-align:left;margin-bottom: 200px;">
            @endif
            <div class="container-fluid">
                <div class="container" style=" margin-top: 100px;">
                    <div class="row ptables-head">
                        <h3 class="text-center" style="margin: 0 auto; font-weight: 600; width: 800px;">{{ __('pricing_index.pricing_text') }}</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 price-table">
                            <div class="card text-center" style=" height: 100%;">
                                <div class="title">
                                    <i class="fa fa-paper-plane" style="color: #f660015e;"></i>
                                    <h2>تجريبي</h2>
                                </div>
                                --}}{{-- <div class="price">
                                    <h4><sup>$</sup>500</h4>
                                </div>--}}{{--
                                <div class="option">
                                    <ul>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 1</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.send_cv') }}</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }} </li>
                                        <li style="margin-bottom: 68px;"><i class="fa fa-check"></i>{{ __('pricing_index.send_school_profile') }} </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                            </div>
                        </div>
                        <!-- (1) ===================================-->
                        <div class="col-sm-4 price-table">
                            <div class="card text-center">
                                <div class="title">
                                    <i class="fa fa-plane" style="color: #f6600199;"></i>
                                    <h2>اساسي</h2>
                                </div>
                                <div class="option">
                                    <ul>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 2</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.send_cv') }}</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.edit_information_profile_school') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.send_school_profile') }} </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                            </div>
                        </div>
                        <!-- (2) ===================================-->
                        <div class="col-sm-4 price-table">
                            <div class="card text-center">
                                <div class="title">
                                    <i class="fa fa-rocket" style="color: #f66001;"></i>
                                    <h2>متقدم</h2>
                                </div>

                                <div class="option">
                                    <ul>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.number_users') }} : 2</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.advertisement_employment') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.send_cv') }}</li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.daily_activities') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.edit_information_profile_school') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.facilitate_new_students') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.entry_teachers') }} </li>
                                        <li><i class="fa fa-check"></i>{{ __('pricing_index.send_school_profile') }} </li>
                                    </ul>
                                </div>
                                <a href="{{ route('contactUs', app()->getLocale()) }}">{{ __('pricing_index.click_here') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>--}}
@endsection