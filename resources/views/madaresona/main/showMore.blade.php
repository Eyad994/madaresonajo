@extends('layouts.main')
@section('content')
    <section class="section-base section-color"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
        @else
            style="direction:ltr; text-align:left;">
        @endif
        <div class="container">
            <div class="title_news rounded" style="margin-top: 25px; background-color: #fff;  padding: 15px 50px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                <h2 style="font-weight: bold">{{(app()->getLocale() == 'en') ? $news->title_en :$news->title_ar}}</h2>
                <p style="border: 2px solid #eaeaea;"></p>
                <hr class="visible-xs visible-sm">
                <span>{{__('showMore.date_created')}}</span>
                <time>
                    <i class="fad fa-clock"></i>
                        {{ $news->created_at->format('d M Y - g:i:s A')}}
                </time>
            </div>
            <div class="row">
                <div class="col-md-12 " style="padding: 15px; text-align: center; ">
                    <img class="rounded" style="width: 50%;max-height: 300px;box-shadow: 0 10px 15px rgba(0, 0, 0, .5); "
                         src="@if($news->news_type == 1) {{ env('IMAGE_URL') }}/images/{{ $schoolName }}/news/{{ $news->img }} @else {{ env('IMAGE_URL') }}/images/news/{{ $news->img }} @endif"
                         alt="">
                </div>

            </div>

            <div class="rounded"
                 style="background-color: #fff; padding: 15px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                {!! (app()->getLocale() == 'en') ? $news->text_en: $news->text_ar!!}
            </div>


            @if(isset($news->youtube))
                <div class="rounded" style="margin-top: 15px; text-align: center; ">
                    <iframe class="rounded" width="75%" height="400px" src="https://www.youtube.com/embed/{{$news->youtube}}"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                             picture-in-picture" allowfullscreen></iframe>

                </div>
        </div>
        @endif

        <hr class="space">
        </div>
    </section>
@endsection