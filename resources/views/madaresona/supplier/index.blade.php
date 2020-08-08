@extends('layouts.main')
<section class="section-base" style="margin-bottom: 20px; padding-top:100px ">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
            <div class=" fade-left" style="padding-top: 130px !important;direction: rtl;" id="schoolsGrid">
                <div class="travelo-box clearfix">
                    <div class="form-group col-xs-12 col-md-9">
                        <div style=" width: 100%;text-align: right;color: #838383 ">البحث </div>
                        <div class="with-icon full-width">
                            <input name="ctl00$ContentPlaceHolder1$txtBuyerProductsName" type="text"
                                   id="ctl00_ContentPlaceHolder1_txtBuyerProductsName" class="input-text full-width"
                                   placeholder=" ابحث هنا ">
                        </div>

                    </div>
                    <div class="form-group col-xs-8 col-md-3" style="padding-top: 20px;">
                        <label>&nbsp;</label>
                        <a id="ctl00_ContentPlaceHolder1_btnsearch" usesubmitbehavior="true"
                           class="button btn-medium dull-blue"
                           href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$btnsearch','')">
                            <i class="soap-icon-search">&nbsp;</i>
                            بحث</a>
                    </div>
                </div>
                <div class="car-list listing-style3 car">

                    @foreach($suppliers as $supplier)
                        <article class="box">
                            <figure class="col-xs-3">
                                <a title="Abu Moujeh Engineering and Construction"
                                   href="SuppliersDetails.aspx?opc_id=465 ">
                                    <img src="{{ env('IMAGE_URL') }}{{--https://dashboard.madaresonajo.com/images/Talayie Alhema Islamic Academy/1593673338.png--}}"
                                         style="height: 115px;width: 160px;">
                                </a>
                            </figure>
                            <div class="details col-xs-9 clearfix">
                                <div class="col-sm-8">
                                    <div class="clearfix">
                                        <h4 class="box-title">
                                            <a title="{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}"
                                               href="# ">{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}</a>
                                            <small>{{(app()->getLocale() == 'en')? $supplier->city->city_name_en :$supplier->city->city_name_ar}}&nbsp;- {{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}</small>
                                        </h4>

                                    </div>
                                    <div class="amenities" style="text-align: right ">
                                        <ul>
                                            <li>
                                                <a href="tel:00962799919542" target="_blank">
                                                    <i style="cursor: pointer;padding: 6px"
                                                       class="soap-icon-phone circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="SuppliersDetails.aspx?opc_id=465#Suppliers-Contacts-Tab"
                                                   target="_blank">
                                                    <i style="cursor: pointer;padding: 6px"
                                                       class="soap-icon-message circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.abu-moujeh.com" target="_blank">
                                                    <i style="cursor: pointer;padding: 6px"
                                                       class="soap-icon-globe circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="SuppliersDetails.aspx?opc_id=465" target="_blank">
                                                    <i style="cursor: pointer;padding: 6px"
                                                       class="soap-icon-departure circle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-2 character">
                                    <dl class="" style="text-align: right;">
                                        {{--<dt class="skin-color">الشخص المسؤول</dt>
                                        <dd>م. مهند ابوموجة</dd>--}}
                                        <dt class="skin-color">الهاتف</dt>
                                        <dd>{{$supplier->phone}}</dd>
                                        <dt class="skin-color">المنطقة</dt>
                                        <dd>{{(app()->getLocale() == 'en') ?$supplier->region->area_name_en:$supplier->region->area_name_ar }}</dd>
                                        <dt class="skin-color" style="font-size: 9px;">البريد الالكتروني</dt>
                                        <dd>asd@asd.com</dd>
                                    </dl>
                                </div>
                                <div class="action col-xs-6 col-sm-2">
                                    <a href="{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}"
                                       class="button btn-small yellow full-width"> اقرأ المزيد </a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="col-md-2" style="padding-top: 130px">
            <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                <div class="search-results-titlehome"
                     style="text-align: center;float: right;width: 100%;">{{ __('index.products_services') }}</div>
                <div
                        @if((app()->getLocale() == 'ar'))
                        style="direction: rtl; text-align: right;padding: 10px;padding-top: 80px;"
                        @else
                        style="direction:ltr; text-align:left;padding: 10px;padding-top: 80px;"
                        @endif
                >
                    <select name="supplierType" id="supplierType" class="form-control"
                            style="font-size: 15px;padding:0px 10px;">
                        <option style="color: #000; font-weight: bold;" disabled
                                selected>{{ __('index.products_services') }}</option>
                        <option value="0">{{ app()->getLocale() == 'ar' ? 'الكل' : 'All' }}</option>
                        @foreach($suppliersType as $type)
                            <option value="{{ $type->id }}">{{ (app()->getLocale() == 'en') ? $type->name_en :  $type->name_ar}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @include('ads')
        </div>
        <div class="col-md-2">
        </div>
    </div>
</section>



@section('content')
    @include('modal')
@endsection
