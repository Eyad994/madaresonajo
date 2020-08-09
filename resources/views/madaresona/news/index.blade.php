@extends('layouts.main')
@section('content')
    <div style="background: #f5f5f5">
        <div style="height: 200px"></div>
        <div class="container"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
            @else
                style="direction:ltr; text-align:left;">
            @endif
            <section class="section-base">
                <div class="row">
                    <div class="col-md-4">
                        <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;margin-bottom: 25px">
                            <div class="search-results-titlehome" style="text-align: center;float: right;width: 100%;">
                                بحث
                            </div>
                            <div class="input-group" style="direction: rtl;width: 100%;padding: 10px">
                                <input type="text" name="search_text" id="search_text" class="form-control"
                                       placeholder="بحث " style="border-radius: 0px;margin-right: -1px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" id="search_button" type="button"
                                            style="margin-right: -4px">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @include('suppliers')
                        @include('ads')
                    </div>
                    <div class="col-md-8" id="news_grid"
                         style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;padding: 20px;border-radius: 10px">
                        <h2 style="padding: 0px 0px 10px 0px; color: #1d556c;text-align: center;"> الأخبار</h2>
                            {{-- @foreach($news as $item)
                                 <div class="card"
                                      style="margin-top: 10px; border-radius: 10px !important; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <img src="@if($item['news_type'] == 1) {{ env('IMAGE_URL') }}/images/{{ $item['school_name'] }}/news/{{ $item['img'] }} @else {{ env('IMAGE_URL') }}/images/Main News/{{ $item['img'] }} @endif"
                                                      alt="Avatar"
                                                      style="width:380px; height: 140px; sbox-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.75); border-radius: 10px;">
                                             </div>
                                             <div class="col-md-9 container">
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                         <h5>{{ (app()->getLocale() == 'en') ? $item['title_en']: $item['title_ar'] }}</h5>
                                                     </div>
                                                     <div class="col-md-12">{!! Illuminate\Support\Str::limit((app()->getLocale() == 'en') ? $item['text_en']: $item['text_ar'], $limit = 45, $end = '...') !!}</div>
                                                     <div class="col-md-12"
                                                          style="{{ (app()->getLocale() == 'en') ?'text-align: right;' : 'text-align: left;' }}">
                                                         <a href="showMore/{{ $item['id'] }}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($item['title_en']) : trim($item['title_ar'])) }}"
                                                            #f5f5f5
                                                            class="btn btn-info"
                                                         >{{ __('show.more') }}</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            @endforeach--}}
                        <h4 style="color: #5bc0de;cursor: pointer; display: none">المزيد</h4>

                    </div>

                </div>

            </section>
        </div>
        <div style="height: 100px"></div>
    </div>
@endsection

@section('script')

    <script>

        $('#search_button').on('click', function () {
            var text = $('#search_text').val();
            $.ajax({
                type: "GET",
                url: '/ar/news_search/' + text,
                success: function (data) {
                    console.log(data);
                    $('#news_grid').html(data);
                }
            });
        })

    </script>

@endsection