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

                    <div class="card" style="margin-top: 10px; border-radius: 10px !important; box-shadow: 0 10px 15px rgba(0, 0, 0, .5);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="http://madaresonajo.com/access_files/upload_center/news_img_5f0fe6454aaf7.jpg"
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
                                            <a href="showMore/{{ $item['id'] }}" target="_blank"
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