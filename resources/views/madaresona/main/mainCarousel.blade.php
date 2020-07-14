<div id="carouselIndex" class="carousel slide" data-ride="carousel" data-interval="9000">
    <div class="carousel-inner row w-100 mx-auto" style="padding-bottom: 10px;" role="listbox">

        @for($i=0; $i < count($specialSchools); $i++)
            @if($i == 0)
                <div class="carousel-item col-md-3  active z-depth-3 rounded">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}"
                               title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                <img class="img-fluid mx-auto d-block z-depth-3 rounded"
                                     style="width: 200px; height: 200px;    border: 1px #f1f4f9 solid;  webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);}"
                                     src="{{ env('IMAGE_URL') }}/images/{{$specialSchools[$i]->name_en}}/{{ $specialSchools[$i]->school_logo }}"
                                     alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}"
                               title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                <img class="img-fluid mx-auto d-block z-depth-3 rounded"
                                     style="width: 200px; height: 200px; border: 1px #f1f4f9 solid;  webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);"
                                     src="{{ env('IMAGE_URL') }}/images/{{$specialSchools[$i]->name_en}}/{{ $specialSchools[$i]->school_logo }}"
                                     alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next text-faded" href="#carouselIndex" role="button"
       data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>