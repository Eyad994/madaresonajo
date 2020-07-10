<div class="container" style="padding: 0px !important;">
    <hr>
    <h2 class="align-center">14 truly unique inner pages.</h2>
    <p class="align-center width-650">
        All our pages are unique and carefully designed to give you the maxium value. </p>
    <hr class="space"/>
    <div class="infinite-scroll">
        <div class="row">
            @foreach($schools as $school)
                <div class="col-md-2" style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                    <div class="cnt-box cnt-box-info boxed" data-href="#"
                         style="box-shadow: 0px 1px, 0em 0 0.4em #1d556c;">
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
        </div>
        {{--{!! $schools->links() !!}--}}
    </div>
</div>

<div class="row">
    <div class="col-md-12"></div>
</div>