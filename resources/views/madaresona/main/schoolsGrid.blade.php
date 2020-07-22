<div class="container" style="padding: 0px !important;">
    <hr class="space"/>
    <div class="infinite-scroll">
        <div class="row">
            @foreach($schools as $school)
                <div class="col-md-2" style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                    <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" data-href="#"
                         style="border: 1px #f1f4f9 solid">
                        <a class="img-box show-school" id="{{ $school->id }}"
                           href="school/{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}"
                           slug="{{ preg_replace('/[ ]+/', '-', trim($school->name_en)) }}">
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
                <div>
                    <h1><b style="text-decoration: underline; color: red">لا</b> يوجد نتائج</h1>
                </div>
                @endif
        </div>
        {{--{!! $schools->links() !!}--}}
    </div>
</div>

<div class="row">
    <div class="col-md-12"></div>
</div>