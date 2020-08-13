
    <div class="infinite-scroll">
        <div class="row" style=" {{(app()->getLocale() == 'ar') ?'text-align: right; direction: rtl;':''}}">
            @foreach($schools as $school)
                <div class="col-md-2" style="margin-top: 20px;">
                    <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                    style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                        <a class="img-box {{--show-school--}}" id="{{ $school->id }}"
                           href="{{ app()->getLocale() }}/school-data/{{$school->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}"
                           slug="{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($school->name_en) : trim($school->name_ar)) }}">
                            <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                 alt="" style="width: 100%; height: 150px">
                        </a>
                        <div class="caption" style="background: #d6d8dc;">
                            <p style="text-align: center;">{{ $school->name_ar }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(count($schools) == 0)
                <div class="col-md-5"></div>
                <div style="text-align: center">
                    <div style="    width: 200px;background: #f8d7da;padding: 20px;border-radius: 5px;font-size: 25px;">
                                لا يوجد نتائج
                    </div>
                </div>
            @endif
        </div>
        {{--{!! $schools->links() !!}--}}
    </div>

<div class="row">
    <div class="col-md-12"></div>
</div>