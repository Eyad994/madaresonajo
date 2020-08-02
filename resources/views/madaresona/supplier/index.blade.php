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
            background: #f1f5f7;
            padding: 20px 30px;
            border-radius: 10px !important;
            box-shadow: 0 10px 15px rgba(0, 0, 0, .5);
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
    </style>


    <div id="wrapper">
        <div id="c1">
            @foreach($suppliersAdvertisements as $advertisement)
                <a href="{{ $advertisement->url }}">
                    <img src="https://astonsocial.com.au/wp-content/uploads/2018/03/Facebook-Advertising.png" width="220px" height="150px" alt="">
                </a>
                <hr class="space">
            @endforeach
        </div>
        <div id="c2">
            @foreach($schoolsAdvertisements as $advertisement)
                <a href="{{ $advertisement->url }}">
                    <img src="https://astonsocial.com.au/wp-content/uploads/2018/03/Facebook-Advertising.png" width="220px" height="150px" alt="">
                </a>
                <hr class="space">
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="height: 80px;">
                <div class="d-flex justify-content-between align-items-center breaking-news  rounded"
                     style="background: #1d556c;margin-bottom: 30px; box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.19);">
                    <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news {{(app()->getLocale() == 'en') ?'rounded-right' :'rounded-left'}}"
                         style="height: 100px;">
                        <span class="d-flex align-items-center font-weight-bold"
                              style="position: absolute;top: 28px;">{{__('index.News')}}</span></div>
                    <marquee class="news-scroll" height="100" behavior="scroll" direction="up" scrollamount="2"
                             onmouseover="this.stop();" onmouseout="this.start();"
                             direction="{{(app()->getLocale() == 'en') ?'left' :'right'}}" onmouseover="this.stop();"
                             onmouseout="this.start();">
                        @foreach($mainNews as $news)
                            <img class="news-img" src="{{ asset('assets/images/favicon.png') }}" width="15" height="15"
                                 alt="">
                            <a href="{{ app()->getLocale() }}/showMore/{{ $news['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($news['title_en']) : trim($news['title_ar'])) }}"
                               target="_blank"
                               class="news-ahref">{{ app()->getLocale() == 'ar' ? $news['title_ar'] : $news['title_en'] }}</a>
                            <img class="news-img" src="{{ asset('assets/images/favicon.png') }}" width="15" height="15"
                                 alt="">
                            <br>
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
                    <div class="owl-carousel owl-theme"
                         style="background: #f1f5f7; box-shadow: 0 10px 15px rgba(0, 0, 0, .5); border-radius: 10px; ">
                        @foreach($specialSchools as $school)
                            <div class="col-md-10"
                                 style="margin-top: 20px; ">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" data-href="#"
                                     style="border: 1px #f1f4f9 solid">
                                    <a class="img-box show-school" id="{{ $school->id }}"
                                       href="school/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"
                                       slug="{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}">
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

    <section class="section-base" style="margin-bottom: 20px;">
        <div class="container">
            <hr style="margin: 0px;">
        </div>
        <h2 class="align-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="padding: 10px 5px; color:#1d556c">
                    اختار نوع المؤسسة التعليمة للبحث بكل سهولة
                </div>
            </div>
        </h2>
        <h2 class="align-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 selected_education"
                     @if((app()->getLocale() == 'ar'))
                     style="direction: rtl; text-align: right;">
                    @else
                        style="direction:ltr; text-align:left;">
                    @endif
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
                                   href="school/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"
                                   slug="{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}">
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
