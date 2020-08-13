@extends('layouts.main')
<meta property="og:url"           content="{{ env('MADARESONA_URL') }}/{{ app()->getLocale() }}/showMore/{{ $news->id }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($news->title_en) : trim($news->title_ar)) }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{(app()->getLocale() == 'en') ? $news->title_en :$news->title_ar}}" />
{{--<meta property="og:description"   content="{!! (app()->getLocale() == 'en') ? $news->text_en: $news->text_ar!!}" />--}}
<meta property="og:image"         content="@if($news->news_type == 1) {{ env('IMAGE_URL') }}/images/{{ $schoolName }}/news/{{ $news->img }} @else {{ env('IMAGE_URL') }}/images/Main News/{{ $news->img }} @endif" />
<meta property="og:image:width" content="400">
<meta property="og:image:height" content="300">
@section('content')
    <section class="section-base section-color"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
        @else
            style="direction:ltr; text-align:left;">
        @endif

        <div class="container">

            <div class="title_news rounded"
                 style="margin-top: 25px; background-color: #fff;  padding: 15px 50px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                <h2 style="font-weight: bold">{{(app()->getLocale() == 'en') ? $news->title_en :$news->title_ar}}</h2>
                <p style="border: 2px solid #eaeaea;"></p>
                <div style="">
                    {!! (app()->getLocale() == 'en') ? $news->text_en: $news->text_ar!!}
                </div>
                <div class="row">
                    <div class="col-md-12 " style="text-align: center; margin-bottom: 10px; ">
                        <img class="rounded"
                             style="width: 50%;max-height: 300px;box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important; "
                             src="@if($news->news_type == 1) {{ env('IMAGE_URL') }}/images/{{ $schoolName }}/news/{{ $news->img }} @else {{ env('IMAGE_URL') }}/images/Main News/{{ $news->img }} @endif"
                             alt="">
                    </div>

                </div>
                <p style="border: 2px solid #eaeaea;"></p>
                <hr class="visible-xs visible-sm">
                <span>{{__('showMore.date_created')}}</span>
                <span id="fb-root" style="float: left;">
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <!-- Your share button code -->
    <div class="fb-share-button"
         data-href="{{ env('MADARESONA_URL') }}/{{ app()->getLocale() }}/showMore/{{ $news->id }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($news->title_en) : trim($news->title_ar)) }}"
         data-layout="button" data-size="small">
    </div>
                </span>
                <time>
                    <i class="fad fa-clock"></i>
                    {{ $news->created_at->format('d m Y - g:i A')}}
                </time>
            </div>
            @if(isset($news->youtube))
                <div class="rounded" style="margin-top: 15px; text-align: center; ">
                    <iframe class="rounded" width="75%" height="400px"
                            src="https://www.youtube.com/embed/{{$news->youtube}}"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                             picture-in-picture" allowfullscreen></iframe>

                </div>
            @endif

            @if(isset($relatedNews) && count($relatedNews) > 0)
                <h2 style="text-align: center; margin-top: 10px">أخبار ذات صلة</h2>
                <div class="row">

                    @foreach($relatedNews as $item)
                        <div class="col-lg-2 d-flex align-items-stretch">
                            <div class="card" style="width:250px; border-radius: 10px;">
                                <img class="card-img-top" style="height: 150px !important;"
                                     src="@if($item->news_type == 1) {{ env('IMAGE_URL') }}/images/{{ $item['school']['name_en'] }}/news/{{ $item->img }} @else {{ env('IMAGE_URL') }}/images/Main News/{{ $item->img }} @endif"
                                     alt="img">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{!! Illuminate\Support\Str::limit((app()->getLocale() == 'en') ? $item['title_en']: $item['title_ar'], $limit = 45, $end = '...') !!}</h5>
                                    <a href="/{{ app()->getLocale() }}/showMore/{{ $item['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($item['title_en']) : trim($item['title_ar'])) }}"
                                       class="btn btn-secondary mt-auto" >المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>

        <hr class="space">
        </div>
    </section>

    <div ></div>

@endsection
