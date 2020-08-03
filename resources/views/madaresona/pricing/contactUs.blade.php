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
    @endif

    {{--<hr class="space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mt-5">
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>--}}


    <div class="bg-contact100">
        <div class="container-contact100" style="background: #f5f5f5 !important;">
            <div class="container mt-5"
                 style="margin-bottom: 10px; padding: 0px;box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;border-radius: 10px;">
                <div id="map" style="height: 400px; width: 100%; border-radius: 10px;"></div>
            </div>
            <div class="wrap-contact100"
                 @if((app()->getLocale() == 'ar'))
                 style="direction: rtl; text-align: right;">
                @else
                    style="direction:ltr; text-align:left;">
                @endif
                <div class="row">
                    <div class="col-md-4" style="bottom: 15px;">
                        <div class="col-md-12" style="text-align: center">
                            <img src="{{ asset('contact/images/img-01.png') }}" style="height: 100px" alt="IMG">
                            <hr>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12" style="bottom: 20px;">
                                <h3 class="h4"><i class="fad fa-home" style="color: #ff6000"></i> العنوان</h3>
                                <p style="margin-top: 5px; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">عمان-الأردن الياسمين -شارع جبل
                                    مجمع المحتسب التجاري- بناء رقم 83 - الطابق الثاني</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12" style="bottom: 20px;">
                                <h3 class="h4"><i class="fad fa-phone" style="color: #ff6000"></i> الهاتف</h3>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962062006896</p>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962797902497</p>
                                <p style="margin-top: 5px; direction:ltr;{{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962790452034</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12" style="bottom: 20px; ">
                                <h3 class="h4"><i class="fad fa-fax" style="color: #ff6000"></i> فاكس</h3>
                                <p style="margin-top: 5px; direction:ltr; {{(app()->getLocale() == 'ar') ? 'margin-right:30px':'margin-left:30px'}}">+962062006896</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12" style="bottom: 20px;">
                                <h3 class="h4"><i class="fad fa-envelope" style="color: #ff6000"></i> البريد الالكتروني
                                </h3>
                                <p style="margin-top: 5px;{{(app()->getLocale() == 'ar') ? 'margin-right:30px;':'margin-left:30px;'}}">Info@madaresonajo.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <form class="contact100-form validate-form">
					<span class="contact100-form-title {{(app()->getLocale() == 'ar')?'text-right' :''}}">
						ارسل رسالة
					</span>
                            <h4 class="contact100-form-sub_title">لطلب المساعدة، من فضلك إملأ النموذج ادناه وسوف نقوم
                                بالرد في غضون 24 ساعة عمل</h4>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                <input class="input100" type="text" name="name" placeholder="الاسم">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-user" aria-hidden="true"></i>
						</span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                <input class="input100" type="text" name="email_user" placeholder="الهاتف ">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-phone" aria-hidden="true"></i>
						</span>
                            </div>
                            <div class="wrap-input100 validate-input"
                                 data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email_user" placeholder="البريد الاكتروني">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
							<i class="fad fa-envelope" aria-hidden="true"></i>
						</span>
                            </div>


                            <div class="wrap-input100 validate-input" data-validate="Message is required">
                                <textarea class="input100" name="message" placeholder="الرسالة ..."></textarea>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="container-contact100-form-btn">
                                <button class="contact100-form-btn">
                                    Send
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="contact/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

@section('script')
    <script>
        initMap();

        function initMap() {
            lat = 31.9151395;
            lng = 35.8865854;
            var uluru = {lat: lat, lng: lng};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 16, center: uluru});
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                "icon": '{{ asset('assets/images/school.png') }}',
                title: 'title'
            });
        }
    </script>
@endsection