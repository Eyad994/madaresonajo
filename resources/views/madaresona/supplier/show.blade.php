@extends('layouts.main')
<head>
    <title>{{$supplier->name_ar }} | {{$supplier->name_en }}</title>
    <meta property="og:title"         content="{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}" />
    <meta property="og:image"         content="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}" />
    <meta property="og:image:width"   content="300">
    <meta property="og:image:height"  content="200">
</head>


<section class="section-base" style="margin-bottom: 20px; padding-top:170px; background-color: #f5f5f5; ">
    @php $dir = (app()->getLocale() == 'ar') ?"direction: rtl;":"direction: ltr;" @endphp
    <div class="container" style="{{$dir}}">
        <div class="row">
            <div id="main" class="col-md-9">
                <div id="cruise-features" class="tab-container">
                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                    @endif
                    <ul class="tabs">

                        <li id="Suppliers-Overview-li" class="active"><a href="#Suppliers-Overview-Tab"
                                                                         data-toggle="tab">{{__('index.general_information')}}</a></li>

                        <li id="Suppliers-Contacts-li"><a href="#Suppliers-Contacts-Tab" data-toggle="tab"> {{__('index.conversation_supplier')}}</a></li>
                        <li id="Suppliers-Products-li"><a href="#Suppliers-Products-Tab" data-toggle="tab">{{__('index.products')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="Suppliers-Overview-Tab">
                            <h4 id="ctl00_ContentPlaceHolder1_bCompanyNAme" class="box-title"
                                style="text-align: right;font-size: 20px;font-weight: bold;">
                                {{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}
                            </h4>

                            <hr style="margin: 20px 0">
                            <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                <article class="image-box box cruise listing-style1 photo table-cell col-sm-4">
                                    <figure>
                                        <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}"
                                             id="ctl00_ContentPlaceHolder1_imgLogoCompany" width="270" height="160"
                                             style="margin: 5px; max-width: 270px; ">
                                    </figure>

                                    <div class="details">
                                        <small><i class="soap-icon-places"></i>&nbsp;<span
                                                    id="ctl00_ContentPlaceHolder1_bCountry"> {{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}</span>
                                        </small>
                                        ،
                                        &nbsp;
                                        <small><i class="soap-icon-departure"></i>&nbsp;<span
                                                    id="ctl00_ContentPlaceHolder1_bCity">{{(app()->getLocale() == 'en')? $supplier->city->city_name_en :$supplier->city->city_name_ar}}</span>
                                        </small>


                                        {{--<div class="feedback">
                                            <div title="" class="five-stars-container" data-toggle="tooltip" data-placement="bottom" data-original-title="4 stars"><span class="five-stars" style="width: 91%;"></span></div>
                                            <span class="review"><b>270</b> التقييمات</span>
                                        </div>--}}
                                    </div>

                                    <a href="#Suppliers-Contacts-Tab" onclick="TapActive()" data-toggle="tab"
                                       class="goto-writereview-pane button green btn-small full-width">{{__('index.conversation_supplier')}}</a>

                                    <div class="clerar">
                                        <br>
                                    </div>
                                    <ul class="social-icons full-width">
                                        <li class="facebook"><a style="padding-top: 7px"
                                                                href="{{$supplier->facebook_link}}"
                                                                id="ctl00_ContentPlaceHolder1_txtfacebooklink" title=""
                                                                target="_blank" data-toggle="tooltip"
                                                                data-original-title="facebook"><i
                                                        class="soap-icon-facebook"></i></a></li>
                                        <li class="twitter"><a style="padding-top: 7px"
                                                               href="{{$supplier->twitter_link}}"
                                                               id="ctl00_ContentPlaceHolder1_txttwitterlink" title=""
                                                               target="_blank" data-toggle="tooltip"
                                                               data-original-title="twitter"><i
                                                        class="soap-icon-twitter"></i></a></li>
                                        <li class="linkedin"><a style="padding-top: 7px"
                                                                href="{{$supplier->instagram_link}}"
                                                                id="ctl00_ContentPlaceHolder1_txtInstegramlink" title=""
                                                                target="_blank" data-toggle="tooltip"
                                                                data-original-title="instagram"><i
                                                        class="soap-icon-instagram"></i></a></li>
                                        <li class="linkedin"><a style="padding-top: 7px"
                                                                href="{{$supplier->linkedin_link}}"
                                                                id="ctl00_ContentPlaceHolder1_txtLinkedinlink" title=""
                                                                target="_blank" data-toggle="tooltip"
                                                                data-original-title="linkedin"><i
                                                        class="soap-icon-linkedin"></i></a></li>
                                        <li class="googleplus"><a style="padding-top: 7px"
                                                                  href="{{$supplier->googleplus_link}}"
                                                                  id="ctl00_ContentPlaceHolder1_txtGooglePluselink"
                                                                  title="" target="_blank" data-toggle="tooltip"
                                                                  data-original-title="googleplus"><i
                                                        class="soap-icon-googleplus"></i></a></li>

                                    </ul>

                                </article>
                                <div class="table-cell col-sm-8">


                                    <div class="travelo-box contact-us-box">

                                        <ul class="contact-address">
                                            @if(!empty($supplier->location))
                                                <li class="address" style="padding-top: 0px;text-align: right">
                                                    <i class="soap-icon-address circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">{{__('index.address')}}</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bAddress">{{$supplier->location}}</p>
                                                </li>
                                            @endif
                                            @if(!empty($supplier->phone))
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-address circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">
                                                        {{__('index.phone')}}</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bPhone">{{$supplier->phone}}</p>
                                                </li>
                                            @endif
                                            @if(!empty($supplier->fax))
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-phone circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">{{__('index.fax')}}</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bFax">{{$supplier->fax}}</p>
                                                </li>
                                            @endif
                                            @if(!empty($supplier->mobile))
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-phone circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">{{__('index.phone2')}}</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bMobile">{{$supplier->mobile}}</p>
                                                </li>
                                            @endif
                                            @if(!empty($supplier->email))
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-message circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">{{__('index.email')}}</h5>

                                                    <p id="ctl00_ContentPlaceHolder1_bEmail">{{$supplier->email}}</p>
                                                </li>
                                            @endif
                                            @if(!empty($supplier->website))
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-globe circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">{{__('index.website')}}</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bWebsite">{{$supplier->website}}</p>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="long-description" style="direction: rtl;text-align: right;">
                                <h4 style="font-weight: bold">{{__('index.overview')}}</h4>
                                <p id="ctl00_ContentPlaceHolder1_bDeitiles"
                                   style="text-align: justify;margin-top: 0px">{!!(app()->getLocale() == 'ar') ?$supplier->supplier_details_ar :$supplier->supplier_details_en !!}</p>
                            </div>
                            <div style="width: 100%">
                                <h4 style="font-weight: bold;text-align: right">{{__('index.products_services')}}</h4>
                                @foreach($supplierServices as $supplierService)
                                    <span class="info-success"
                                          style="float: right;margin-right: 10px;margin-top: 5px;    padding: 5px;">{{ $supplierService->name_ar }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="Suppliers-Contacts-Tab">
                            <form action="{{ route('storeSupplier', app()->getLocale()) }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ $supplier->id }}">
                                <div class="booking-section">

                                    <div class="person-information" style="text-align: right;">
                                        <h2>{{__('index.tex100')}}</h2>
                                        <hr style="margin: 20px 0">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-5">
                                                <span>{{__('index.name')}}</span>
                                                <span id="name" class="errorlbl pull-right"
                                                      style="color:Red;visibility:hidden;">{{__('index.required_field')}}</span>
                                                <input name="name" type="text" id="ctl00_ContentPlaceHolder1_txtName"
                                                       class="form-control">


                                            </div>
                                            <div class="col-sm-6 col-md-5">
                                                <span>{{__('index.email')}}</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1"
                                                      class="errorlbl pull-right" style="color:Red;visibility:hidden;">{{__('index.required_field')}}</span>
                                                <input name="email" type="text" id="email" class="form-control">
                                                <span id="ctl00_ContentPlaceHolder1_RegularExpressionValidator1"
                                                      class="errorlbl" style="color:Red;visibility:hidden;">{{__('index.email')}}  {{__('index.incorrect')}}  </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <span>{{__('index.topic')}}</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2"
                                                      class="errorlbl pull-right" style="color:Red;visibility:hidden;">{{__('index.required_field')}}</span>
                                                <input name="subject" type="text" id="subject" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-hotel">
                                        <div class="form-group row">
                                            <div class="col-md-10" style="text-align: right">
                                                <span>{{__('index.message_content')}}</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3"
                                                      class="errorlbl pull-right" style="color:Red;visibility:hidden;">{{__('index.required_field')}}</span>
                                                <textarea name="message" rows="10" cols="20" id="subject_text"
                                                          class="form-control"></textarea>
                                                <small>{{__('index.maximum_characters')}}</small>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{--<div class="form-group row">
                                        <div class="full-width">
                                            <div class="col-md-10">
                                                <div id="reCAPTCHA"><div><iframe src="https://www.google.com/recaptcha/api/fallback?k=6LeIpgYTAAAAAAZVDRQrOnglSzeFOjQReY4uChZZ&amp;hl=ar&amp;v=IU7gZ7o6RDdDE6U4Y1YJJWnN&amp;t=40016" frameborder="0" scrolling="no" style="width: 302px; height: 422px;"></iframe><div style="margin: -4px 0px 0px; padding: 0px; background: rgb(249, 249, 249); border: 1px solid rgb(193, 193, 193); border-radius: 3px; height: 60px; width: 300px;"><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: block;"></textarea></div></div></div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="form-group row" style="text-align: right">
                                        <div class="full-width">
                                            <button style="color: white;" type="submit"
                                                    class="button btn-large dull-blue">
                                                <i class="soap-icon-recommend">&nbsp;</i>
                                                {{__('index.send')}}
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Suppliers-Products-Tab">
                            <div class="booking-section">
                                <div class="person-information" style="text-align: right;">
                                    <h2>{{__('index.products')}}</h2>
                                    <hr style="margin: 20px 0">

                                    <style>
                                        img.mfp-img {
                                            max-height: 700px !important;
                                        }
                                    </style>
                                    <div class="tz-gallery">

                                        <div class="row">

                                            @foreach($galleries as $gallery)
                                                <div class="col-sm-6 col-md-4">
                                                    <a class="lightbox"
                                                       href="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/gallery/{{ $gallery->img }}">
                                                        <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/gallery/{{ $gallery->img }}" style="height: 200px;"
                                                             alt="Tunnel">
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-md-3">
                @if(count($relatedSuppliers) > 0)
                    <div id="ctl00_ContentPlaceHolder1_rslist" class="travelo-box" style="margin-top: 70px;">
                        <div class="box-title">
                            <div class="image-box style14" style="text-align: right">
                                <h4>{{__('index.related_companies')}}</h4>
                                @foreach($relatedSuppliers as $relatedSupplier)
                                    <article class="box" >
                                        <figure class="animated flipInX" data-animation-type="flipInX"
                                                style="animation-duration: 1s; visibility: visible;">
                                            <a title="{{ $relatedSupplier->name_ar }}" target="_blank" href="/{{ app()->getLocale() }}/supplier/data/{{$relatedSupplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($relatedSupplier->name_en) : trim($relatedSupplier->name_ar)) }}">
                                                <img style="border: 1px solid #bebebe;width: 63px;height: 59px" src="{{ env('IMAGE_URL') }}/images/{{ $relatedSupplier->name_en }}/{{ $relatedSupplier->supplier_logo }}">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6 class="box-title">
                                                <a style="color: #000;"
                                                   href="/{{ app()->getLocale() }}/supplier/data/{{$relatedSupplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($relatedSupplier->name_en) : trim($relatedSupplier->name_ar)) }}"
                                                   title="{{ $relatedSupplier->name_ar }}">{{ $relatedSupplier->name_ar }}</a>
                                                <br>
                                                <small>{{(app()->getLocale() == 'en')? $relatedSupplier->city->city_name_en :$relatedSupplier->city->city_name_ar}} ، {{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}</small>

                                            </h6>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                @include('ads')

            </div>
        </div>
    </div>
</section>

