@extends('layouts.main')

@section('content')
    <section class="section-base" style="margin-bottom: 20px; padding-top:100px ">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <div class=" fade-left" style="padding-top: 130px !important;direction: rtl;" id="schoolsGrid">
                    <div class="travelo-box clearfix">
                        <div class="form-group col-xs-12 col-md-9">
                            <div style=" width: 100%;text-align: right;color: #838383 "> {{__('index.search')}}</div>
                            <div class="with-icon full-width">
                                <input name="search_text" type="text"
                                       id="search_text" class="form-control"
                                       placeholder=" {{__('index.search_here')}} ">
                            </div>

                        </div>
                        <div class="form-group col-xs-8 col-md-3" style="padding-top: 20px;">
                            <label></label>
                            <a id="search_button"
                               class="button btn-medium dull-blue"
                               href="#">
                                <i class="soap-icon-search">&nbsp;</i>
                                {{__('index.search_here')}}</a>
                        </div>
                    </div>
                    <div class="car-list listing-style3 car" id="supplierGrid">

                        @foreach($suppliers as $supplier)
                            <article class="box">
                                <figure class="col-xs-3">
                                    <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}">
                                        <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}"
                                             style="height: 115px;width: 160px;">
                                    </a>
                                </figure>
                                <div class="details col-xs-9 clearfix">
                                    <div class="col-sm-6">
                                        <div class="clearfix">
                                            <h4 class="box-title">
                                                <a title="{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}"
                                                   href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}">
                                                    {{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}</a>
                                                <small style=" {{(app()->getLocale() == 'ar') ? 'text-align: right;':''}}">{{(app()->getLocale() == 'en')? $supplier->city->city_name_en :$supplier->city->city_name_ar}}
                                                    &nbsp;- {{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}</small>
                                            </h4>

                                        </div>
                                        <div class="amenities" style="text-align: right ">
                                            <ul>
                                                <li>
                                                    <a href="tel:{{ $supplier->phone }}" target="_blank">
                                                        <i style="cursor: pointer;"
                                                           class="soap-icon-phone circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}#Suppliers-Contacts-Tab"
                                                       target="_blank">
                                                        <i style="cursor: pointer;"
                                                           class="soap-icon-message circle"></i>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="{{ $supplier->website }}" target="_blank">
                                                        <i style="cursor: pointer;"
                                                           class="soap-icon-globe circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}#Suppliers-Contacts-Tab"
                                                       target="_blank">
                                                        <i style="cursor: pointer;"
                                                           class="soap-icon-departure circle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-4 character">
                                        <dl class="" style="text-align: right;">
                                            <dt class="skin-color">{{__('index.phone')}}</dt>
                                            <dd>{{$supplier->phone}}</dd>
                                            <dt class="skin-color">{{__('index.
                                            ')}}</dt>
                                            <dd>{{(app()->getLocale() == 'en') ?$supplier?->region?->area_name_en:$supplier?->region?->area_name_ar }}</dd>
                                            <dt class="skin-color" style="font-size: 9px;">{{__('index.email')}}</dt>
                                            <dd>{{ $supplier->email }}</dd>
                                        </dl>
                                    </div>
                                    <div class="action col-xs-6 col-sm-2">
                                        <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}"
                                           class="button btn-small yellow full-width"> {{__('index.read_more')}} </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>

                    @if($suppliersCount > 10)
                        <div class="col-md-12" style="text-align: center; ">
                            <h4 class="see-more btn btn-secondary" data-page="2" data-link="/ar/supplier/index?page="
                                data-div="#supplierGrid" style="width: 50%; margin-top: 20px">{{ __('show.more') }}</h4>
                        </div>
                    @endif
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
@endsection

{{--

@section('content')
    @include('modal')
@endsection
--}}

@section('script')

    <script>

        $(".see-more").click(function () {
            $div = $($(this).attr('data-div')); //div to append
            $link = $(this).attr('data-link'); //current URL

            $page = $(this).attr('data-page'); //get the next page #
            $href = $link + $page; //complete URL

            $.ajax({
                url: $href,
                method: 'get',
                success: function (response) {

                    $html = $(response).find("#supplierGrid").html();
                    $div.append($html);
                }
            });


            $(this).attr('data-page', (parseInt($page) + 1)); //update page #
        });

        $('#search_button').on('click', function () {
            var text = $('#search_text').val();
            $.ajax({
                type: 'get',
                url: '/ar/supplier_search/' + text,
                success: function (data) {
                    $('#supplierGrid').html(data);
                }
            })
        });


        $('#supplierType').on('change', function () {
            var id = $('#supplierType').val();
            $.ajax({
                type: 'get',
                url: '/ar/getSupplierType/' + id,
                success: function (data) {
                    $('#supplierGrid').html(data);
                }
            })

        })

    </script>

@endsection
