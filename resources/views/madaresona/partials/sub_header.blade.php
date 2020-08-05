<section class="section-image section-full-width-right light no-padding-top section-bottom-layer" style="top: 40px; background-image: url({{ asset('banner.jpg') }})">

    <div class="container" style="">

            <form action="{{ route('search', app()->getLocale()) }}" method="POST" id="searchForm">
            @csrf

        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 ">
                {{--<label for="validationDefaultUsername">Username</label>--}}
                <div class="input-group">

                    <div class="input-group-prepend" style="margin-right: 3px;">
                        <select name="search_select" class="form-control select-banner" id="search_select">
                            <option value="1">الإسم</option>
                            <option value="2">العنوان</option>
                            <option value="3">نوع المنهاج</option>
                            <option value="4">الرسوم</option>
                        </select>
                    </div>

                    <input type="text" name="search_text" id="search_text" class="form-control"
                           style="text-align: right; font-size: 14px; border: 0px; outline: 0px; width: 95%; margin-top: 10px;"
                           placeholder="بحث عن المدارس ورياض الأطفال">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-info" id="inputGroupPrepend2" style="top: 10px;"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <small class="form-text" style="font-size: 11px; text-align: right;font-weight: bold;color: #ffa276;">اكتشف المزيد من
                    المدارس ورياض
                    الأطفال، ومركز التدريب وأكثر من ذلك
                </small>
            </div>
            <div class="col-md-12 search-bar-banner"></div>
            <br>
            {{--/*****************************************/--}}
            <div class="col-md-5 location" style="display: none">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-12 form-group">
                        <select name="region_id" id="region_id" class="form-control select-banner" style="padding-left: 10px" disabled>
                            <option disabled selected>المنطقة</option>
                        </select>
                    </div>

                    <div class="col-md-3 order-1 order-md-12 form-group">
                        <select name="city_id" id="city_id" class="form-control select-banner">
                            <option disabled selected>المدينة</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->city_name_ar }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 order-0 order-md-12 form-group">
                        <select name="country" id="country" class="form-control select-banner">
                            <option value="1">الأردن</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-5 location" style="display: none"></div>

            {{--/*****************************************/--}}
            <div class="col-md-3 schoolType" style="display: none"></div>
            <div class="col-md-2 schoolType" style="display: none">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <select name="school_type" id="school_type" class="form-control select-banner">
                            <option selected disabled>نوع المنهاج</option>
                            <option value="0">محلي</option>
                            <option value="1">دولي</option>
                        </select>
                    </div>
                </div>
            </div>
            {{--/*****************************************/--}}

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3 order-2 schoolClass" style="display: none">
                        <input type="number" class="form-control" name="to_price" placeholder="إلى" style="text-align: right">
                    </div>
                    <div class="col-md-3 order-1 order-md-12 schoolClass" style="display: none">
                        <input type="number" class="form-control" name="from_price" placeholder="من" style="text-align: right">
                    </div>
                    <div class="col-md-4 order-0 order-md-12 schoolClass" style="display: none">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <select name="school_class" id="school_class" class="form-control select-banner">
                                    <option selected disabled>اختر الصف</option>
                                    @foreach($schoolClasses as $class)
                                        <option value="{{ $class->id }}">{{ $class->class_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--/*****************************************/--}}

        </div>
        </form>
    </div>

    <style>
        .bannerLogo{
            height: 256px;

        }
        .bannerLogoImg{
        }
        @media (max-width: 700px) {
            .bannerLogo{
                height: 40px;
            }

            .bannerLogoImg{
                bottom: 170px
            }
        }
    </style>

    <div class="row bannerLogo">
        <div class="col-md-12 bannerLogoImg">

        </div>
    </div>
    {{--<div class="row bannerLogo" >
        <div class="col-md-5"></div>
        <div class="col-md-6 bannerLogoImg">
            <img src="{{ asset('bannerLogo.png') }}" alt=""
                 data-mce-src="images/phone-wall.png">
        </div>
        <div class="col-md-1"></div>
    </div>--}}
    {{--<div class="row ">
        <div class='col-lg-6 col-md-6 col-sm-6  '>

            --}}{{--<hr class="space">
            <hr class="space-lg">
            <p><a class="btn btn-sm btn-circle shadow-1 full-width-sm" href="https://1.envato.market/Dmj52"
                  #f5f5f5 rel="noopener" data-mce-href="https://1.envato.market/Dmj52">Purchase
                    now</a><span class="space">&nbsp;</span> <a class="btn-text active scroll-to hidden-sm"
                                                                href="#demos" data-mce-href="#demos">View
                    demos</a></p>--}}{{--
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6'></div>
        --}}{{--<img class="width-min-900" src="{{ asset('assets/images/phone-walla5e7.png') }}" alt=""
                data-mce-src="images/phone-wall.png">--}}{{--
    </div>--}}
</section>
