@extends('layouts.main')
<head>
    <title>{{(app()->getLocale() == 'ar') ? 'دليل مدارسنا التعليمي | اشترك الان' : 'Our Schools Educational Guide | subscribe now'}}</title>
     <meta name="description" itemprop="description" content="دليل مدارس الاردن , دليل المراكز التعليمية الاردن, دليل حضانات الاردن , دليل روضات الاردن , دليل المدارس الخاصة عمان">
     
    
    <meta property="og:title" content="{{(app()->getLocale() == 'ar') ? 'دليل مدارسنا التعليمي | اشترك الان' : 'Our Schools Educational Guide | subscribe now'}}">
    <meta property="og:description" content="دليل مدارس الاردن , دليل المراكز التعليمية الاردن, دليل حضانات الاردن , دليل روضات الاردن , دليل المدارس الخاصة عمان">
    <meta property="og::url" content="https://madaresonajo.com/{{app()->getLocale()}}/newSubscription">
    <meta property="og:image" content="https://madaresonajo.com/assets/images/favicon.png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
</head>

@section('content')



    <link rel="icon" type="image/png" href="{{ asset('contact/images/icons/favicon.ico') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('contact/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('contact/css/main.css') }}">
    @if((app()->getLocale() == 'ar'))
        <link rel="stylesheet" type="text/css" href="{{ asset('contact/css/main_ar.css') }}">
    @endif>

    <div class="contact100" style="">
        <div class="container-contact100" style="background: #f5f5f5 !important; padding-top: 170px;">
            <div class="wrap-contact100"
                 @if((app()->getLocale() == 'ar'))
                 style="direction: rtl; text-align: right;">
                @else
                    style="direction:ltr; text-align:left;">
                @endif
                <div class="row">
                   @if(Session::has('success'))
                       <div class="col-md-12">
                           <p class="alert alert-info">{{ Session::get('success') }}</p>
                       </div>
                       @endif
                    <div class="col-md-4" style="bottom: 15px;">
                        <div class="col-md-12" style="text-align: center;margin-bottom: 40px ">
                            <img src="{{ asset('assets/images/subscription.jpg') }}" style="height: 200px; width: 200px;box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.75);
    border-radius: 10px;" alt="IMG">
                        </div>
                        @include('address_info')
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <form class="contact100-form validate-form" action="{{ route('newSubscription', app()->getLocale()) }}" method="POST">
                            @csrf
					<span class="contact100-form-title {{(app()->getLocale() == 'ar')?'text-right' :''}}" style="color:#1d556c;">
						{{__('index.school_add')}}
					</span>
                            <h4 class="contact100-form-sub_title" >{{__('index.school_add_tex')}}</h4>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="text" name="school_name" placeholder="{{__('index.name_school')}}" value="{{ old('school_name') }}">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-user" aria-hidden="true"></i>
						</span>
                            </div>
                            @if($errors->has('school_name'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('school_name') }}</div>
                            @endif
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="text" name="contact_name" placeholder=" {{__('index.contact_name')}}" value="{{ old('contact_name') }}">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-people-arrows" aria-hidden="true"></i>
						</span>
                            </div>
                            @if($errors->has('contact_name'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('contact_name') }}</div>
                            @endif
                            <div class="wrap-input100 validate-input"
                                 data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email_user" placeholder="{{__('index.email')}}" value="{{ old('email_user') }}">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-envelope" aria-hidden="true"></i>
						</span>
                            </div>
                            @if($errors->has('email_user'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('email_user') }}</div>
                            @endif
                            <div class="wrap-input100 validate-input"
                                 data-validate="رقم هاتف فعال">
                                <input class="input100" type="text" name="phone_number" placeholder="{{__('index.phone')}}" value="{{ old('phone_number') }}">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-phone" aria-hidden="true"></i>
						</span>
                            </div>
                            @if($errors->has('phone_number'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('phone_number') }}</div>
                            @endif

                            <div class="wrap-input100 validate-input" >
                                <textarea class="input100" name="message" placeholder=" {{__('index.school_address')}} ..."> {{ old('message') }}</textarea>
                                <span class="focus-input100"></span>
                            </div>
                            @if($errors->has('message'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('message') }}</div>
                            @endif

                            <div class="container-contact100-form-btn">
                                <button type="submit" class="contact100-form-btn">
                                    {{__('index.send')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>


@endsection

<!--===============================================================================================-->
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script src="{{ asset('contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('contact/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('contact/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('contact/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('contact/js/main.js') }}"></script>
