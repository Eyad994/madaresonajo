<style>

    @import url('https://fonts.googleapis.com/css?family=Cairo&display=swap');

    body {
        font-family: 'Cairo', sans-serif !important;
    }

    .nav-tabs {
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
        border: none;
    }
    .nav-tabs .nav-link{
        border: none;
        border-radius: 0;
        transition: color .2s ease-out;
    }
    .tabs-dark .nav-link {
        color: #fff;
    }
    .tabs-light .nav-link {
        color: rgba(0,0,0,.5);
    }
    .tabs-dark .nav-link:not(.active):hover {
        color: #aeb0b3;
    }
    .tabs-light .nav-link:not(.active):hover {
        color: #495057;
    }

    .nav-pills .nav-link{
        border-radius: 2px;
        color: #495057;
        transition: color .2s ease-out, box-shadow .2s;
    }
    .nav-pills .nav-link:hover{
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

    }
    .nav-pills .nav-item {
        margin: 0 5px;
    }
    .nav-pills.pills-dark .nav-link.active {
        background-color: #343a40!important;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    }
    .nav-pills.pills-dark .nav-link:not(.active):hover {
        color: #1d1e22;
    }
    .tabs-marker .nav-link {
        position: relative;
    }
    .tabs-marker .nav-link.active .marker {
        height: 30px;
        width: 30px;
        left: 50%;
        bottom: -30px;
        transform: translatex(-50%);
        position: absolute;
        overflow: hidden;
    }
    .tabs-marker .nav-link.active .marker:after {
        content: "";
        height: 15px;
        width: 15px;
        top: -8px;
        left: 50%;
        transform: rotate(45deg) translatex(-50%);
        transform-origin: left;
        background-color: #fff;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
        position: absolute;
    }

    .d-block.w-100 {
        max-height: 450px !important;
    }

    .carousel-thumbnails .carousel-indicators img {
        max-width: 100px;
        height: 50px;
        overflow: hidden;
        display: block;
    }

    .carousel-thumbnails .carousel-indicators li {
        height: auto;
        max-width: 100px;
        width: 100px;
        border: none;
        box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.75);

    &
    .active {
        border-bottom: 4px solid #fff;
    }

    }

    .scrollbar-warning::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-warning::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-warning::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #FF8800;
    }

    .scrollbar-warning {
        scrollbar-color: #FF8800 #F5F5F5;
    }


</style>

