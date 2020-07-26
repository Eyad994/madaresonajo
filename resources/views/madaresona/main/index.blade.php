@extends('layouts.main')
@section('sub_header')
    @include('madaresona.partials.sub_header')
@endsection
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Cairo&display=swap');

        body {
            font-family: 'Cairo', sans-serif !important;
        }

        .news {
            width: 160px
        }

        .news-scroll a {
            text-decoration: none;
            height: 40px;
            padding-top: 10px;
        }

        .news-ahref {
            color: white;
        }

        .news-ahref:hover {
            color: #ff6000;
        }

        .news-img {
            margin: 0 10px;
        }

        /********************************/

        /**************************************/

    </style>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center breaking-news  rounded"
                     style="background: #1d556c;margin-bottom: 30px; box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.19);">
                    <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news {{(app()->getLocale() == 'en') ?'rounded-left' :'rounded-right'}}">
                        <span class="d-flex align-items-center font-weight-bold" style="height: 100px;">{{__('index.News')}}</span></div>
                    <marquee class="news-scroll" height="100" behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();"
                             direction="{{(app()->getLocale() == 'en') ?'left' :'right'}}" onmouseover="this.stop();"
                             onmouseout="this.start();">
                        @foreach($mainNews as $news)
                            <img class="news-img" src="{{ asset('assets/images/favicon.png') }}" width="15" height="15"
                                 alt="">
                            <a href="{{ app()->getLocale() }}/showMore/{{ $news['id'] }}" target="_blank"
                               class="news-ahref">{{ app()->getLocale() == 'ar' ? $news['title_ar'] : $news['title_en'] }}</a>
                            <img class="news-img" src="{{ asset('assets/images/favicon.png') }}" width="15" height="15"
                                 alt="">
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <section class="section-base">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <div class="container pb-0">
            <h2 class="align-center" style="color: #1d556c; "><span class="font-weight-bold"
                                                                    style="text-decoration: underline; color: #ff6000; ">{{ count($specialSchools) }}</span> {{__('index.special_schools')}}
            </h2>
            <p class="align-center width-650"> {{__('index.proud_schools')}}</p>
            <hr class="space"/>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" style="background: #f1f5f7;">
                        @foreach($specialSchools as $school)
                            <div class="col-md-10" style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" data-href="#"
                                     style="border: 1px #f1f4f9 solid">
                                    <a class="img-box show-school" id="{{ $school->id }}"
                                       href="school/{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}"
                                       slug="{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}">
                                        <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                             alt="" style="width: 200px; height: 200px">
                                    </a>
                                    <div class="caption">
                                        <p style="text-align: center;">{{ $school->name_ar }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-owl-nav">

                        <span class="my-prev-button">
    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Prev
  </span>
                        <span class="my-next-button">
    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Next
  </span>
                    </div>
                </div>
            </div>
        </div>

        <style>

            .owl-stage {
                padding-bottom: 10px
            }

            .my-owl-nav {
                margin-top: 20px;
            }

            .my-owl-nav span {
                margin: 0 4px;
            }

            .my-owl-nav span:hover {
                cursor: pointer;
                color: #ff6000;
            }
        </style>
        <script>

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                /*navText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],*/
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                autoplay: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });


            var selector = $('.owl-carousel');

            $('.my-next-button').click(function () {
                selector.trigger('next.owl.carousel');
            });

            $('.my-prev-button').click(function () {
                selector.trigger('prev.owl.carousel');
            });
        </script>
    </section>
    {{--<section class="section-base" >
        <div class="container pb-0">
            <h2 class="align-center" style="color: #1d556c; "><span class="font-weight-bold"
                        style="text-decoration: underline; color: #ff6000; ">{{ count($specialSchools) }}</span> {{__('index.special_schools')}}</h2>
            <p class="align-center width-650"> {{__('index.proud_schools')}}</p>
            <hr class="space"/>

            <div class="row ">
                <div class='col-lg-12 '>
                    <div class="container-fluid" id="carouselBody">
                        <div id="carouselIndex" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" style="padding-bottom: 10px;" role="listbox">

                                @for($i=0; $i < count($specialSchools); $i++)
                                    @if($i == 0)
                                        <div class="carousel-item col-md-3  active z-depth-3 rounded">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}"
                                                       title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                                        <img class="img-fluid mx-auto d-block z-depth-3 rounded"
                                                             style="width: 200px; height: 200px;    border: 1px #f1f4f9 solid;  webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);}"
                                                             src="{{ env('IMAGE_URL') }}/images/{{$specialSchools[$i]->name_en}}/{{ $specialSchools[$i]->school_logo }}"
                                                             alt="slide 1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item col-md-3 ">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}"
                                                       title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                                        <img class="img-fluid mx-auto d-block z-depth-3 rounded"
                                                             style="width: 200px; height: 200px; border: 1px #f1f4f9 solid;  webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);"
                                                             src="{{ env('IMAGE_URL') }}/images/{{$specialSchools[$i]->name_en}}/{{ $specialSchools[$i]->school_logo }}"
                                                             alt="slide 2">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselIndex" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="section-base">
        <div class="container">
            <hr>
        </div>
        <h2 class="align-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <select name="schoolType" id="schoolType" class="form-control"
                            style="font-size: 15px;padding: 1px;">
                        <option style="color: #000; font-weight: bold;" disabled
                                selected>{{ __('index.education_institutions') }}</option>
                        <option value="0">{{ app()->getLocale() == 'ar' ? 'الكل' : 'All' }}</option>
                        @foreach($schoolsType as $type)
                            <option value="{{ $type->id }}">{{ (app()->getLocale() == 'en') ? $type->name_en :  $type->name_ar}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </h2>

        <div class="container fade-left" style="padding: 0px !important;" id="schoolsGrid">
            <hr class="space"/>
            <div class="infinite-scroll">
                <div class="row">
                    @foreach($schools as $school)
                        <div class="col-md-2" style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                            <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" data-href="#"
                                 style="border: 1px #f1f4f9 solid">
                                <a class="img-box show-school" id="{{ $school->id }}"
                                   href="school/{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}"
                                   slug="{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}">
                                    <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                         alt="" style="width: 200px; height: 200px">
                                </a>
                                <div class="caption">
                                    <p style="text-align: center;">{{ $school->name_ar }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $schools->links() !!}
                <div class="row">
                    <div class="col-md-12"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-base section-color" style="margin-top: 20px">

        <div class="container">

            <div class="row ">
                <div class='col-lg-12'>
                    <table class="table table-grid table-border align-center table-full-border table-md-6 mce-item-table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Happy customers</h3>
                                        <div class="value text-lg"><span data-to="9000" data-speed="3000">9000</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Landing pages</h3>
                                        <div class="value text-lg"><span data-to="9" data-speed="3000">9</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Premium components</h3>
                                        <div class="value text-lg"><span data-to="80" data-speed="3000">80</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Navigation menus</h3>
                                        <div class="value text-lg"><span data-to="10" data-speed="3000">10</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Options</h3>
                                        <div class="value text-lg"><span data-to="500" data-speed="3000">500</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Documentation pages</h3>
                                        <div class="value text-lg"><span data-to="64" data-speed="3000">64</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Photoshop files</h3>
                                        <div class="value text-lg"><span data-to="25" data-speed="3000">25</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Responsive</h3>
                                        <div class="value text-lg"><span data-to="100" data-speed="3000">100</span>
                                            <span>%</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base section-color"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
        @else
            style="direction:ltr; text-align:left;">
        @endif>


        <div class="container">

            <div class="row ">
                <div class='col-lg-12  '>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><h2
                                    class="themekit-header">Superior performance<br>with great speed and high scores.
                            </h2>
                            <p>Speed is everything, Codrop is built to develop high performance websites. We worked hard
                                to minimize the file size of scripts and styles and to avoid redundante codes. Only
                                lightweight plugins.</p><a class="btn-text"
                                                           href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK"
                                                           target="_blank" rel="noopener"
                                                           data-mce-href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK">Check
                                seo score</a></div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000"><img
                                    class="margin-23" src="{{ asset('assets/images/intro/seoa6e5.png?1570696809946') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.png"></div>
                    </div>
                    <hr class="space-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><img class="timer"
                                                                                                    src="{{ asset('assets/images/intro/themekita6e5.png?1570696809946') }}"
                                                                                                    alt=""
                                                                                                    data-mce-src="images/intro/themekit.png">
                        </div>
                        <div class="col-lg-6 col-md-6 order-sm-first align-left-sm align-right" data-anima="fade-right"
                             data-time="1000"><h2 class="themekit-header">Superior documentation with<br>everything you
                                need and more.</h2>
                            <p>Differentely by the other templates, that are only focused on design and demos, this
                                template is built with the developers in mind. You can customize this template truly
                                faster and without limitations.</p><a class="btn-text"
                                                                      href="https://themekit.dev/docs/code/main/"
                                                                      target="_blank" rel="noopener"
                                                                      data-mce-href="https://themekit.dev/docs/code/main/">View
                                documentation</a></div>
                    </div>
                </div>
                <div class='col-lg-12  ' style="margin-top: 80px;">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><h2
                                    class="themekit-header">Superior performance<br>with great speed and high scores.
                            </h2>
                            <p>Speed is everything, Codrop is built to develop high performance websites. We worked hard
                                to minimize the file size of scripts and styles and to avoid redundante codes. Only
                                lightweight plugins.</p><a class="btn-text"
                                                           href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK"
                                                           target="_blank" rel="noopener"
                                                           data-mce-href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK">Check
                                seo score</a></div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000"><img
                                    class="margin-23" src="{{ asset('assets/images/intro/seoa6e5.png?1570696809946') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.png"></div>
                    </div>
                    <hr class="space-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><img class="timer"
                                                                                                    src="{{ asset('assets/images/intro/themekita6e5.png?1570696809946') }}"
                                                                                                    alt=""
                                                                                                    data-mce-src="images/intro/themekit.png">
                        </div>
                        <div class="col-lg-6 col-md-6 order-sm-first align-left-sm align-right" data-anima="fade-right"
                             data-time="1000"><h2 class="themekit-header">Superior documentation with<br>everything you
                                need and more.</h2>
                            <p>Differentely by the other templates, that are only focused on design and demos, this
                                template is built with the developers in mind. You can customize this template truly
                                faster and without limitations.</p><a class="btn-text"
                                                                      href="https://themekit.dev/docs/code/main/"
                                                                      target="_blank" rel="noopener"
                                                                      data-mce-href="https://themekit.dev/docs/code/main/">View
                                documentation</a></div>
                    </div>
                </div>
                <div class='col-lg-12  ' style="margin-top: 80px;">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><h2
                                    class="themekit-header">Superior performance<br>with great speed and high scores.
                            </h2>
                            <p>Speed is everything, Codrop is built to develop high performance websites. We worked hard
                                to minimize the file size of scripts and styles and to avoid redundante codes. Only
                                lightweight plugins.</p><a class="btn-text"
                                                           href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK"
                                                           target="_blank" rel="noopener"
                                                           data-mce-href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK">Check
                                seo score</a></div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000"><img
                                    class="margin-23" src="{{ asset('assets/images/intro/seoa6e5.png?1570696809946') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-base section-color align-center" style="background-color: white">

        <style>
            .fa_services {
                font-size: 50px;
                margin: 30px 0px 0px 0px;
                color: #1d556c;
            }
        </style>

        <div class="container"
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
@section('script')

    <script type="text/javascript">

        $('ul.pagination').hide();

        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="{{ asset('assets/images/Spin-1s-200px.svg') }}" alt="Loading..." />',
                padding: 5,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function () {
                    $('ul.pagination').remove();
                }
            });

            $('#searchForm').on('submit', function (e) {

                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        //$('.infinite-scroll').destroy();
                        $('#schoolsGrid').html(data);

                        /*$('.infinite-scroll').removeData('jscroll').jscroll.destroy();*/
                        var div = $('#schoolsGrid').offset().top;
                        $('body, html').animate({scrollTop: div});
                    }
                });
            });

            $('#schoolType').on('change', function () {
                var id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/{{ app()->getLocale() }}/institutions/' + id,
                    success: function (data) {
                        $('#schoolsGrid').html(data);
                    }

                });
            });

            $('#carouselIndex').carousel({
                interval: 3000
            });

        });

        $(document).on("click", '.show-school', function (event) {

            var slug = $(this).attr('slug');
            var cleanSlug = slug.replace("-/", "");

            $.ajax({
                url: '/{{ app()->getLocale() }}/school/' + cleanSlug,
                method: 'get',
                success: function (data) {
                    $('.modal-body').html(data);
                    $('#modal').modal('show');
                    window.history.pushState("", "", '/{{ app()->getLocale() }}/' + slug);
                    $('#closeModal').on('click', function () {
                        var myNewURL = "";
                        window.history.pushState("", "Title", "/" + myNewURL);
                    })
                }
            });
        });

    </script>
    @include('modal')

@endsection
