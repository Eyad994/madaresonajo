@extends('layouts.main')

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <style>
        .d-block.w-100{
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
            box-shadow: 1px 3px 5px 0px rgba(0,0,0,0.75);

        &.active {
             border-bottom: 4px solid #fff;
         }
        }
    </style>
@section('content')
    <section class="section-base section-color align-center" style="background-color: white ">

        <div class="container">

            <h2 class="align-center">Lots of amazing features.</h2>
            <p class="align-center width-650">
                One of the most large and features rich templates on the market. </p>
            <hr class="space">
            <div class="row">

                <div class="col-xl-8 mb-4 mb-xl-0 order-1 order-md-12">

                    <section>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">{{ __('show.gallery') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" id="principle-tab" data-toggle="tab" href="#principle" role="tab" aria-controls="principle" aria-selected="false">{{ __('show.principle') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="discountForm-tab" data-toggle="tab" href="#discountForm" role="tab" aria-controls="discountForm" aria-selected="true">{{ __('show.discountForm') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="transportation-tab" data-toggle="tab" href="#transportation" role="tab" aria-controls="transportation" aria-selected="true">{{ __('show.transportation') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="maps-tab" data-toggle="tab" href="#maps" role="tab" aria-controls="maps" aria-selected="true">{{ __('show.maps') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="brochure-tab" data-toggle="tab" href="#brochure" role="tab" aria-controls="brochure" aria-selected="true">{{ __('show.brochure') }}</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " id="contactInfo-tab" data-toggle="tab" href="#contactInfo" role="tab" aria-controls="contactInfo" aria-selected="true">{{ __('show.contactInfo') }}</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">

                            {{-- ******************************************************************************************************************************** --}}

                            <!--Carousel Wrapper-->
                                <div class="container mt-5">
                                    <div class="carousel-container position-relative row">
                                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox" style="height: 450px">
                                                <?php $i = 0; ?>
                                                @foreach($gallery as $item)
                                                    @if($i == 0)
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}" >
                                                        </div>
                                                    @else

                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}" >
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
                                                        <li data-target="#carousel-thumb" data-slide-to="{{ $i }}" class="active">
                                                            <img class="d-block w-100" src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}"  class="img-fluid">
                                                        </li>
                                                    @else
                                                        <li data-target="#carousel-thumb" data-slide-to="{{ $i }}">
                                                            <img class="d-block w-100" src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}" class="img-fluid">
                                                        </li>
                                                    @endif
                                                    <?php $i++ ?>
                                                @endforeach
                                            </ol>
                                        </div>
                                        <script>
                                            $('#carousel-thumb').carousel({
                                                interval: 2000
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
                                                <div class="overflow-scroll" style="height: 450px; overflow-y: scroll; ">
                                                    {!! $school->principle_en !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="discountForm" role="tabpanel" aria-labelledby="discountForm-tab"></div>
                            <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab"></div>
                            <div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab"></div>
                            <div class="tab-pane fade" id="brochure" role="tabpanel" aria-labelledby="brochure-tab"></div>
                            <div class="tab-pane fade" id="contactInfo" role="tabpanel" aria-labelledby="contactInfo-tab"></div>
                        </div>

                    </section>
                    <!-- Section: Live preview -->

                </div>

                <div class="col-xl-4 mb-4 mb-xl-0 order-0 order-md-12" style="background: #f6f9fc">
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded" src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>{{ $school->name_en }}</h4>
                            <h6 class="text-muted">Jordan, {{ $school->city->city_name_en }} - {{ $school->region->area_name_en }}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="overflow-scroll" style="height: 400px; width: 85%; overflow-y: scroll; ">
                                {!! $school->school_details_en !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

    <script>
        document.documentElement.setAttribute("lang", "en");
        document.documentElement.removeAttribute("class");

    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f0cf05e633f30bf"></script>