<div class="row">

    <div class="col-xl-8 mb-4 mb-xl-0 order-1 order-md-12" style="background: #f6f9fc">

        <section>

            <ul class="nav nav-tabs tabs-marker tabs-dark" style="background-color: #ff6000 " id="myTab" role="tablist">
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab"
                       aria-controls="gallery" aria-selected="false">{{ __('show.gallery') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" id="principle-tab" data-toggle="tab" href="#principle" role="tab"
                       aria-controls="principle" aria-selected="false">{{ __('show.principle') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="discountForm-tab" data-toggle="tab" href="#discountForm" role="tab"
                       aria-controls="discountForm" aria-selected="true">{{ __('show.discountForm') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="transportation-tab" data-toggle="tab" href="#transportation" role="tab"
                       aria-controls="transportation" aria-selected="true">{{ __('show.transportation') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="maps-tab" data-toggle="tab" href="#maps" role="tab" aria-controls="maps"
                       aria-selected="true">{{ __('show.maps') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="brochure-tab" data-toggle="tab" href="#brochure" role="tab"
                       aria-controls="brochure" aria-selected="true">{{ __('show.brochure') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="contactInfo-tab" data-toggle="tab" href="#contactInfo" role="tab"
                       aria-controls="contactInfo" aria-selected="true">{{ __('show.contactInfo') }}<span class="marker"></span></a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " id="news-tab" data-toggle="tab" href="#news" role="tab"
                       aria-controls="news" aria-selected="true">{{ __('show.news') }}<span class="marker"></span></a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">

                {{-- ******************************************************************************************************************************** --}}

                <!--Carousel Wrapper-->
                    <div class="container mt-5">
                        <div class="carousel-container position-relative row">
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                 data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner z-depth-4 rounded" role="listbox" style="height: 450px ">
                                    <?php $i = 0; ?>
                                    @foreach($gallery as $item)
                                        @if($i == 0)
                                            <div class="carousel-item active z-depth-4 rounded">
                                                <img class="d-block w-100"
                                                     src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}">
                                            </div>
                                        @else

                                            <div class="carousel-item z-depth-4 rounded">
                                                <img class="d-block w-100"
                                                     src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}">
                                            </div>
                                        @endif
                                        <?php $i++ ?>
                                    @endforeach
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                                <ol class="carousel-indicators">
                                    <?php $i = 0; ?>
                                    @foreach($gallery as $item)
                                        @if($i == 0)
                                            <li data-target="#carousel-thumb" data-slide-to="{{ $i }}"
                                                class="active border border-white z-depth-4 rounded">
                                                <img class="d-block w-100"
                                                     src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}"
                                                     class="img-fluid">
                                            </li>
                                        @else
                                            <li data-target="#carousel-thumb" data-slide-to="{{ $i }}"
                                                class="border border-white z-depth-4 rounded">
                                                <img class="d-block w-100"
                                                     src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}"
                                                     class="img-fluid">
                                            </li>
                                        @endif
                                        <?php $i++ ?>
                                    @endforeach
                                </ol>
                            </div>
                            <script>
                                $('#carousel-thumb').carousel({
                                    interval: 3000
                                });
                            </script>
                        </div>
                    </div>
                    <!--/.Carousel Wrapper-->

                    {{-- ******************************************************************************************************************************** --}}

                </div>

                <div class="tab-pane fade" id="principle" role="tabpanel" aria-labelledby="principle-tab">

                    <div class="container mt-5">
                        <div class="carousel-container position-relative row">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overflow-scroll scrollbar-warning"
                                         style="height: 450px; overflow-y: scroll; ">
                                        {!! $school->principle_en !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <style>
                    #tabsTable {
                        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        text-align: right;
                    }

                    #tabsTable td, #tabsTable th {
                        border: 1px solid #ddd;
                        padding: 8px;
                    }

                    #tabsTable tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }

                    #tabsTable tr:hover {
                        background-color: #ddd;
                    }

                    #tabsTable th {
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: right;
                        background-color: #ff6000;
                        color: white;
                    }
                </style>

                <div class="tab-pane fade" id="discountForm" role="tabpanel" aria-labelledby="discountForm-tab">

                    <div class="container mt-5">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-12">

                                    <table id="tabsTable">
                                        <tr>
                                            <th>المنهاج</th>
                                            <th>السعر</th>
                                            <th>الصف</th>
                                        </tr>
                                        @foreach($premiums as $item)
                                            <tr>
                                                <td>{{ $item->curriculum == 0 ? 'منهاج محلي' : 'منهاج دولي' }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->schoolClass->class_en }}</td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: right; direction: rtl">
                                <div dir="row">
                                    <h4 style="margin-right: 40px">{{ __('discounts') }}</h4>
                                    <div class="col-md-12">
                                        <ul>
                                            @if($school->discounts_superior == 1)
                                                <li>التميز الدراسي</li>
                                            @endif
                                            @if($school->discounts_quran == 1)
                                                <li>حفظ القرآن الكريم</li>
                                            @endif
                                            @if($school->discounts_sport == 1)
                                                <li>التفوق الرياضي</li>
                                            @endif
                                            @if($school->discounts_brothers == 1)
                                                <li>اخوان</li>
                                            @endif

                                        </ul>
                                    </div>
                                    <h4 style="margin-right: 40px">{{ __('the_curriculum') }}</h4>
                                    <div class="col-md-12">
                                        <ul>
                                            @if($school->curriculum_ls_local == 1)
                                                <li>محلي</li>
                                            @endif
                                            @if($school->curriculum_ls_public == 1)
                                                <li>دولي</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">
                    <div class="container mt-5">
                        <table id="tabsTable">
                            <tr>
                                <th>ذهاب واياب</th>
                                <th>ذهاب</th>
                                <th>المنطقة</th>
                            </tr>
                            @foreach($transportations as $transportation)
                                <tr>
                                    <td>{{ $transportation->two_way }}</td>
                                    <td>{{ $transportation->one_way }}</td>
                                    <td>{{ $transportation->region_ar }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab">
                    <div id="map" style="height: 400px; width: 100%;" lat="{{ $school-> lat}}"
                         lng="{{ $school-> lng}}"></div>

                </div>
                <div class="tab-pane fade" id="brochure" role="tabpanel" aria-labelledby="brochure-tab">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12" style="text-align-last: center;">
                                @if($school->school_brochure != null)
                                    <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_brochure }}"
                                         style="width: 50%" alt="">
                                @else
                                    <h1>No Brochure</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contactInfo" role="tabpanel" aria-labelledby="contactInfo-tab">

                    <div class="container mt-5" style="text-align: right;">
                        <h2>معلومات الاتصال</h2>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">{{ $school->contact_person_email }}&nbsp;&nbsp;<b
                                        style="color: black">:البريد الالكتروني</b></div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">{{ $school->contact_person_phone }}&nbsp;&nbsp;<b
                                        style="color: black">:الهاتف</b></div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">{{ $school->fax }}&nbsp;&nbsp;<b style="color: black">:فاكس</b></div>
                        </div>
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-5">{{ $school->website }}&nbsp;&nbsp;<b style="color: black">:الموقع
                                    الالكتروني</b></div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">&nbsp;&nbsp;<b style="color: black">:الجنس</b></div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">

                    <style>
                        .card {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                            transition: 0.3s;
                            width: 100%;
                            height: 200px;
                        }

                        .card:hover {
                            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                        }

                        .container {
                            padding: 2px 16px;
                        }
                    </style>

                    <div class="container mt-5" style="text-align: right; direction: rtl">
                        @foreach($news as $item)
                            <div class="row">
                                <div class="card">
                                    <div class="col-md-3">
                                        <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/news/{{ $item['img'] }}"
                                             alt="Avatar" style="width:60%">
                                    </div>
                                    <div class="col-md-9 container">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h5>{{ $item['title_ar'] }}</h5>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">{!! Illuminate\Support\Str::limit($item['text_ar'], $limit = 45, $end = '...') !!}</div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-11"></div>
                                            <div class="col-md-1">
                                                <a href="showMore/{{ $item['id'] }}" target="_blank" class="btn btn-info" style="bottom: 10px; right: 100px;">المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </section>
        <!-- Section: Live preview -->

    </div>

    <div class="col-xl-4 mb-4 mb-xl-0 order-0 order-md-12">
        <br>
        <div class="row">
            <div class="col-md-3">
                <img class="rounded"
                     src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}" alt="">
            </div>
            <div class="col-md-9">
                <h4>{{ $school->name_en }}</h4>
                <h6 class="text-muted">Jordan, {{ $school->city->city_name_en }}
                    - {{ $school->region->area_name_en }}</h6>
            </div>
        </div>
        <div style="border-bottom: 1px solid rgba(76, 87, 102, .1);
    padding: 20px 0 10px;
    margin: 0 0 20px;"></div>
        <div class="row">
            <div class="col-md-12" style="border-bottom: 1px solid rgba(76, 87, 102, .1); padding-bottom:20px; ">
                <div class="scrollbar-warning" style="height: 400px; width: 100%; overflow-y: scroll;">
                    {!! $school->school_details_en !!}
                </div>
            </div>
        </div>
        <br>

        <style>
            .a2a_svg.a2a_s__default {
                border-radius: 16px;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="float: right">
                    <a class="a2a_button_facebook z-depth-4 rounded "></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_gmail"></a>
                    <a class="a2a_button_whatsapp"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
            </div>
        </div>
    </div>

</div>

<script>
    document.documentElement.setAttribute("lang", "en");
    document.documentElement.removeAttribute("class");
    initMap();
    function initMap() {
        lat = parseFloat($("#map").attr("lat"));
        lng = parseFloat($("#map").attr("lng"));
        // The location of Uluru
        var uluru = {lat: lat, lng: lng};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 16, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            "icon": '{{ asset('assets/images/school.png') }}',
            title: 'title'
        });
    }
</script>

{{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f0cf05e633f30bf"></script>--}}
