@extends('layouts.main')

@section('content')

    <div style="height: 100px"></div>
    <div class="container"
         @if((app()->getLocale() == 'ar'))
         style="direction: rtl; text-align: right;">
        @else
            style="direction:ltr; text-align:left;">
        @endif
        <section class="section-base">
            <div class="container mt-5">
                @foreach($news as $item)

                    <div class="card" style="margin-top: 10px; border-radius: 10px !important; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="@if($item['news_type'] == 1) {{ env('IMAGE_URL') }}/images/{{ $item['school_name'] }}/news/{{ $item['img'] }} @else {{ env('IMAGE_URL') }}/images/Main News/{{ $item['img'] }} @endif"
                                         alt="Avatar"
                                         style="width: 60%; margin-top: 20px; box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.75); border-radius: 10px;">
                                </div>
                                <div class="col-md-9 container">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <h5>{{ (app()->getLocale() == 'en') ? $item['title_en']: $item['title_ar'] }}</h5>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">{!! Illuminate\Support\Str::limit((app()->getLocale() == 'en') ? $item['text_en']: $item['text_ar'], $limit = 45, $end = '...') !!}</div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2">
                                            <a href="showMore/{{ $item['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($item['title_en']) : trim($item['title_ar'])) }}" #f5f5f5
                                               class="btn btn-info"
                                            >{{ __('show.more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        </section>
    </div>
    <div style="height: 100px"></div>
@endsection