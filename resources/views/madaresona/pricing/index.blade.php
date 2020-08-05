@extends('layouts.main')

<style>
    .price-sec {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding: 100px 0px;
    }

    .price-sec .ptables-head {
        font-family: 'Domine', serif;
        box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.3);
        padding: 30px 0;
        margin: 0px 0px 100px 0px;
        border-radius: 15px;
        background: linear-gradient(25deg, #1d556c 15%, transparent 0%),
        linear-gradient(-25deg, #ff6000 15%, transparent 0%),
        linear-gradient(-150deg, #1d556c 15%, transparent 0%),
        linear-gradient(150deg, #ff6000 15%, transparent 0%);

    }

    @media all and (max-width: 600px) {
        .ptables-head h1 {
            font-size: 30px;
        }
    }


    .price-sec .price-table {
        margin: 5px 0px;
    }

    .price-sec .price-table .card {
        position: relative;
        max-width: 330px;
        height: auto;
        background: #f5f5f5;
        border-radius: 15px;
        margin: 0 auto;
        padding: 40px 20px;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;
        transition: .5s;
        overflow: hidden;
    }

    .price-sec .price-table .card:hover {
        transform: scale(1.1);
    }

    .price-table:nth-child(1) .card,
    .price-table:nth-child(1) .card .title i {
        background: #f5f5f5;

    }

    .price-table:nth-child(2) .card,
    .price-table:nth-child(2) .card .title i {
        background:#f5f5f5;

    }

    .price-table:nth-child(3) .card,
    .price-table:nth-child(3) .card .title i {
        background: #f5f5f5;

    }

    .price-table .card:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: rgba(255, 255, 255, .1);
        z-index: 1;
        transform: skewY(-5deg) scale(1.5);

    }

    .price-table .title i {
        color: #000;
        font-size: 60px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        text-align: center;
        line-height: 100px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, .2)
    }

    .price-table .title h2 {
        position: relative;
        margin: 20px 0 0;
        padding: 0;
        color: #000;
        font-weight: bold;
        font-size: 28px;
        z-index: 2;
    }

    .price-table .price {
        position: relative;
        z-index: 2;
    }

    .price-table .price h4 {
        margin: 0;
        padding: 20px 0;
        color: #000;
        font-size: 60px;

    }

    .option {
        position: relative;
        z-index: 2;
    }

    .option ul {
        margin: 0;
        padding: 0;

    }

    .option ul li {
        margin: 0 0 10px;
        padding: 0px 15px;
        list-style: none;
        color: #000;
        font-size: 16px;
    }

    .card a {
        position: relative;
        font-weight: bold;
        z-index: 2;
        background: #1e546b;
        color: #fff;
        width: 150px;
        height: 40px;
        line-height: 40px;
        display: block;
        text-align: center;
        margin: 20px auto 0;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        border-radius: 40px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

    }

    .card a:hover {
        text-decoration: none;
        background: #f66001;
        color:#1e546b;
    }
</style>
@section('content')

    <div class="container" >
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
                                {{-- <div class="price">
                                    <h4><sup>$</sup>500</h4>
                                </div>--}}
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
    </div>
@endsection