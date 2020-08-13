<div>
    <div class="section-image section-full-width-right light no-padding-top section-bottom-layer"
             style="top: 40px; background-image: url({{ asset('banner.jpg') }});height:350px;margin-top: 100px; margin-right: 0; ">

        <div class=""
             style="{{(app()->getLocale()) == 'ar'?'margin-right: 0px; padding: 20px;direction: rtl;padding-left: 50px;':'margin-left: 0px; padding: 20px;direction: lrt;'}}">

            <form action="{{ route('search', app()->getLocale()) }}" method="POST" id="searchForm">
                @csrf

                <div class="row" style="padding-top: 100px">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div style="width: 20%;float: right">
                            <div class="input-group-prepend" style="margin-right: 3px;">
                                <select name="search_select" class="form-control select-banner" id="search_select"
                                        style="border-radius: 0px 5px 5px 0px;">
                                    <option value="1">الإسم</option>
                                    <option value="2">العنوان</option>
                                    <option value="3">نوع المنهاج</option>
                                    <option value="4">الرسوم</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group" style="direction: rtl;width: 80%">
                            <input type="text" name="search_text" id="search_text" class="form-control"
                                   placeholder="بحث عن المدارس ورياض الأطفال"
                                   style="border-radius: 0px;margin-right: -1px;">
                            <div class="input-group-btn">
                                <button class="btn btn-default" disabled="" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 search-bar-banner"></div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-8 location" style="display: none"></div>
                    <div class="col-md-4 location" style="display: none ;">
                        <div class="row" style="padding: 0px 20px">
                            <div class="order-0 order-md-12 form-group" style="width: 20%;">
                                <select name="country" id="country" class="form-control select-banner"
                                        style="border-radius: 0px 5px 5px 0px;">
                                    <option value="1">الأردن</option>
                                </select>
                            </div>
                            <div class="order-1 order-md-12 form-group" style="width: 30%; ">
                                <select name="city_id" id="city_id" class="form-control select-banner"
                                        style="border-radius:0px!important;">
                                    <option disabled selected>المدينة</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city_name_ar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="order-2 order-md-12 form-group" style="width: 50%;">
                                <select name="region_id" id="region_id" class="form-control select-banner"
                                        style="padding-left: 10px;border-radius: 5px 0px 0px 5px !important;" disabled>
                                    <option disabled selected>المنطقة</option>
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8 schoolType" style="display: none;"></div>
                    <div class="col-md-4 schoolType" style="display: none ;">
                        <div class="row" style="padding: 0px 20px">
                            <select name="school_type" id="school_type" class="form-control select-banner">
                                <option selected disabled>نوع المنهاج</option>
                                <option value="0">محلي</option>
                                <option value="1">دولي</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-8 schoolClass" style="display: none"></div>
                    <div class="col-md-4 schoolClass" style="display: none ;">
                        <div class="row" style="padding: 0px 20px">
                            <div class="order-0 order-md-12 form-group" style="width: 60%;">
                                <select name="school_class" id="school_class" class="form-control select-banner"
                                        style="border-radius: 0px 5px 5px 0px !important;">
                                    <option selected disabled>اختر الصف</option>
                                    @foreach($schoolClasses as $class)
                                        <option value="{{ $class->id }}">{{ $class->class_en }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="order-1 order-md-12 form-group" style="width: 20%; ">
                                <input type="number" class="form-control" name="from_price" placeholder="من"
                                       style="text-align: right;border-radius: 0px !important;">
                            </div>
                            <div class="order-2 order-md-12 form-group" style="width: 20%;">
                                <input type="number" class="form-control" name="to_price" placeholder="إلى"
                                       style="text-align: right;border-radius: 5px 0px 0px 5px !important;">
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="row" style="padding: 0px 20px">
                            <div class="input-group-prepend" style="width: 100%">
                                <button type="submit" class="btn btn-info" id="inputGroupPrepend2"
                                        style="top: 10px;width: 100%; background: #fd460c;border-color: #fd460c;">
                                    بحث
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                </div>
                {{--/*****************************************/--}}

                {{--/*****************************************/--}}

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 order-2 schoolClass" style="display: none">

                        </div>
                        <div class="col-md-3 order-1 order-md-12 schoolClass" style="display: none">

                        </div>
                        <div class="col-md-4 order-0 order-md-12 schoolClass" style="display: none">
                            <div class="row">
                                <div class="col-md-12 form-group">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </form>
    </div>
</div>
<style>
    .bannerLogo {
        height: 256px;

    }

    .bannerLogoImg {
    }

    .news-banner {
        height: 80px;
        margin-top: 40px;
    }

    @media (max-width: 700px) {
        .bannerLogo {
            height: 40px;
        }

        .bannerLogoImg {
            bottom: 170px
        }

        .news-banner-col-1 {
            height: 80px;
            margin-top: 60px;
        }
    }
</style>

</div>
<div class="row" style="position: relative;top: -50px;height: 5px; margin-right: 0">
    <div class="col-md-12 news-banner" style="padding: 0px !important;">
        <div class="d-flex justify-content-between align-items-center breaking-news  rounded"
             style="background: #1d556c;margin-bottom: 30px; box-shadow:0 2px 2px rgba(0, 0, 0, 0.11);height: 40px; {{(app()->getLocale() == 'en') ?'' :'direction: rtl;'}}">
            <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news {{(app()->getLocale() == 'en') ?'rounded-right' :'rounded-left'}}"
                 style="height: 40px;">
                        <span class="d-flex align-items-center font-weight-bold"
                              style="position: absolute;top: 14px; ">{{__('index.News')}}</span></div>
            <marquee class="news-scroll" height="40" behavior="scroll" direction="right" scrollamount="6"
                     onmouseover="this.stop();" onmouseout="this.start();"
                     direction="{{(app()->getLocale() == 'en') ?'left' :'right'}}" onmouseover="this.stop();"
                     onmouseout="this.start();" style="direction: ltr; padding: 10px;">
                @foreach($mainNews as $news)
                    <a href="{{ app()->getLocale() }}/showMore/{{ $news['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($news['title_en']) : trim($news['title_ar'])) }}"
                       #f5f5f5
                       class="news-ahref">{{ app()->getLocale() == 'ar' ? $news['title_ar'] : $news['title_en'] }}</a>
                    <img class="news-img" src="{{ asset('assets/images/favicon.png') }}" width="15" height="15"
                         alt="">
                @endforeach
            </marquee>
        </div>
    </div>
</div>