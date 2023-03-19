@extends('layouts.main')
<head>
    <title>{{ $school->name_en}} | {{$school->name_ar}}</title>
    <meta property="og:title" content="{{(app()->getLocale() == 'ar') ?$school->name_ar :$school->name_en }}"/>
    <meta property="og:url"
          content="{{ env('MADARESONA_URL') }}/{{ app()->getLocale() }}/school-data/{{$school->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"/>
    <meta property="og:image"
          content="{{ env('IMAGE_URL') .'storage/'. $school->school_logo }}"/>
    <meta name="description" content="{{app()->getLocale() == 'en' ? $school->name_en : $school->name_ar}}">
    <meta name="twitter:card" content="{{app()->getLocale() == 'en' ? $school->name_en : $school->name_ar}}"/>
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
</head>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
<style>

    .nav-tabs {
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        border: none;
        padding: 0px;
    }

    .nav-tabs .nav-link {
        border: none;
        border-radius: 0;
        transition: color .2s ease-out;
        background: #fe6000;
    }

    .tabs-dark .nav-link {
        color: #fff;
    }

    .tabs-light .nav-link {
        color: rgba(0, 0, 0, .5);
    }

    .tabs-dark .nav-link:not(.active):hover {
        color: #aeb0b3;
    }

    .tabs-light .nav-link:not(.active):hover {
        color: #495057;
    }

    .nav-pills .nav-link {
        border-radius: 2px;
        color: #495057;
        transition: color .2s ease-out, box-shadow .2s;
    }

    .nav-pills .nav-link:hover {
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);

    }

    .nav-pills .nav-item {
        margin: 0 5px;

    }

    .nav-pills.pills-dark .nav-link.active {
        background-color: #343a40 !important;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
    }

    .nav-pills.pills-dark .nav-link:not(.active):hover {
        color: #1d1e22;
    }

    .tabs-marker .nav-link {
        position: relative;
    }

    .tabs-marker .nav-item {
        border-left: 2px solid #ffffff;
        margin-left: 2px;
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
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
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

    .social:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
    }

    .social {
        -webkit-transform: scale(0.8);
        /* Browser Variations: */

        -moz-transform: scale(0.8);
        -o-transform: scale(0.8);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }

</style>
@section('content')
    <section class="section-base section-color align-center">

        <div class="container">
            <div class="row" style="background: #fff;">

                <div class="col-xl-8 mb-4 mb-xl-0 order-1 order-md-12" style=" padding: 10px">

                    <section

                        @if((app()->getLocale() == 'ar'))
                            style="direction: rtl; text-align: right;">
                        @else
                            style="direction:ltr; text-align:left;">
                        @endif
                        <ul class="nav nav-tabs tabs-marker tabs-dark"
                            style="background-color: #ff6000; border-radius: 5px;font-weight: bold; "
                            id="myTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab"
                                   aria-controls="gallery" aria-selected="false">{{ __('show.gallery') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" id="principle-tab" data-toggle="tab" href="#principle" role="tab"
                                   aria-controls="principle"
                                   aria-selected="false">{{(($school->type)== 2)? __('show.president'): __('show.principle') }}</a>
                            </li>
                            @if(!(($school->type)== 2))
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link " id="discountForm-tab" data-toggle="tab" href="#discountForm"
                                       role="tab"
                                       aria-controls="discountForm"
                                       aria-selected="true">{{ __('show.discountForm') }}</a>
                                </li>
                            @endif
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="transportation-tab" data-toggle="tab" href="#transportation"
                                   role="tab"
                                   aria-controls="transportation"
                                   aria-selected="true">{{ __('show.transportation') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="maps-tab" data-toggle="tab" href="#maps" role="tab"
                                   aria-controls="maps"
                                   aria-selected="true">{{ __('show.maps') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="brochure-tab" data-toggle="tab" href="#brochure" role="tab"
                                   aria-controls="brochure" aria-selected="true">{{ __('show.brochure') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="contactInfo-tab" data-toggle="tab" href="#contactInfo"
                                   role="tab"
                                   aria-controls="contactInfo" aria-selected="true">{{ __('show.contactInfo') }}</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="gallery" role="tabpanel"
                                 aria-labelledby="gallery-tab">

                                {{-- ******************************************************************************************************************************** --}}

                                <!--Carousel Wrapper-->

                                <div class="carousel-container position-relative row" style="padding: 10px 20px;">
                                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                         data-ride="carousel">
                                        <!--Slides-->
                                        <div class="carousel-inner z-depth-4 rounded" role="listbox"
                                             style="height: 450px ">
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
                                        <a class="carousel-control-prev" href="#carousel-thumb" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumb" role="button"
                                           data-slide="next">
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

                                <!--/.Carousel Wrapper-->

                                {{-- ******************************************************************************************************************************** --}}

                            </div>

                            <div class="tab-pane fade" id="principle" role="tabpanel" aria-labelledby="principle-tab">

                                <div class="" style="width: 100%;padding: 20px">
                                    <div class="carousel-container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="overflow-scroll scrollbar-warning"
                                                     style="height: 450px; overflow-y: scroll; ">
                                                    {!! (app()->getLocale() == 'en') ? $school->principle_en:$school->principle_ar !!}
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
                                    border-spacing: 0 1em;
                                    width: 100%;
                                    text-align: center;
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
                                    padding: 18px 10px !important;
                                    background-color: #1d556c;
                                    color: white;
                                    border: none;
                                    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
                                    border-radius: 5px;
                                }

                                #tabsTable td {
                                    border: none;
                                    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12),
                                    0 1px 5px 0 rgba(0, 0, 0, 0.2);
                                    border-radius: 5px;
                                }

                                .div_cheak {
                                    padding: 5px 10px;
                                    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12),
                                    0 1px 5px 0 rgba(0, 0, 0, 0.2);
                                    font-size: 13px;
                                    font-weight: bold;
                                }


                            </style>

                            <div class="tab-pane fade" id="discountForm" role="tabpanel"
                                 aria-labelledby="discountForm-tab">

                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div dir="row">
                                                <h4 style="color: #2d3e52;font-weight: bold; font-size: 17px;padding: 10px 0px;">{{ __('show.discounts') }}</h4>
                                                <div class="col-md-12" style="margin: 0px;padding: 0px;">
                                                    @if($school->discounts_brothers == 1)
                                                        <div class="form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.brothers') }}
                                                        </div>
                                                    @endif
                                                    @if($school->discounts_quran == 1)
                                                        <div class=" form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.quran') }}
                                                        </div>
                                                    @endif
                                                    @if($school->discounts_sport == 1)
                                                        <div class="form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.sport') }}
                                                        </div>
                                                    @endif
                                                    @if($school->discounts_superior == 1)
                                                        <div class="form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.superior') }}
                                                        </div>
                                                    @endif

                                                </div>
                                                <h4 style="color: #2d3e52;font-weight: bold; font-size: 17px;padding: 10px 0px;">{{ __('show.the_curriculum') }}</h4>
                                                <div class="col-md-12" style="margin: 0px;padding: 0px;">

                                                    @if($school->curriculum_ls_local == 1)
                                                        <div class="form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.local') }}
                                                        </div>
                                                    @endif
                                                    @if($school->curriculum_ls_public == 1)
                                                        <div class="form-group shadow-lg bg-white rounded div_cheak">
                                                            {{ __('show.public') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <h4 style="color: #2d3e52;font-weight: bold; font-size: 17px;padding: 10px 0px;">{{ __('show.price') }}</h4>
                                                <table id="tabsTable">
                                                    <tr style="border-radius: 5px">
                                                        <th>{{ __('show.class') }}</th>
                                                        <th>{{ __('show.price') }}</th>
                                                        <th>{{ __('show.curriculum') }}</th>
                                                    </tr>
                                                    @foreach($premiums as $item)
                                                        <tr>
                                                            <td>{{ (app()->getLocale() == 'en') ?$item->schoolClass->class_en:$item->schoolClass->class_ar}}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->curriculum != 0 ? __('show.local_program')  : __('show.international_program') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="transportation" role="tabpanel"
                                 aria-labelledby="transportation-tab">
                                <div class="col-md-12" style="padding: 20px">
                                    <table id="tabsTable">
                                        <tr>
                                            <th>{{ __('show.region') }}</th>
                                            <th>{{ __('show.one_way') }}</th>
                                            <th>{{ __('show.two_way') }}</th>
                                        </tr>
                                        @foreach($transportations as $transportation)
                                            <tr>
                                                <td>{{ (app()->getLocale() == 'en') ?$transportation->region_en:$transportation->region_ar }}</td>
                                                <td>{{ $transportation->one_way }}</td>
                                                <td>{{ $transportation->two_way }}</td>

                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab">

                                <div class="col-md-12" style="padding-top: 50px">
                                    <div id="map" style="height: 400px; width: 100%;" lat="{{ $school-> lat}}"
                                         lng="{{ $school-> lng}}"></div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="brochure" role="tabpanel" aria-labelledby="brochure-tab">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align-last: center;">
                                            @if($school->school_brochure != null && !(strpos($school->school_brochure, 'pdf')))
                                                <img
                                                    src="{{ env('IMAGE_URL') .'storage/'. $school->school_brochure }}"
                                                    style="border-radius: 10px;padding: 20px;width: auto; height: 300px;"
                                                    alt="">
                                            @elseif($school->school_brochure != null && (strpos($school->school_brochure, 'pdf')))
                                                <a href="{{ env('IMAGE_URL') .'storage/'. $school->school_brochure }}"
                                                   #f5f5f5 download="">
                                                    <i class="fad fa-cloud-download"
                                                       style="  font-size: 300px; margin-top: 60px; "></i>
                                                </a>
                                                <div style="font-size: 40px; font-weight: bold; color: #f66001;">
                                                    Download
                                                </div>

                                            @else
                                                <h1>No Brochure</h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contactInfo" role="tabpanel"
                                 aria-labelledby="contactInfo-tab">


                                <div class="col-md-12" style="text-align: center">
                                    <h2 style="color: #2d3e52">{{ __('show.contact_information') }}</h2>
                                    <div class="" style="display: inline-block;
                                             margin-top: 20px;
                                             width: 50%;
                                             text-align: start;
                                             padding: 20px 40px;
                                             box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12),
                                                         0 1px 5px 0 rgba(0, 0, 0, 0.2);
                                             border-radius: 10px;">
                                        <div class="row">

                                            <div class="col-md-4 form-group">
                                                <div style="color: #2d3e52; font-weight: bold;"> {{ __('show.email') }}
                                                    :
                                                </div>
                                            </div>
                                            <div class="col-md-8 form-group">{{ $school->email_school }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <div style="color: #2d3e52; font-weight: bold;">{{ __('show.phone') }}
                                                    :
                                                </div>
                                            </div>
                                            <div class="col-md-8 form-group">{{ $school->phone }}</div>
                                        </div>
                                        @if(!empty( $school->fax) )
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <div style="color: #2d3e52; font-weight: bold;">{{ __('show.fax') }}
                                                        :
                                                    </div>
                                                </div>
                                                <div class="col-md-8 form-group">{{ $school->fax }}</div>
                                            </div>
                                        @endif
                                        @if(!empty( $school->website) )
                                            <div class="row">

                                                <div class="col-md-4 form-group">
                                                    <div
                                                        style="color: #2d3e52; font-weight: bold;">{{ __('show.website') }}
                                                        :
                                                    </div>
                                                </div>
                                                <div class="col-md-8 form-group"><a #f5f5f5
                                                                                    href="http://{{ $school->website }}">{{ $school->website }}</a>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <div style="color: #2d3e52; font-weight: bold;">{{ __('show.gender') }}
                                                    :
                                                </div>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                @if(in_array(0, $genderSchool))
                                                    <span
                                                        style="border: 1px solid rgba(34,41,47,.125); box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.08); padding: 0px 5px; font-weight: 600; color: #2d3e52; border-radius: 5px;">
                                            {{ __('show.female') }}</span>
                                                @endif
                                                @if(in_array(1, $genderSchool))
                                                    <span
                                                        style="border: 1px solid rgba(34,41,47,.125); box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.08); padding: 0px 5px; font-weight: 600; color: #2d3e52; border-radius: 5px;">
                                            {{ __('show.male') }}</span>
                                                @endif
                                                @if(in_array(2, $genderSchool))
                                                    <span
                                                        style="border: 1px solid rgba(34,41,47,.125); box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.08); padding: 0px 5px; font-weight: 600; color: #2d3e52; border-radius: 5px;">
                                            {{ __('show.mixed') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!empty( $school->facebook_link) ||!empty($school->instagram_link)||
                                !empty( $school->twitter_link)||!empty($school->linkedin_link))
                                    <div class="col-md-12" style="text-align: center">
                                        <h2 style="color: #ff6000">{{ __('show.follow') }}</h2>
                                        <div class="" style="display: inline-block;
                                             margin-top: 20px;
                                             text-align: center;
                                             padding: 6px 40px;
                                             box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12),
                                              0 1px 5px 0 rgba(0, 0, 0, 0.2);
                                             border-radius: 10px;">
                                            <div class="row">

                                                <div class="text-center center-block">
                                                    @if(!empty( $school->facebook_link) )
                                                        <a href="{{ $school->facebook_link}}" target="_blank"><i
                                                                class="fab fa-facebook-square fa-3x social"
                                                                style="color: #4267B2;"></i></a>
                                                    @endif
                                                    @if(!empty( $school->instagram_link) )
                                                        <a href="{{ $school->instagram_link}}" target="_blank"><i
                                                                class="fab fa-instagram-square fa-3x social"
                                                                style="color: #8a49a1;"></i></a>
                                                    @endif
                                                    @if(!empty( $school->twitter_link) )
                                                        <a href="{{ $school->twitter_link}}" target="_blank"><i
                                                                class="fab fa-twitter-square fa-3x social"
                                                                style="color: #1DA1F2;"></i></a>
                                                    @endif
                                                    @if(!empty( $school->linkedin_link) )
                                                        <a href="{{ $school->linkedin_link}}" target="_blank"><i
                                                                class="fab fa-linkedin fa-3x social"
                                                                style="color: #2867B2;"></i></a>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">

                                <style>
                                    .card {
                                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                                        transition: 0.3s;
                                        width: 100%;
                                    }

                                    .card:hover {
                                        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                                    }

                                    .container {
                                        padding: 2px 16px;
                                    }
                                </style>

                            </div>
                        </div>

                    </section>
                    <!-- Section: Live preview -->

                </div>

                <div class="col-xl-4 mb-4 mb-xl-0 order-0 order-md-12"
                     @if((app()->getLocale() == 'ar'))
                         style="direction: rtl; text-align: right; border-left: 7px solid #f5f5f5;">
                    @else
                        style="direction:ltr; text-align:left; border-right: 7px solid #f5f5f5;">
                    @endif
                    <br>
                    <style>
                        @media (max-width: 600px) {
                            .schoolLogo {
                                text-align: center !important;
                            }
                        }
                    </style>
                    <div class="row schoolLogo">
                        <div class="col-md-12" style="    text-align: center;">
                            <img class="rounded"
                                 style="box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.75);width: 160px;height:120px"
                                 src="{{ env('IMAGE_URL') .'storage/'. $school->school_logo }}"
                                 alt="">
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <h4 style="color: #2d3e52">{{(app()->getLocale() == 'en')?$school->name_en: $school->name_ar}}</h4>
                            <h6 class="text-muted">{{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}
                                , {{(app()->getLocale() == 'en')? $school?->city?->city_name_en :$school?->city?->city_name_ar}}
                                - {{(app()->getLocale() == 'en') ?$school?->region?->area_name_en:$school?->region?->area_name_ar }}</h6>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid rgba(76, 87, 102, .1);margin: 0 0 20px;"></div>
                    <div class="row">
                        <div class="col-md-12"
                             style="border-bottom: 1px solid rgba(76, 87, 102, .1); padding-bottom:20px; ">
                            <div class="scrollbar-warning" style="height: 230px; width: 100%; overflow-y: scroll;">
                                {!! (app()->getLocale() == 'en')?$school->school_details_en :$school->school_details_ar !!}
                            </div>
                        </div>
                    </div>
                    <br>

                    <style>
                        .a2a_svg.a2a_s__default {
                            border-radius: 16px;
                        }
                    </style>
                    <div class="row" style="padding: 10px 0px">
                        <div class="col-md-4"><h5
                                style="color:#ff6000; font-weight: bold; padding: 0px 10px;">{{ __('show.share_us') }}</h5>
                        </div>
                        <div class="col-md-8">
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="">
                                <a class="a2a_button_facebook z-depth-4 rounded " style="margin: 0px 5px;"></a>
                                <a class="a2a_button_twitter" style="margin: 0px 5px;"></a>
                                <a class="a2a_button_google_gmail" style="margin: 0px 5px;"></a>
                                <a class="a2a_button_whatsapp" style="margin: 0px 5px;"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8"
                     style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.11); padding: 20px;background: #fff;">
                    <h2 style="padding: 0px 0px 10px 0px; color: #1d556c;"> الأخبار</h2>
                    @foreach($news as $item)
                        <div class="card"
                             style="margin-top: 10px; border-radius: 10px !important; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">

                            <div class="card-body"
                                 style="{{ (app()->getLocale() == 'ar') ?'direction: rtl; text-align: right;' : 'direction: ltr; text-align: left;' }}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img
                                            src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/news/{{ $item['img'] }}"
                                            alt="Avatar"
                                            style="width: 380px; height: 110px; margin-top: 5px; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important; border-radius: 10px;">
                                    </div>
                                    <div class="col-md-9 container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>{{ (app()->getLocale() == 'en') ? $item['title_en']: $item['title_ar'] }}</h5>
                                            </div>
                                            <div
                                                class="col-md-12">{!! Illuminate\Support\Str::limit((app()->getLocale() == 'en') ? $item['text_en']: $item['text_ar'], $limit = 45, $end = '...') !!}</div>
                                            <div class="col-md-12"
                                                 style="{{ (app()->getLocale() == 'en') ?'text-align: right;' : 'text-align: left;' }}">
                                                <a href="/{{app()->getLocale()}}/showMore/{{ $item['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($item['title_en']) : trim($item['title_ar'])) }}"
                                                   class="btn btn-info"
                                                >{{ __('show.more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach
                    <h4 style="color: #5bc0de;cursor: pointer; display: none">المزيد</h4>

                </div>
                <div class="col-md-4">
                    @include('suppliers')
                    @include('ads')
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $('#carousel-thumb').carousel({
            interval: 3000
        });

        initMap();

        function initMap() {
            lat = parseFloat($("#map").attr("lat"));
            lng = parseFloat($("#map").attr("lng"));
// The location of Uluru
            var uluru = {lat: lat, lng: lng};
// The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 17, center: uluru});
// The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                "icon": '{{ asset('assets/images/school.png') }}',
                title: 'title'
            });
        }
    </script>
@endsection
