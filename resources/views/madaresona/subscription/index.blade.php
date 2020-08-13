@extends('layouts.main')

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
                        <div class="row mb-10">
                            <div class="col-md-12" style="bottom: 20px; ">
                                <h3 class="h4"><i class="fad fa-home" style="color: #ff6000"></i> العنوان</h3>
                                <p style="margin-top: 5px; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">عمان-الأردن الياسمين -شارع جبل عرفات
                                    مجمع المحتسب التجاري- بناء رقم 83 - الطابق الثاني</p>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12" style="bottom: 20px;">
                                <h3 class="h4"><i class="fad fa-phone" style="color: #ff6000"></i> الهاتف</h3>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962062006896</p>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962797902497</p>
                                <p style="margin-top: 5px; direction:ltr;{{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962790452034</p>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12" style="bottom: 20px; ">
                                <h3 class="h4"><i class="fad fa-fax" style="color: #ff6000"></i> فاكس</h3>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962062006896</p>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12" style="bottom: 20px;">
                                <h3 class="h4"><i class="fad fa-envelope" style="color: #ff6000"></i> البريد الالكتروني
                                </h3>
                                <p style="margin-top: 5px;{{(app()->getLocale() == 'ar') ? 'margin-right:30px;':'margin-left:30px;'}}">Info@madaresonajo.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <form class="contact100-form validate-form" action="{{ route('newSubscription', app()->getLocale()) }}" method="POST">
                            @csrf
					<span class="contact100-form-title {{(app()->getLocale() == 'ar')?'text-right' :''}}" style="color:#1d556c;">
						اضافة مدرستك
					</span>
                            <h4 class="contact100-form-sub_title" >لتصبح مدرستكم عضواً لدى مدارسنـا يرجى أكمال النموذج التالي ليتمكن مندوبينا التواصل معكم في أٌقرب وقت ممكن
                                </h4>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="text" name="school_name" placeholder="اسم المدرسة" value="{{ old('school_name') }}">
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
                                <input class="input100" type="text" name="contact_name" placeholder="اسم جهة الاتصال " value="{{ old('contact_name') }}">
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
                                <input class="input100" type="text" name="email_user" placeholder="البريد الاكتروني" value="{{ old('email_user') }}">
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
                                <input class="input100" type="text" name="phone_number" placeholder="الهاتف" value="{{ old('phone_number') }}">
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
                                <textarea class="input100" name="message" placeholder=" عنوان المدرسة التفصيلي ..."> {{ old('message') }}</textarea>
                                <span class="focus-input100"></span>
                            </div>
                            @if($errors->has('message'))
                                <div class="error"
                                     style="color: red; padding: 0px 20px 5px 20px;">
                                    * {{ $errors->first('message') }}</div>
                            @endif

                            <div class="container-contact100-form-btn">
                                <button type="submit" class="contact100-form-btn">
                                    ارسال
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
