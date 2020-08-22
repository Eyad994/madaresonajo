@extends('layouts.main')

@section('content')
    <style>
        #terms_and_conditinos {
            background: #fff;
            max-width: 900px;
            margin: 0px auto;
            padding: 20px 10px;
        }

        #terms_and_conditinos p {
            font-size: 15px;
            margin: 10px;
            line-height: 1.8;
            text-align: justify;
            color: #666;
        }

        #terms_and_conditinos li {
            margin: 10px;
            text-align: justify;
            color: #666;
        }
    </style>
    <div class="container-contact100" style="background: #f5f5f5 !important; padding-top: 170px; padding-bottom: 100px;">
        <div id="terms_and_conditinos" style="text-align: right; direction: rtl; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.38); border-radius: 5px;">

            <h2 style="text-align: center; padding-bottom: 20px; color: #ff7f27; font-weight: bold;">  {{__('index.vision')}}</h2>
            <p>
                {{__('index.vision_txt')}}
            </p>
        </div>
    </div>
@endsection