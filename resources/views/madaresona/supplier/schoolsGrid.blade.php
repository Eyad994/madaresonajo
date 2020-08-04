<div class="container" style="padding: 0px !important;">
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
            @if(count($schools) == 0)
                <div class="col-md-5"></div>
                <div style="text-align: center">
                    <i class="fad fa-meh-blank" style="font-size: 100px; color: #f66001; margin-bottom:20px;"></i>
                    <h1 style="font-family: initial;"><b style="text-decoration: underline; color: red">{{ __('index.no') }}</b>{{ __('index.results') }}</h1>

                </div>
                @endif
        </div>
        {{--{!! $schools->links() !!}--}}
    </div>
</div>

<div class="row">
    <div class="col-md-12"></div>
</div>