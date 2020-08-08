@extends('layouts.main')
    <section class="section-base" style="margin-bottom: 20px; padding-top:100px ">
        @php $dir = (app()->getLocale() == 'ar') ?"direction: rtl;":"direction: ltr;" @endphp
        <div class="container" style="{{$dir}}" >
            <div class="row">
                <div id="main" class="col-md-9">
                    <div id="cruise-features" class="tab-container">
                        <ul class="tabs">

                            <li id="Suppliers-Overview-li" class="active"><a href="#Suppliers-Overview-Tab" data-toggle="tab">معلومات عامة</a></li>

                            <li id="Suppliers-Contacts-li"><a href="#Suppliers-Contacts-Tab" data-toggle="tab">مراسلة المورد</a></li>
                            <li id="Suppliers-Products-li"><a href="#Suppliers-Products-Tab" data-toggle="tab">المنتجات</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="Suppliers-Overview-Tab">
                                <h4 id="ctl00_ContentPlaceHolder1_bCompanyNAme" class="box-title" style="text-align: right;font-size: 20px;font-weight: bold;">
                                    Abu Moujeh Engineering and Construction
                                </h4>

                                <hr style="margin: 20px 0">
                                <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                    <article class="image-box box cruise listing-style1 photo table-cell col-sm-4">
                                        <br>
                                        <br>
                                        <figure>
                                            <img src="https://www.tenderjo.com/DataFiles/LOGO/AbuMoujehEngineeringandConstruction20160526100800Abu-Moujeh-Engineering-and-Construction.jpg" id="ctl00_ContentPlaceHolder1_imgLogoCompany" width="270" height="160" style="margin: 5px; max-width: 270px; ">
                                        </figure>

                                        <div class="details">
                                            <h4 id="ctl00_ContentPlaceHolder1_bGM" class="box-title">م. مهند ابوموجة</h4>
                                            <small><i class="soap-icon-places"></i>&nbsp;<span id="ctl00_ContentPlaceHolder1_bCountry">الاردن</span></small>
                                            ،
                                            &nbsp;
                                            <small><i class="soap-icon-departure"></i>&nbsp;<span id="ctl00_ContentPlaceHolder1_bCity">عمان</span></small>


                                            <div class="feedback">
                                                <div title="" class="five-stars-container" data-toggle="tooltip" data-placement="bottom" data-original-title="4 stars"><span class="five-stars" style="width: 91%;"></span></div>
                                                <span class="review"><b>270</b> التقييمات</span>
                                            </div>
                                        </div>

                                        <a href="#Suppliers-Contacts-Tab" onclick="TapActive()" data-toggle="tab" class="goto-writereview-pane button green btn-small full-width">مراسلة المورد</a>

                                        <div class="clerar">
                                            <br>
                                        </div>
                                        <ul class="social-icons full-width">
                                            <li class="facebook"><a style="padding-top: 7px" href="DataFiles/Product/201401191537191.jpg" id="ctl00_ContentPlaceHolder1_txtfacebooklink" title="" target="_blank" data-toggle="tooltip" data-original-title="facebook"><i class="soap-icon-facebook"></i></a></li>
                                            <li class="twitter"><a style="padding-top: 7px" href="DataFiles/Product/201401191537332.jpg" id="ctl00_ContentPlaceHolder1_txttwitterlink" title="" target="_blank" data-toggle="tooltip" data-original-title="twitter"><i class="soap-icon-twitter"></i></a></li>
                                            <li class="linkedin"><a style="padding-top: 7px" href="DataFiles/Product/201401191538453.jpg" id="ctl00_ContentPlaceHolder1_txtInstegramlink" title="" target="_blank" data-toggle="tooltip" data-original-title="instagram"><i class="soap-icon-instagram"></i></a></li>
                                            <li class="linkedin"><a style="padding-top: 7px" href="DataFiles/Product/AbuMoujehEngineeringandConstruction201401191539174.jpg" id="ctl00_ContentPlaceHolder1_txtLinkedinlink" title="" target="_blank" data-toggle="tooltip" data-original-title="linkedin"><i class="soap-icon-linkedin"></i></a></li>
                                            <li class="googleplus" ><a style="padding-top: 7px" href="DataFiles/Product/AbuMoujehEngineeringandConstruction201401191539395.jpg" id="ctl00_ContentPlaceHolder1_txtGooglePluselink" title="" target="_blank" data-toggle="tooltip" data-original-title="googleplus"><i class="soap-icon-googleplus"></i></a></li>

                                        </ul>

                                    </article>
                                    <div class="table-cell col-sm-8">


                                        <div class="travelo-box contact-us-box">

                                            <ul class="contact-address">
                                                <li class="address" style="padding-top: 0px;text-align: right">
                                                    <i class="soap-icon-address circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">العنوان</h5>

                                                    <p id="ctl00_ContentPlaceHolder1_bAddress">عمان- الجويدة-ش 60 - مقابل صوامع حبوب الجويدة</p>
                                                    <p id="ctl00_ContentPlaceHolder1_bBOX" style="margin-top: 0px"> 925 عمان 11592 الاردن</p>
                                                </li>
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-address circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">الهاتف</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bPhone">0096264166064</p>
                                                </li>
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-phone circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">فاكس</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bFax">0096264166063</p>
                                                </li>
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-phone circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">الهاتف النقال</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bMobile">00962799919542</p>
                                                </li>
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-message circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">البريد الإلكتروني</h5>

                                                    <p id="ctl00_ContentPlaceHolder1_bEmail">info@abu-moujeh.com</p>
                                                </li>
                                                <li class="address" style="text-align: right">
                                                    <i class="soap-icon-globe circle" style="padding: 7px"></i>
                                                    <h5 class="title" style="margin-top: 0px;font-size: 18px">الموقع الالكتروني</h5>
                                                    <p id="ctl00_ContentPlaceHolder1_bWebsite">www.abu-moujeh.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="long-description" style="direction: rtl;text-align: right;">
                                    <h4 style="font-weight: bold">نظرة عامة</h4>
                                    <p id="ctl00_ContentPlaceHolder1_bDeitiles" style="text-align: justify;margin-top: 0px">بدأت الشركة اعمالها في مجالات الهندسه والمقاولات والانشاءات المعدنية في الاردن بتميز وحرفيه عاليه ومواصفات عالمية باعمالها المتنوعه في مختلف القطاعات الحكوميه والعسكريه والمدنيه وحازت على رضا عملائها بشهادات تقدير وتميز نفخر ونعتز بها.</p>
                                </div>
                                <div style="width: 100%">
                                    <h4 style="font-weight: bold;text-align: right">المنتجات والخدمات</h4>
                                    <span class="info-success" style="float: right;margin-right: 10px"> تصميم وانشاء الهناجر والمكاتب الهندسية</span>
                                    <span class="info-success" style="float: right;margin-right: 10px"> تصميم وبناء البريقاب</span>
                                    <span class="info-success" style="float: right;margin-right: 10px">الاعمال الخشبيه الخاصه و  اعمال الفيبر جلاس</span>
                                    <span class="info-success" style="float: right;margin-right: 10px">كافة الاشغال المعدنية</span>
                                </div>
                            </div>
                            <div class="tab-pane" id="Suppliers-Contacts-Tab">
                                <div class="booking-section">

                                    <div class="person-information" style="text-align: right;">
                                        <h2>الرجاء اكمال النموذج ادناه لمراسة المورد</h2>
                                        <hr style="margin: 20px 0">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-5">
                                                <span>الاسم</span>
                                                <span id="ctl00_ContentPlaceHolder1_txtEventsNameValidator" class="errorlbl pull-right" style="color:Red;visibility:hidden;">حقل مطلوب</span>
                                                <input name="ctl00$ContentPlaceHolder1$txtName" type="text" id="ctl00_ContentPlaceHolder1_txtName" class="input-text full-width">


                                            </div>
                                            <div class="col-sm-6 col-md-5">
                                                <span>البريد الإلكتروني</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" class="errorlbl pull-right" style="color:Red;visibility:hidden;">حقل مطلوب</span>
                                                <input name="ctl00$ContentPlaceHolder1$txtEMAIL" type="text" id="ctl00_ContentPlaceHolder1_txtEMAIL" class="input-text full-width">
                                                <span id="ctl00_ContentPlaceHolder1_RegularExpressionValidator1" class="errorlbl" style="color:Red;visibility:hidden;">البريد الإلكتروني غير صحيح</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <span>الموضوع</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2" class="errorlbl pull-right" style="color:Red;visibility:hidden;">حقل مطلوب</span>
                                                <input name="ctl00$ContentPlaceHolder1$txtSubject" type="text" id="ctl00_ContentPlaceHolder1_txtSubject" class="input-text full-width">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-hotel">
                                        <div class="form-group row">
                                            <div class="col-md-10" style="text-align: right">
                                                <span> ادخل محتوى الرسالة</span>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3" class="errorlbl pull-right" style="color:Red;visibility:hidden;">حقل مطلوب</span>
                                                <textarea name="ctl00$ContentPlaceHolder1$txtBody" rows="10" cols="20" id="ctl00_ContentPlaceHolder1_txtBody" class="full-width"></textarea>
                                                <small>الحد الاعلى 600 حرف</small>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="full-width">
                                            <div class="col-md-10">
                                                <div id="reCAPTCHA"><div><iframe src="https://www.google.com/recaptcha/api/fallback?k=6LeIpgYTAAAAAAZVDRQrOnglSzeFOjQReY4uChZZ&amp;hl=ar&amp;v=IU7gZ7o6RDdDE6U4Y1YJJWnN&amp;t=40016" frameborder="0" scrolling="no" style="width: 302px; height: 422px;"></iframe><div style="margin: -4px 0px 0px; padding: 0px; background: rgb(249, 249, 249); border: 1px solid rgb(193, 193, 193); border-radius: 3px; height: 60px; width: 300px;"><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: block;"></textarea></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin: 20px 0">
                                    <div class="form-group row" style="text-align: right">
                                        <div class="full-width">

                                            <a onclick="return ValidateSuppliersContact();" id="ctl00_ContentPlaceHolder1_btnSave" usesubmitbehavior="true" class="button btn-large dull-blue" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSave&quot;, &quot;&quot;, true, &quot;supplierdetails&quot;, &quot;&quot;, false, true))">
                                                <i class="soap-icon-recommend">&nbsp;</i>
                                                ارسال</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="full-width">
                                            <div class="form-group">
                                                <div id="ctl00_ContentPlaceHolder1_AlertErrorDivSuppliersContact" class="alert alert-notice" style="visibility: hidden">
                                                    <span id="ctl00_ContentPlaceHolder1_AlertErrorLableSuppliersContact"></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Suppliers-Products-Tab">
                                <div class="booking-section">
                                    <div class="person-information" style="text-align: right;">
                                        <h2>المنتجات</h2>
                                        <hr style="margin: 20px 0">
                                    </div>
                                    <div class="carousel-container position-relative row" style="padding: 10px 20px;">
                                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                             data-ride="carousel">
                                            <!--Slides-->
                                            {{--<div class="carousel-inner z-depth-4 rounded" role="listbox"
                                                 style="height: 450px ">
                                                <?php $i = 0; ?>
                                                @foreach($gallery as $item)
                                                    @if($i == 0)
                                                        <div class="carousel-item active z-depth-4 rounded">
                                                            <img class="d-block w-100"
                                                                 src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}">
                                                        </div>
                                                    @else

                                                        <div class="carousel-item z-depth-4 rounded">
                                                            <img class="d-block w-100"
                                                                 src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}">
                                                        </div>
                                                    @endif
                                                    <?php $i++ ?>
                                                @endforeach
                                            </div>--}}
                                            <!--/.Slides-->
                                            <!--Controls-->
                                            <a class="carousel-control-prev" href="#carousel-thumb" role="button"
                                               data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-thumb" role="button"
                                               data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            <!--/.Controls-->
                                            <ol class="carousel-indicators">
                                               {{-- <?php $i = 0; ?>
                                                @foreach($gallery as $item)
                                                    @if($i == 0)
                                                        <li data-target="#carousel-thumb" data-slide-to="{{ $i }}"
                                                            class="active border border-white z-depth-4 rounded">
                                                            <img class="d-block w-100"
                                                                 src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}"
                                                                 class="img-fluid">
                                                        </li>
                                                    @else
                                                        <li data-target="#carousel-thumb" data-slide-to="{{ $i }}"
                                                            class="border border-white z-depth-4 rounded">
                                                            <img class="d-block w-100"
                                                                 src="{{ env('IMAGE_URL') }}/images/{{$school->name_en}}/gallery/{{ $item->img }}"
                                                                 class="img-fluid">
                                                        </li>
                                                    @endif
                                                    <?php $i++ ?>
                                                @endforeach--}}
                                            </ol>
                                        </div>
                                        <script>
                                           /* $('#carousel-thumb').carousel({
                                                interval: 3000
                                            });*/
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-md-3">


                    <!-- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -->
                    <div style="padding-top: 30px">
                        <img src="https://www.tenderjo.com/DataFiles/LOGO/AbuMoujehEngineeringandConstruction20160526100800Abu-Moujeh-Engineering-and-Construction.jpg" id="ctl00_ContentPlaceHolder1_imgLogoCompany" width="270" height="160" style="margin: 5px; max-width: 270px; ">
                    </div>
                    <!-- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -- ADS -->


                    <div id="ctl00_ContentPlaceHolder1_rslist" class="travelo-box">
                        <div class="box-title">
                            <div class="image-box style14" style="text-align: right">
                                <h4>الشركات ذات صلة</h4>
                                <article class="box">
                                    <figure class="animated flipInX" data-animation-type="flipInX" style="animation-duration: 1s; visibility: visible;">
                                        <a title="نجم للهندسة و التعهدات" target="_blank" href="SuppliersDetails.aspx?opc_id=1543 ">
                                            <img style="border: 1px solid #bebebe;width: 63px;height: 59px" src="https://www.tenderjo.com/DataFiles/LOGO/AbuMoujehEngineeringandConstruction20160526100800Abu-Moujeh-Engineering-and-Construction.jpg">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6 class="box-title">
                                            <a href="SuppliersDetails.aspx?opc_id=1543" target="_blank" title="نجم للهندسة و التعهدات">
                                                نجم للهندسة و التعهدات
                                            </a>
                                            <br>
                                            <small>عمان ، الاردن</small>

                                        </h6>
                                    </div>
                                </article>





                                <article class="box">
                                    <figure class="animated flipInX" data-animation-type="flipInX" style="animation-duration: 1s; visibility: visible;">
                                        <a title="شركة المنشآت الحديدية ذ.م.م" target="_blank" href="SuppliersDetails.aspx?opc_id=674 ">
                                            <img style="border: 1px solid #bebebe;width: 63px;height: 59px" src="https://www.tenderjo.com/DataFiles/LOGO/AbuMoujehEngineeringandConstruction20160526100800Abu-Moujeh-Engineering-and-Construction.jpg">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6 class="box-title">
                                            <a href="SuppliersDetails.aspx?opc_id=674" target="_blank" title="شركة المنشآت الحديدية ذ.م.م">
                                                شركة المنشآت الحديدية ذ.م.م
                                            </a>
                                            <br>
                                            <small>عمان ، الاردن</small>

                                        </h6>
                                    </div>
                                </article>



                            </div>
                        </div>
                    </div>


                </div>
        </div>
        </div>
    </section>
@section('content')
    @include('modal')
@endsection
