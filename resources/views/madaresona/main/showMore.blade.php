@extends('layouts.main')

@section('content')
    <section class="section-base section-color align-center" style="background-color: white ">


        <h2 class="align-center">{{ $news->title_ar }}</h2>
        {{--<p class="align-center width-650">
            One of the most large and features rich templates on the market. </p>--}}
        <hr class="space">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="{{ env('IMAGE_URL') }}/images/{{ $schoolName }}/news/{{ $news->img }}" alt="">
            </div>
            <div class="col-md-4"></div>
        </div>

        <div style="height: 50px"></div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7" style="text-align: right">
                {!! $news->text_ar !!}
            </div>
        </div>

        <hr class="space">

    </section>
@endsection