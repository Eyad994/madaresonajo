@extends('layouts.main')
@section('content')

    <section class="section-base">
        <div class="container pb-0">
            <h2 class="align-center"><span
                        style="text-decoration: underline; color: #1d556c">{{ count($specialSchools) }}</span> Special
                Schools</h2>
            <p class="align-center width-650">
                We are proud of all these schools. </p>
            <hr class="space"/>

            <div class="row ">
                <div class='col-lg-12 '>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

                    <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                @for($i=0; $i < count($specialSchools); $i++)
                                    @if($i == 0)
                                        <div class="carousel-item col-md-3  active">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}" title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                                        <img class="img-fluid mx-auto d-block"
                                                             style="width: 200px; height: 200px"
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
                                                    <a href="school/{{ preg_replace('/[ ]+/', '-', trim($specialSchools[$i]->name_ar)) }}" title="{{ $specialSchools[$i]->name_ar }}" class="thumb">
                                                        <img class="img-fluid mx-auto d-block"
                                                             style="width: 200px; height: 200px"
                                                             src="{{ env('IMAGE_URL') }}/images/{{$specialSchools[$i]->name_en}}/{{ $specialSchools[$i]->school_logo }}"
                                                             alt="slide 2">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <script>

                        $('#carouselExample').on('slide.bs.carousel', function (e) {


                            var $e = $(e.relatedTarget);
                            var idx = $e.index();
                            var itemsPerSlide = 4;
                            var totalItems = $('.carousel-item').length;

                            if (idx >= totalItems - (itemsPerSlide - 1)) {
                                var it = itemsPerSlide - (totalItems - idx);
                                for (var i = 0; i < it; i++) {
                                    // append slides to end
                                    if (e.direction == "left") {
                                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                                    }
                                    else {
                                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                                    }
                                }
                            }
                        });


                        $('#carouselExample').carousel({
                            interval: 2000
                        });


                        $(document).ready(function () {
                            /* show lightbox when clicking a thumbnail */
                            $('a.thumb').click(function (event) {
                                event.preventDefault();
                                var content = $('.modal-body');
                                content.empty();
                                var title = $(this).attr("title");
                                $('.modal-title').html(title);
                                content.html($(this).html());
                                $(".modal-profile").modal({show: true});
                            });

                        });
                    </script>


                </div>
            </div>
        </div>
    </section>
    <section class="section-base">
        <div class="container" style="padding: 0px !important;" id="schoolsGrid">
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
                                <a class="img-box show-school" id="{{ $school->id }}" href="school/{{ preg_replace('/[ ]+/', '-', trim($school->name_ar)) }}" slug="{{ preg_replace('/[ ]+/', '-', trim($school->name_ar)) }}">
                                    <img src="{{ env('IMAGE_URL') }}/images/{{ $school->name_en }}/{{ $school->school_logo }}"
                                         alt=""  style="width: 200px; height: 200px">
                                </a>
                                <div class="caption">
                                    <p style="text-align: center;">{{ $school->name_ar }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $schools->links() !!}
                <div class="row">
                    <div class="col-md-12"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-base section-color" style="margin-top: 20px">

        <div class="container">

            <div class="row ">
                <div class='col-lg-12'>
                    <table class="table table-grid table-border align-center table-full-border table-md-6 mce-item-table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Happy customers</h3>
                                        <div class="value text-lg"><span data-to="9000" data-speed="3000">9000</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Landing pages</h3>
                                        <div class="value text-lg"><span data-to="9" data-speed="3000">9</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Premium components</h3>
                                        <div class="value text-lg"><span data-to="80" data-speed="3000">80</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Navigation menus</h3>
                                        <div class="value text-lg"><span data-to="10" data-speed="3000">10</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Options</h3>
                                        <div class="value text-lg"><span data-to="500" data-speed="3000">500</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Documentation pages</h3>
                                        <div class="value text-lg"><span data-to="64" data-speed="3000">64</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Photoshop files</h3>
                                        <div class="value text-lg"><span data-to="25" data-speed="3000">25</span>
                                            <span> </span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-icon">
                                    <div><h3>Responsive</h3>
                                        <div class="value text-lg"><span data-to="100" data-speed="3000">100</span>
                                            <span>%</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base section-color" style=" ">


        <div class="container">

            <div class="row ">
                <div class='col-lg-12  '>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><h2
                                    class="themekit-header">Superior performance<br>with great speed and high scores.
                            </h2>
                            <p>Speed is everything, Codrop is built to develop high performance websites. We worked hard
                                to minimize the file size of scripts and styles and to avoid redundante codes. Only
                                lightweight plugins.</p><a class="btn-text"
                                                           href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK"
                                                           target="_blank" rel="noopener"
                                                           data-mce-href="https://gtmetrix.com/reports/templates.themekit.dev/Z0YhikoK">Check
                                seo score</a></div>
                        <div class="col-lg-6 col-md-6 align-right" data-anima="fade-right" data-time="1000"><img
                                    class="margin-23" src="{{ asset('assets/images/intro/seoa6e5.png?1570696809946') }}"
                                    alt=""
                                    data-mce-src="images/intro/seo.png"></div>
                    </div>
                    <hr class="space-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000"><img class="timer"
                                                                                                    src="{{ asset('assets/images/intro/themekita6e5.png?1570696809946') }}"
                                                                                                    alt=""
                                                                                                    data-mce-src="images/intro/themekit.png">
                        </div>
                        <div class="col-lg-6 col-md-6 order-sm-first align-left-sm align-right" data-anima="fade-right"
                             data-time="1000"><h2 class="themekit-header">Superior documentation with<br>everything you
                                need and more.</h2>
                            <p>Differentely by the other templates, that are only focused on design and demos, this
                                template is built with the developers in mind. You can customize this template truly
                                faster and without limitations.</p><a class="btn-text"
                                                                      href="https://themekit.dev/docs/code/main/"
                                                                      target="_blank" rel="noopener"
                                                                      data-mce-href="https://themekit.dev/docs/code/main/">View
                                documentation</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-base section-color align-center" style="background-color: white ">


        <div class="container">

            <h2 class="align-center">Lots of amazing features.</h2>
            <p class="align-center width-650">
                One of the most large and features rich templates on the market. </p>
            <hr class="space"/>
            <div class="row ">
                <div class='col-lg-12  '>
                    <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-xs="1"
                         data-anima="fade-bottom" data-timeline="asc" data-time="1000" data-timeline-time="300">
                        <div class="grid-box">
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i class="im-laptop-phone">&nbsp;</i>
                                    <div class="caption"><h2>Fully responsive</h2>
                                        <p>Responsive on all devices with responsive settings and classes.</p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i class="im-fountain-pen">&nbsp;</i>
                                    <div class="caption"><h2>Colors replacement</h2>
                                        <p>Replace all the colors of the template from one single css point.</p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i
                                            class="im-running">&nbsp;</i>
                                    <div class="caption"><h2>Blazing Fast</h2>
                                        <p>Superior performance, minimal js and css file sizes, great seo scores.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i
                                            class="im-facebook-2">&nbsp;</i>
                                    <div class="caption"><h2>Social feeds</h2>
                                        <p>Facebook and Twitter social feed with slider, scroll box and more.</p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i
                                            class="im-support">&nbsp;</i>
                                    <div class="caption"><h2>Premium support</h2>
                                        <p>Fast 24/7 premium support with 12h average max response time.</p></div>
                                </div>
                            </div>
                            <div class="grid-item anima">
                                <div class="cnt-box cnt-box-top-icon boxed align-center"><i class="im-coding">&nbsp;</i>
                                    <div class="caption"><h2>Developers oriented</h2>
                                        <p>Well written codes, extensive docs, minimal input and maximum output.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    <script type="text/javascript">

        $('ul.pagination').hide();
        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="https://media.giphy.com/media/swhRkVYLJDrCE/giphy.gif" alt="Loading..." />',
                padding: 5,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function () {
                    $('ul.pagination').remove();
                }
            });

            $('#searchForm').on('submit', function (e) {

                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        //$('.infinite-scroll').destroy();
                        $('#schoolsGrid').html(data);

                        /*$('.infinite-scroll').removeData('jscroll').jscroll.destroy();*/
                        var div = $('#schoolsGrid').offset().top;
                        $('body, html').animate({scrollTop: div});
                    }
                });
            })
        });

        $(document).on("click", '.show-school', function(event) {

            var slug = $(this).attr('slug');
            var cleanSlug = slug.replace("-/", "");

            $.ajax({
                url: '/school/'+cleanSlug,
                method: 'get',
                success: function (data) {
                    console.log(data);
                    $('.modal-body').html(data);
                    $('#modal').modal('show');
                    window.history.pushState("", "", '/'+slug);
                }
            });
        });

    </script>

    @include('modal')
@endsection
