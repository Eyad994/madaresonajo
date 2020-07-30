@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>

        .panel-heading{
            color: white;
            background: #1d556c;
        }

        .accordion-toggle{
            font-weight: bold;
        }
        /*#accordion .panel {
            border-radius: 10px;
            border: 0;
            margin-top: 0px;
        }

        #accordion a {
            display: block;
            padding: 10px 15px;
            border-bottom: 1px solid #fff;
            text-decoration: none;
        }

        #accordion .panel-heading a.collapsed:hover,
        #accordion .panel-heading a.collapsed:focus {
            background-color: #ff6000;
            color: white !important;
            transition: all 0.2s ease-in;
        }

        #accordion .panel-heading a.collapsed:hover::before,
        #accordion .panel-heading a.collapsed:focus::before {
            color: white;
        }

        #accordion .panel-heading {
            padding: 0;
            border-radius: 0px;
            text-align: center;
        }

        #accordion .panel-heading a:not(.collapsed) {
            color: white;
            background-color: #2d3e52;
            transition: all 0.2s ease-in;
        }

        !* Add Indicator fontawesome icon to the left *!
        #accordion .panel-heading .accordion-toggle::before {
            font-family: 'FontAwesome';
            content: '\f00d';
            float: left;
            color: white;
            font-weight: lighter;
            transform: rotate(0deg);
            transition: all 0.2s ease-in;
        }

        #accordion .panel-heading .accordion-toggle.collapsed::before {
            color: #444;
            transform: rotate(-135deg);
            transition: all 0.2s ease-in;
        }*/
        .faq-title
        {
            color: #2d3e52;
            font-weight: bolder;
            font-size: 20px;
            padding: 10px 0px;
        }

    </style>
    <div style="margin-top: 100px"></div>

    <div class="section-base">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <div class="container" @if((app()->getLocale() == 'ar'))
        style="direction: rtl; text-align: right;">
            @else
                style="direction:ltr; text-align:left;">
            @endif
            <div id="accordion" class="panel-group">
                <p class="faq-title">{{ __('faq.type1') }}</p>
                @foreach($faqs1 as $faq)
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBody{{$faq->id}}" class="accordion-toggle" data-toggle="collapse"
                                   data-parent="#accordion">{{ app()->getLocale() == 'ar' ? $faq->question_ar : $faq->question_en }}</a>
                            </h4>
                        </div>
                        <div id="panelBody{{$faq->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{!! app()->getLocale() == 'ar' ? $faq->answer_ar : $faq->answer_en !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


                <p class="faq-title">
                        {{ __('faq.type2') }}
                </p>
                @foreach($faqs2 as $faq)
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBody{{$faq->id}}" class="accordion-toggle" data-toggle="collapse"
                                   data-parent="#accordion">{{ app()->getLocale() == 'ar' ? $faq->question_ar : $faq->question_en }}</a>
                            </h4>
                        </div>
                        <div id="panelBody{{$faq->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{!! app()->getLocale() == 'ar' ? $faq->answer_ar : $faq->answer_en !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <p class="faq-title">{{ __('faq.type3') }}</p>
                @foreach($faqs3 as $faq)
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBody{{$faq->id}}" class="accordion-toggle" data-toggle="collapse"
                                   data-parent="#accordion">{{ app()->getLocale() == 'ar' ? $faq->question_ar : $faq->question_en }}</a>
                            </h4>
                        </div>
                        <div id="panelBody{{$faq->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{!! app()->getLocale() == 'ar' ? $faq->answer_ar : $faq->answer_en !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <p class="faq-title">{{ __('faq.type4') }}</p>
                @foreach($faqs4 as $faq)
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBody{{$faq->id}}" class="accordion-toggle" data-toggle="collapse"
                                   data-parent="#accordion">{{ app()->getLocale() == 'ar' ? $faq->question_ar : $faq->question_en }}</a>
                            </h4>
                        </div>
                        <div id="panelBody{{$faq->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{!! app()->getLocale() == 'ar' ? $faq->answer_ar : $faq->answer_en !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
    </div>

    <div style="margin-top: 50px"></div>
@endsection