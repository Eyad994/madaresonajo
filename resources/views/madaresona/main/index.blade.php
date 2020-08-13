@extends('layouts.main')
@section('sub_header')
    @include('madaresona.partials.sub_header')
@endsection
@section('content')


    {{--
        box-shadow: 5px 3px 8px 0px #888888;
        height: 50px;
        0 2px 2px rgba(0, 0, 0, 0.11)
    --}}

    <style>

        @media only screen and (max-width: 991px) {
            #wrapper {
                display: none;
            }
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

        .selected_education {
            background: #f5f5f5;
            padding: 20px 30px;
            border-radius: 10px !important;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
        }

        /********************************/

        /**************************************/

        #c1 {
            float: left;
            margin-left: 10px;
        }

        #c2 {
            margin-right: 10px;
            float: right;
        }

        @media (max-width: 777px) {

        }

        .mce-item-table tr td {
            padding: 30px !important;
        }

        .schools_type_title {
            font-size: 25px;
        }

        .mordon_part:hover {
            background: #d6d8dc;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <div class="section-base" style="margin-top: 30px;">
        <div class="row" style="margin-left: 0px;margin-right: 0px">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <h2 class="align-center" style="color: #1d556c; padding: 10px;font-weight: bold; ">
                    {{__('index.special_schools')}}
                </h2>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-1"></div>
        </div>
        <div class="row" style="margin-left: 0px;margin-right: 0px">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme"
                     style="background: #f5f5f5; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important; border-radius: 10px; ">
                    @foreach($specialSchools as $school)
                        <div class="col-md-10"
                             style="margin-top: 20px; ">  {{--width: 240px; margin-left: 120px;--}}
                            <div class="cnt-box cnt-box-info boxed z-depth-4 rounded"
                                 style="border: 1px #f1f4f9 solid">
                                <a class="img-box {{--show-school--}} special-image" id="{{ $school->id }}"
                                   title="{{ $school->name_ar }}"
                                   href="{{ app()->getLocale() }}/school-data/{{$school->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"
                                   slug="{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}">
                                    <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                         alt="school_logo" style="width: 100px; height:75px;">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="my-owl-nav">

                        <span class="my-prev-button">
                            <i class="fad fa-chevron-left" aria-hidden="true"></i>
                        </span>
                    <span class="my-next-button"><i class="fad fa-chevron-right" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col-md-2" style="margin-left:12px;">
                <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                    <div class="search-results-titlehome" style="text-align: center;float: right;width: 100%;">المؤسسات
                        التعليمية
                    </div>
                    <div
                            @if((app()->getLocale() == 'ar'))
                            style="direction: rtl; text-align: right;padding: 10px;padding-top: 80px;"
                            @else
                            style="direction:ltr; text-align:left;padding: 10px;padding-top: 80px;"
                            @endif
                    >
                        <select name="schoolType" id="schoolType" class="form-control"
                                style="font-size: 15px;padding:0px 10px;">
                            <option style="color: #000; font-weight: bold;" disabled
                                    selected>{{ __('index.education_institutions') }}</option>
                            <option value="0">{{ app()->getLocale() == 'ar' ? 'الكل' : 'All' }}</option>
                            @foreach($schoolsType as $type)
                                <option value="{{ $type->id }}">{{ (app()->getLocale() == 'en') ? $type->name_en :  $type->name_ar}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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

        .owl-dots {
            height: 15px !important;
        }

        .my-prev-button {
            position: absolute !important;
            top: -1px !important;
            height: 124px !important;
            background: #d4d1d1;
            z-index: 1 !important;
            left: 11px !important;
            width: 20px !important;
            border-radius: 5px 0px 0px 5px !important;
            line-height: 124px !important;
            color: #000 !important;
            padding-left: 7px;
            font-size: 16px;
        }

        .my-next-button {
            position: absolute !important;
            top: -1px !important;
            height: 124px !important;
            background: #d4d1d1;
            z-index: 1 !important;
            right: 11px !important;
            width: 20px !important;
            border-radius: 0px 5px 5px 0px !important;
            line-height: 124px !important;
            color: #000 !important;
            padding-left: 7px;
            font-size: 16px;
        }

        .my-next-button:hover, .my-prev-button:hover {
            background: #2b596b;
            color: #fff !important;
        }
    </style>
    <script>

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoWidth: true,
            autoplayHoverPause: true,

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
    </div>

    <section class="section-base" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class=" fade-left" style="padding: 0px !important;" id="schoolsGrid">
                    <div class="infinite-scroll">
                        <div class="row">
                            @foreach($schools as $school)
                                <div class="col-md-2"
                                     style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                    <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                    style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                        <a class="img-box {{--show-school--}}" id="{{ $school->id }}"
                                           href="{{ app()->getLocale() }}/school-data/{{$school->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"
                                           slug="{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}">
                                            <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                                 alt="" style="width: 100%; height: 140px;">
                                        </a>
                                        <div class="caption" style="background: #d6d8dc24;">
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
            </div>
            <div class="col-md-2" style="padding-top: 20px">
                <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                    <div class="search-results-titlehome" style="text-align: center;float: right;width: 100%;">بحث</div>
                    <div class="input-group" style="direction: rtl;width: 100%;padding: 10px">
                        <input type="text" name="sub_search" id="sub_search" class="form-control" placeholder="بحث "
                               style="border-radius: 0px;margin-right: -1px;">
                        <div class="input-group-btn">
                            <button class="btn btn-default" id="search_button" type="button" disabled
                                    style="margin-right: -4px">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @if(count($specialSuppliers) > 0)
                    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;margin-top: 50px">
                        <div class="search-results-titlehome " style="text-align: center;float: right;width: 100%;">
                            الموردون
                        </div>
                        @foreach($specialSuppliers as $supplier)
                            <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}"
                               class="input-group mordon_part"
                               style="direction: rtl;width: 100%;padding: 10px;border-bottom: 1px solid #bebebe;">
                                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}"
                                     style="width: 25px;height: 25px;float: right">
                                <span style="float: right;padding-right: 15px;padding-top: 5px;">{{ app()->getLocale() == 'ar' ? $supplier->name_ar : $supplier->name_en }}</span>

                            </a>
                        @endforeach
                    </div>
                @endif

                @include('ads')
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </section>

    <section class="section-base section-color" style="margin-top: 70px ">

        {{--
        <div class="container"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
            @else
                style="direction:ltr; text-align:left;">
            @endif
--}}
            <div class="row ">
                <div class='col-md-1'></div>
                <div class='col-md-8'>
                    <table class="table table-grid table-border align-center table-full-border table-md-6 mce-item-table">
                        <tbody>
                        <tr>
                            <td style="border: 1px solid #e6edf1;border-top: 1px solid #ddd;">
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.private_schools')}}</div>
                                        <div class="value text-lg">
                                            <span data-to="{{ $schoolsCounts->privateSchools }}"
                                                  data-speed="3000">{{ $schoolsCounts->privateSchools }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.colleges_universities')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->universities }}"
                                                                         data-speed="3000">{{ $schoolsCounts->universities }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.kindergartens')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->kindergartens }}"
                                                                         data-speed="3000">{{ $schoolsCounts->kindergartens }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.nurseries')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->nurseries }}"
                                                                         data-speed="3000">{{ $schoolsCounts->nurseries }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #e6edf1;border-bottom: 1px solid #ddd;">
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.training_consulting')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->training }}"
                                                                         data-speed="3000">{{ $schoolsCounts->training }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.learning_difficulties')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->learning }}"
                                                                         data-speed="3000">{{ $schoolsCounts->learning }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.suppliers')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $schoolsCounts->suppliers }}"
                                                                         data-speed="3000">{{ $schoolsCounts->suppliers }}</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div>
                                        <div class="schools_type_title">{{__('index.visitors')}}</div>
                                        <div class="value text-lg"><span data-to="{{ $visitorCount }}"
                                                                         data-speed="3000">{{ $visitorCount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class='col-md-2'></div>
                <div class="col-md-1"></div>
           {{-- </div>--}}
        </div>
    </section>





@endsection
@section('script')

    <script type="text/javascript">

        $('ul.pagination').hide();

        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" style="width: 50px;height: 50px;" src="{{ asset('assets/images/Spin-1s-200px.svg') }}" alt="Loading..."/>',
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

            $('#search_text').keyup(function () {
                var text = $('#search_text').val();
                $.ajax({
                    type: "GET",
                    url: '/ar/sub_search/' + text,
                    success: function (data) {
                        console.log(data);
                        $('#schoolsGrid').html(data);
                    }
                });
            });

            $('#sub_search').keyup(function () {
                var text = $('#sub_search').val();
                $.ajax({
                    type: "GET",
                    url: '/ar/sub_search/' + text,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $('#schoolsGrid').html(data);
                    }
                });
            })

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
            var id = $(this).attr('id');

            $.ajax({
                url: '/{{ app()->getLocale() }}/school/' + id,
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
{{--

<div class="travelo-box widget-queries">
    <i class="fa fa-filter"></i> <small> فلترة حسب  القطاع</small>
    <ul>
        <li><a href="TendersSearch.aspx?Sector=1">
                <img src="App_Themes/WebAr/images/graph-b.svg" width="24">
                حكومي

                <label class="price-wrapper pull-right">
                    <span id="b_Gooverment" class="price-per-unit" style="color:#3498DB !important">87473</span>

                </label>
            </a>
        </li>
        <li><a href="TendersSearch.aspx?Sector=2">
                <img src="App_Themes/WebAr/images/graph-r.svg" width="24">
                القطاع الخاص
                <label class="price-wrapper pull-right">
                    <span id="b_Private" class="price-per-unit" style="color:#C0392B !important">16749</span>
                </label>
            </a></li>
        <li><a href="TendersSearch.aspx?Sector=3">
                <img src="App_Themes/WebAr/images/graph-p.svg" width="24">
                المنظمات الدولية
                <label class="price-wrapper pull-right">
                    <span id="b_international" class="price-per-unit" style="color:#9B59B6 !important">10076</span>
                </label>
            </a>
        </li>
        <li><a href="TendersSearch.aspx?Sector=4">
                <img src="App_Themes/WebAr/images/graph-g.svg" width="24">
                الهيئات الاجتماعية
                <label class="price-wrapper pull-right">
                    <span id="b_Societies" class="price-per-unit" style="color:#28B463 !important">3681</span>


                </label>

            </a>

        </li>

    </ul>


    <i class="fa fa-pie-chart" aria-hidden="true"></i> <small> عدد النتائج حسب المصدر</small>

    <ul>
        <li>
            <img src="App_Themes/WebAr/images/www.svg" width="24">
            محركات البحث

            <label class="price-wrapper pull-right">
                <span id="lblSearchEnginSource" class="price-per-unit" style="color:#3498DB !important">11074</span>

            </label>

        </li>
        <li>
            <img src="App_Themes/WebAr/images/crown.svg" width="24">
            حصرياً لدينا
            <label class="price-wrapper pull-right">
                <span id="lblTenderJOSource" class="price-per-unit" style="color:#C0392B !important">3707</span>
            </label>
        </li>

        <li>
            <img src="App_Themes/WebAr/images/free.svg" width="24">
            عطاءات مجانية

            <label class="price-wrapper pull-right">
                <span id="lblfreetndr" class="price-per-unit" style="color:#3498DB !important">232</span>

            </label>

        </li>

    </ul>
</div>--}}
