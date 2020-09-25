@extends('layouts.main')

@section('content')
    <section class="section-base" style="margin-bottom: 50px; margin-top: 150px">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8" style="text-align: center; font-size:30px; margin-bottom: 20px;color: #1d556c;">  الرجاء اختيار مدرستك </div>
            <div class="col-md-3"></div>

        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class=" fade-left" style="padding: 0px !important;" id="schoolsGrid">
                    <div class="infinite-scroll">
                        <div class="row" style="{{(app()->getLocale() == 'ar') ?'text-align: right; direction: rtl;':''}}">
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school1">
                                        <img src="{{ asset('learning/1.png') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">مدرسة وروضة الرقابه الذكيه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school2">
                                        <img src="{{ asset('learning/2.png') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">روضة ومدرسة نادي السباق النموذجيه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school3">
                                        <img src="{{ asset('learning/3.png') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">مدرسة بناء العزم النموذجيه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school4">
                                        <img src="{{ asset('learning/4.jpeg') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">روضة ومدارس طبربور الدوليه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school5">
                                        <img src="{{ asset('learning/5.jpeg') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">روضة ومدارس الرؤيا الثاقبه الدوليه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school6">
                                        <img src="{{ asset('learning/6.jpeg') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">روضة ومدرسة ابناء القدس التعليميه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school7">
                                        <img src="{{ asset('learning/7.jpeg') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">مدارس طلائع الابداع العالميه</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"
                                 style="margin-top: 20px;">  {{--width: 240px; margin-left: 120px;--}}
                                <div class="cnt-box cnt-box-info boxed z-depth-4 rounded" {{--data-href="#"--}}
                                style="border: 1px #fff solid; box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;">
                                    <a class="img-box" id="" href="https://www.jothings.com/Schools/school8">
                                        <img src="{{ asset('learning/8.jpeg') }}"
                                             alt="" style="width: 100%; height: 140px;">
                                    </a>
                                    <div class="caption" style="background: #d6d8dc24;">
                                        <p style="text-align: center;">روضة ومدرسة الطالب الاول النموذجيه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-top: 20px">
                @include('ads')
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </section>
@endsection