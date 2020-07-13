<div class="container" style="padding: 0px !important;">
    <hr>
    <h2 class="align-center">14 truly unique inner pages.</h2>
    <p class="align-center width-650">
        {{ __('all.index') }} </p>
    <hr class="space"/>
    <div class="infinite-scroll">
        <div class="row">
            @foreach($schools as $school)
                <div class="col-md-2" style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                    <div class="cnt-box cnt-box-info boxed z-depth-4 rounded"  data-href="#">
                        <a class="img-box" href="#" data-mce-href="#">
                            <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                 alt="" data-mce-src="images/image-9.jpg" style="width: 200px; height: 200px">
                        </a>
                        <div class="caption">
                            <p style="text-align: center;">{{ $school->name_ar }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(count($schools) == 0)
                <div class="col-md-4"></div>
                <div>
                    <h1><b style="text-decoration: underline;">No</b> schools was found</h1>
                </div>
                @endif
        </div>
        {{--{!! $schools->links() !!}--}}
    </div>
</div>

<div class="row">
    <div class="col-md-12"></div>
</div>