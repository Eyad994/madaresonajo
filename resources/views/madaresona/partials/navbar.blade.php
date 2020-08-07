@extends('layouts.navAndFooterLinks')
@section('nav')
    <nav class="menu-classic menu-fixed align-right light" style="direction: rtl">
        <header id="uxh" data-uw-node-idx="26">

            <div id="logoutDIV" data-uw-node-idx="27">
                <div id="masthead" data-uw-node-idx="28">
                    <div id="utility" data-uw-node-idx="29" class="userway-s1-selected" style="">
                        <div class="container" data-uw-node-idx="30">
                            <div class="row" data-uw-node-idx="31">
                                <div class="col-sm-12" data-uw-node-idx="32">
                                   {{--  <div id="site-country" style="width: 1px"
                                         class="pc-menu-item has-options ux-tray ux-tray-default" data-uw-node-idx="33">
                                        <a href="#"
                                           data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#site-country&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#site-country .locale-options&quot;,&quot;guide&quot;:&quot;.container&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                           class="ux-tray-toggle menu-title oi-pc-header" data-uw-node-idx="34"><img
                                                    src="{{ asset('') }}WebAr/images/flags/jo-s.png"
                                                    data-uw-node-idx="35">&nbsp;الأردن</a>
                                        <div class="ux-tray-menu locale-options" data-uw-node-idx="36">
                                            <div class="container" data-uw-node-idx="37">
                                                <div class="row" data-uw-node-idx="38">
                                                    <div class="col-xs-12" data-uw-node-idx="39">
                                                        <div onclick="openit.close('#site-country > a')"
                                                             class="close uxicon uxicon-x" data-uw-node-idx="40"
                                                             tabindex="0"></div>
                                                    </div>
                                                </div>
                                                <div class="row" data-uw-node-idx="41">
                                                    <div class="form-group col-sm-8 col-md-8" data-uw-node-idx="42">
                                                        <h3 data-uw-node-idx="43">أختار الدولة</h3>
                                                        <div class="row" data-uw-node-idx="44">
                                                            <a href="#" data-uw-node-idx="45">
                                                                <img src="App_Themes/WebAr/images/flags/jo-s.png"
                                                                     data-uw-node-idx="46">
                                                                الأردن
                                                                -
                                                                Jordan
                                                            </a>
                                                        </div>
                                                        <div class="row" data-uw-node-idx="47">
                                                            <a href="https://www.tenderuae.com/" target="_blank"
                                                               class="menuitem" data-uw-node-idx="48">
                                                                <img src="App_Themes/WebAr/images/flags/uae-s.png"
                                                                     data-uw-node-idx="49">
                                                                الامارات
                                                                -
                                                                Emirates
                                                            </a>
                                                        </div>
                                                        <div class="row" data-uw-node-idx="50">
                                                            <a href="https://www.ctckw.net/" target="_blank"
                                                               title="مناقصات الكويت" class="menuitem"
                                                               data-uw-node-idx="51">
                                                                <img src="App_Themes/WebAr/images/flags/kw-s.png"
                                                                     alt="مناقصات الكويت" data-uw-node-idx="52">
                                                                الكويت
                                                                -
                                                                Kuwait
                                                            </a>
                                                        </div>
                                                        <div class="row" data-uw-node-idx="53">
                                                            <a href="https://www.tendersa.com/" target="_blank"
                                                               class="menuitem" data-uw-node-idx="54">
                                                                <img src="App_Themes/WebAr/images/flags/sa-s.png"
                                                                     data-uw-node-idx="55">
                                                                السعودية
                                                                -
                                                                Saudi Arabia
                                                            </a>
                                                        </div>
                                                        <div class="row" data-uw-node-idx="56">
                                                            <a href="https://www.iqtenders.com/" target="_blank"
                                                               data-uw-node-idx="57">
                                                                <img src="App_Themes/WebAr/images/flags/ir-s.png"
                                                                     data-uw-node-idx="58">
                                                                العراق
                                                                -
                                                                Iraq
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
--}}

                                    <div id="site-locale" class="pc-menu-item has-options ux-tray ux-tray-default"
                                         data-uw-node-idx="59">
                                        <a href="#"
                                           data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#site-locale&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#site-locale .locale-options&quot;,&quot;guide&quot;:&quot;.container&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                           class="ux-tray-toggle menu-title locale-toggle oi-pc-header"
                                           data-uw-node-idx="60">&nbsp;<span id="ddllangugeSelected"
                                                                             data-uw-node-idx="61">العربية</span>&nbsp;</a>
                                        <div class="ux-tray-menu locale-options" data-uw-node-idx="62">
                                            <div class="container" data-uw-node-idx="63">
                                                <div class="row" data-uw-node-idx="64">
                                                    <div class="col-xs-12" data-uw-node-idx="65">
                                                        <div onclick="openit.close('#site-locale > a')"
                                                             class="close uxicon uxicon-x" data-uw-node-idx="66"
                                                             tabindex="0"></div>
                                                    </div>

                                                </div>

                                                <div class="row" data-uw-node-idx="67">
                                                    <div class="form-group col-sm-4 col-md-4" data-uw-node-idx="68">
                                                        <h3 data-uw-node-idx="69">أختار اللغة</h3>
                                                        <div class="selector" data-uw-node-idx="70">
                                                            <select name="ddllanguge"
                                                                    onchange="javascript:setTimeout('__doPostBack(\'ddllanguge\',\'\')', 0)"
                                                                    id="ddllanguge" class="full-width"
                                                                    data-uw-node-idx="71" tabindex="0">
                                                                <option value="en" data-uw-node-idx="72">English
                                                                </option>
                                                                <option selected="selected" value="ar"
                                                                        data-uw-node-idx="73">العربية
                                                                </option>

                                                            </select><span class="custom-select full-width"
                                                                           data-uw-node-idx="74">العربية</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div id="select-support"
                                         class="pc-menu-item has-options ux-tray ux-tray-rel ux-tray-default"
                                         data-uw-node-idx="75">
                                      <a href="#" data-uw-node-idx="76"></a>
                                        <div class="ux-tray-menu support-options" data-uw-node-idx="77">


                                            <div class="content-wrap" data-uw-node-idx="78">
                                                <ul data-uw-node-idx="79">
                                                    <li data-uw-node-idx="80">
                                                        <span class="alt-support-hours"
                                                              data-uw-node-idx="81">Support</span>
                                                        <a href="tel:+96264205531" class="alt-support-phone"
                                                           data-uw-node-idx="82">00962-6-4205531</a>
                                                        <br>
                                                        <a href="tel:+962796212313" class="alt-support-phone"
                                                           data-uw-node-idx="83">00962-79-6212313</a>

                                                    </li>
                                                    <li data-uw-node-idx="84">
                                                        <span class="alt-support-hours"
                                                              data-uw-node-idx="85">Sales</span>
                                                        <a href="tel:+962796813284" class="alt-support-phone"
                                                           data-uw-node-idx="86">00962-79-6813284 </a>
                                                        <br>
                                                        <a href="tel:+962795596662" class="alt-support-phone"
                                                           data-uw-node-idx="87">00962-79-5596662 </a>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>


                                    <div id="sign-in" class="pc-menu-item ux-tray ux-tray-default has-options"
                                         data-uw-node-idx="88">
                                        <a href="#"
                                           data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#sign-in&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#sign-in .sign-in-options&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                           class="ux-tray-toggle menu-title oi-pc-header" data-uw-node-idx="89">
                                            <span class="not-logged-in" data-uw-node-idx="90">
                                                <span class="first" data-uw-node-idx="91">دخول | تسجيل جديد</span>
                                            </span>
                                        </a>
                                    {{--     <div class="ux-tray-menu sign-in-options" data-uw-node-idx="92">
                                            <div class="container content-wrap" data-uw-node-idx="93">
                                                <div class="row" data-uw-node-idx="94">
                                                    <div class="col-xs-12" data-uw-node-idx="95">
                                                        <div onclick="openit.close('#sign-in > a')"
                                                             class="close uxicon uxicon-x" data-uw-node-idx="96"
                                                             tabindex="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row content-row login-content" data-uw-node-idx="97">
                                                    <div class="col col-md-7 col-md-push-5" data-uw-node-idx="98">
                                                        <div class="row" data-uw-node-idx="99">
                                                            <div class="col col-sm-7 col not-logged-in col-md-push-5 sign-in left-vr"
                                                                 data-uw-node-idx="100">
                                                                <h3 data-uw-node-idx="101">تسجيل الدخول</h3>
                                                                <div class="seperator" data-uw-node-idx="102"></div>
                                                                <p data-uw-node-idx="103">هل لديك حساب؟ <br> قم بتسجيل
                                                                    دخولك الآن.</p>
                                                                <div class="seperator" data-uw-node-idx="104"></div>
                                                                <div class="form-group" data-uw-node-idx="105">
                                                                    <a href="UserLogin.html"
                                                                       class="button btn-medium dull-blue"
                                                                       data-uw-node-idx="106"><i
                                                                                class="soap-icon-settings"
                                                                                data-uw-node-idx="107">&nbsp;</i>دخول</a>
                                                                    <br>
                                                                    <br>
                                                                    <small data-uw-node-idx="108"><a
                                                                                href="PasswordRecovery.html"
                                                                                data-uw-node-idx="109">- نسيت كلمة
                                                                            المرور؟</a></small>
                                                                </div>

                                                            </div>

                                                            <div class="col col-sm-5 col not-logged-in new-customer col-md-pull-7 left-vr"
                                                                 data-uw-node-idx="110">
                                                                <h3 data-uw-node-idx="111">تسجيل جديد</h3>
                                                                <p data-uw-node-idx="112">ليس لديك حساب تندرجو؟ <br>أنضم
                                                                    الأن! </p>
                                                                <a href="Registration.html"
                                                                   class="button btn-medium orange"
                                                                   data-uw-node-idx="113"><i class="soap-icon-user"
                                                                                             data-uw-node-idx="114">&nbsp;</i>إنشاء
                                                                    حساب تجريبي</a>
                                                                <br>
                                                                <br>
                                                                <small data-uw-node-idx="115">- يشمل الحساب التجريبي
                                                                    الوصول الى تفاصيل 3 اشعارات فقط

                                                                    - مدة الفترة التجريبية 7 ايام مجاناً
                                                                </small>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col first col-md-5 col-md-pull-7"
                                                         data-uw-node-idx="116">
                                                        <div class="row" data-uw-node-idx="117">
                                                            <div class="col-md-12 col" data-uw-node-idx="118">
                                                                <h3 data-uw-node-idx="119">إختصارات</h3>
                                                            </div>
                                                            <div class="col-sm-6 col" data-uw-node-idx="120">
                                                                <h4 data-uw-node-idx="121">اختصارات الموقع</h4>
                                                                <ul data-uw-node-idx="122">
                                                                    <li data-uw-node-idx="123"><a href="Newsletter.html"
                                                                                                  data-uw-node-idx="124">النشرة
                                                                            اليومية</a></li>
                                                                    <li data-uw-node-idx="125"><a
                                                                                href="UserLogin2fb8.html"
                                                                                data-uw-node-idx="126">أضف إعلان
                                                                            مناقصة</a></li>
                                                                    <li data-uw-node-idx="127"><a
                                                                                href="UserLogin8aa3.html"
                                                                                data-uw-node-idx="128">القائمة
                                                                            المفضلة</a></li>
                                                                    <li data-uw-node-idx="129"><a
                                                                                href="SubscriptionDetails.html"
                                                                                data-uw-node-idx="130">اسعار
                                                                            الاشتراكات</a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6 col" data-uw-node-idx="131">
                                                                <h4 data-uw-node-idx="132">ابقى على تواصل</h4>
                                                                <ul data-uw-node-idx="133">
                                                                    <li data-uw-node-idx="134"><a href="FAQs.html"
                                                                                                  data-uw-node-idx="135">اسئلة
                                                                            متكررة</a></li>
                                                                    <li data-uw-node-idx="136"><a href="feedback.html"
                                                                                                  data-uw-node-idx="137">اقتراحات
                                                                            وملاحظات</a></li>
                                                                    <li data-uw-node-idx="138"><a href="Contacts.html"
                                                                                                  data-uw-node-idx="139">اتصل
                                                                            بنا</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="containerNav">
            <div id="main-nav" data-uw-node-idx="140" class="" style="">
                <div class="container" data-uw-node-idx="141">
                    <div class="row" data-uw-node-idx="142">
                        <div class="col-md-12 col" data-uw-node-idx="143">
                            <ul class="nav-wrap" data-uw-node-idx="144">
                                <li class="item-logo" data-uw-node-idx="145">
                                    <a href="{{ route('home') }}" data-uw-node-idx="146">
                                        {{--<div class="logo-locale" data-uw-node-idx="147">الأردن</div>--}}
                                        <div class="logo" data-uw-node-idx="148">
                                            <img src="{{ asset('assets/images/logo-light.png') }}">
                                        </div>
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('home') }}" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-home" data-uw-node-idx="152"></i>
                                        {{ __('index.home') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                        <a href="{{ route('news', app()->getLocale()) }}" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-newspaper" data-uw-node-idx="152"></i>
                                        {{ __('index.News') }}
                                    </a>
                                </li>
                                <li class="item-domains ux-noauth" data-uw-node-idx="153">

                                    <a href="#" data-eid="uxp.eld.sales_header.sales.product_nav.domains.link.click"
                                       data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#main-nav .item-domains&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#main-nav .item-domains .sub-nav&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                       class="font-primary-bold oi-pc-header" data-uw-node-idx="154">
                                        <div class="selected-marker" data-uw-node-idx="155"></div>
                                        <i class="fas fa-chevron-down" data-uw-node-idx="156"></i>
                                        جميع الخدمات
                                    </a>
                                    <div class="sub-nav" data-uw-node-idx="157">
                                        <div class="content-wrap" data-uw-node-idx="158">
                                            <div class="container" data-uw-node-idx="159">
                                                <div class="row" data-uw-node-idx="160">
                                                    <div class="col-sm-3 col-xs-12" data-uw-node-idx="161">
                                                        <h3 class="font-base" data-uw-node-idx="162"><a
                                                                    href="{{ route('home') }}"
                                                                    data-uw-node-idx="163">الرئيسية</a></h3>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-12" data-uw-node-idx="164">
                                                        <h3 data-toggle="collapse" data-target="#DomainsCollapse"
                                                            class="font-primary-bold" data-uw-node-idx="165">البحث في</h3>
                                                        <ul id="DomainsCollapse" class="row subnav-row collapse"
                                                            data-uw-node-idx="166">
                                                            <li class="col-sm-12" data-uw-node-idx="167">
                                                                <h4 class="font-base" data-uw-node-idx="168">خيارات
                                                                    البحث</h4>
                                                                <ul data-uw-node-idx="169">
                                                                    <li data-uw-node-idx="170"><a
                                                                                href="TendersSearch.html"
                                                                                data-uw-node-idx="171"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="172"></i>&nbsp;البحث
                                                                            من خلال المجالات الرئيسية</a></li>
                                                                    <li data-uw-node-idx="173"><a href="Categories.html"
                                                                                                  data-uw-node-idx="174"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="175"></i>&nbsp;البحث
                                                                            من خلال المجالات الفرعية</a></li>
                                                                    <li data-uw-node-idx="176"><a href="BuyersList.html"
                                                                                                  data-uw-node-idx="177"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="178"></i>&nbsp;البحث
                                                                            من خلال الجهات الناشرة</a></li>
                                                                    <li data-uw-node-idx="179"><a
                                                                                href="AdvancedSearch.html"
                                                                                data-uw-node-idx="180"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="181"></i>&nbsp;بحث
                                                                            متقدم</a></li>
                                                                    <li data-uw-node-idx="182"><a
                                                                                href="UserLogin8aa3.html"
                                                                                data-uw-node-idx="183"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="184"></i>&nbsp;القائمة
                                                                            المفضلة</a></li>
                                                                    <li data-uw-node-idx="185"><a href="Newsletter.html"
                                                                                                  data-uw-node-idx="186"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="187"></i>&nbsp;النشرة
                                                                            اليومية</a></li>
                                                                    <li data-uw-node-idx="188"><a href="BuyersList.html"
                                                                                                  data-uw-node-idx="189"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="190"></i>&nbsp;الجهات
                                                                            الناشرة</a></li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-2 col-xs-12" data-uw-node-idx="191">
                                                        <h3 data-toggle="collapse" data-target="#WebsitesCollapse"
                                                            class="font-primary-bold" data-uw-node-idx="192">
                                                            الاشتراكات</h3>
                                                        <ul id="WebsitesCollapse" class="row subnav-row collapse"
                                                            data-uw-node-idx="193">
                                                            <li class="col-sm-12" data-uw-node-idx="194">
                                                                <ul data-uw-node-idx="195">
                                                                    <li data-uw-node-idx="196"><a href="Services.html"
                                                                                                  data-uw-node-idx="197"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="198"></i>&nbsp;مميزات
                                                                            الاشتراك</a> &nbsp;&nbsp; <i
                                                                                class="fab fa-youtube"
                                                                                data-uw-node-idx="199"></i>&nbsp;<a
                                                                                href="https://youtu.be/LMFv8KeSufM"
                                                                                target="_blank" data-uw-node-idx="200">
                                                                            <span class="flag-sale"
                                                                                  data-uw-node-idx="201"><span
                                                                                        data-uw-node-idx="202">فيديو توضيحي</span></span></a>
                                                                    </li>
                                                                    <li data-uw-node-idx="203"><a
                                                                                href="SubscriptionDetails.html"
                                                                                data-uw-node-idx="204"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="205"></i>&nbsp;رسوم
                                                                            الاشتراك</a></li>
                                                                    <li data-uw-node-idx="206"><a
                                                                                href="UserLoginfc8d.html"
                                                                                data-uw-node-idx="207"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="208"></i>&nbsp;خيارات
                                                                            الدفع&nbsp; <i class="fa fa-credit-card-alt"
                                                                                           aria-hidden="true"
                                                                                           data-uw-node-idx="209"></i></a>
                                                                    </li>
                                                                    <li data-uw-node-idx="210"><a
                                                                                href="Registration.html"
                                                                                data-uw-node-idx="211"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="212"></i>&nbsp;طلب
                                                                            اشتراك جديد&nbsp;<small
                                                                                    style="color: #fedc45;"
                                                                                    data-uw-node-idx="213">لمدة اسبوع
                                                                                مجاناً
                                                                            </small>
                                                                        </a></li>
                                                                    <li data-uw-node-idx="214"><a href="Ads.html"
                                                                                                  data-uw-node-idx="215"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="216"></i>&nbsp;اعلن
                                                                            معنا&nbsp;<i class="fas fa-bullhorn"
                                                                                         data-uw-node-idx="217"></i></a>
                                                                    </li>
                                                                    <li data-uw-node-idx="218"><a href="Clients.html"
                                                                                                  data-uw-node-idx="219"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="220"></i>&nbsp;عملائنا</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-2 col-xs-12" data-uw-node-idx="221">
                                                        <h3 data-toggle="collapse" data-target="#HostingCollapse"
                                                            class="font-primary-bold" data-uw-node-idx="222">الشركات
                                                            المميزة</h3>
                                                        <ul id="HostingCollapse" class="row subnav-row collapse"
                                                            data-uw-node-idx="223">
                                                            <li class="col-sm-12" data-uw-node-idx="224">
                                                                <ul data-uw-node-idx="225">

                                                                    <li data-uw-node-idx="226"><a
                                                                                href="SuppliersList.html"
                                                                                data-uw-node-idx="227"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="228"></i>&nbsp;قائمة
                                                                            الشركات المميزة</a></li>
                                                                    <li data-uw-node-idx="229"><a
                                                                                href="userlogin796c.html"
                                                                                data-uw-node-idx="230"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="231"></i>&nbsp;اضف
                                                                            منشأتك</a></li>


                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-12" data-uw-node-idx="232">
                                                        <h3 data-toggle="collapse" data-target="#WebSecurityCollapse"
                                                            class="font-primary-bold collapsed" data-uw-node-idx="233">
                                                            الاحصائيات والتقارير</h3>
                                                        <ul id="WebSecurityCollapse" class="row subnav-row collapse"
                                                            style="height: 0px;" data-uw-node-idx="234">
                                                            <li class="col-sm-12" data-uw-node-idx="235">
                                                                <ul data-uw-node-idx="236">
                                                                    <li data-uw-node-idx="237"><a
                                                                                href="http://statistics.tenderjo.com/"
                                                                                target="_blank"
                                                                                data-uw-node-idx="238"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="239"></i>&nbsp;الاحصائيات
                                                                            والتقارير</a>&nbsp;<span class="flag-sale"
                                                                                                     data-uw-node-idx="240">-&nbsp;<span
                                                                                    data-uw-node-idx="241">2014-2019</span></span>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm-2 col-xs-12" data-uw-node-idx="242">
                                                        <h3 data-toggle="collapse" data-target="#GetFoundCollapse"
                                                            class="font-primary-bold collapsed" data-uw-node-idx="243">
                                                            مساعدة</h3>
                                                        <ul id="GetFoundCollapse" class="row subnav-row collapse"
                                                            style="height: 0px;" data-uw-node-idx="244">
                                                            <li class="col-sm-12" data-uw-node-idx="245">
                                                                <ul data-uw-node-idx="246">
                                                                    <li data-uw-node-idx="247">
                                                                        <a href="feedback.html"
                                                                           data-uw-node-idx="248"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="249"></i>&nbsp;اقتراحات
                                                                            وملاحظات</a>
                                                                    </li>
                                                                    <li data-uw-node-idx="250">
                                                                        <a href="FAQs.html" data-uw-node-idx="251"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="252"></i>&nbsp;اسئلة
                                                                            متكررة</a>
                                                                    </li>
                                                                    <li data-uw-node-idx="253">
                                                                        <a href="Contacts.html"
                                                                           data-uw-node-idx="254"><i
                                                                                    class="soap-icon-minus"
                                                                                    data-uw-node-idx="255"></i>&nbsp;اتصل
                                                                            بنا</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-websites ux-noauth" data-uw-node-idx="256">
                                    <a href="#" data-eid="uxp.eld.sales_header.sales.product_nav.websites.link.click"
                                       data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#main-nav .item-websites&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#main-nav .item-websites .sub-nav&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                       class="font-primary-bold oi-pc-header" data-uw-node-idx="257">
                                        <div class="selected-marker" data-uw-node-idx="258"></div>
                                        <i class="soap-icon-bottom" data-uw-node-idx="259"></i>
                                        {{ __('index.subscription') }}
                                    </a>
                                    <div class="sub-nav" data-uw-node-idx="260">
                                        <div class="content-wrap" data-uw-node-idx="261">
                                            <div class="container" data-uw-node-idx="262">
                                                <div class="row" data-uw-node-idx="263">
                                                    <div class="col-md-12" data-uw-node-idx="264">
                                                        <h3 data-uw-node-idx="265">{{ __('index.subscription') }}  </h3>
                                                    </div>
                                                </div>
                                                <div class="row content-row" data-uw-node-idx="266">
                                                    <div class="col-md-4 col first" data-uw-node-idx="267">
                                                        <p data-uw-node-idx="268">
                                                            انضم الآن إلى عائلة مدارسنا وتمتع بميزات العضوية ، من أكبر وأدق مصدر معلومات للمدارس الخاصة ورياض الاطفال والحضانات في الاردن !

                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 HostingLinks" data-uw-node-idx="269">
                                                        <ul class="subnav-ul" data-uw-node-idx="271">
                                                            <li data-uw-node-idx="272"><a href="{{ route('faSubscribing', app()->getLocale()) }}"
                                                                                          data-uw-node-idx="273"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="274"></i>&nbsp;{{ __('index.membership_Benefits_classic') }}</a></li>
                                                            <li data-uw-node-idx="275"><a href="{{ route('pricing', app()->getLocale()) }}"
                                                                                          data-uw-node-idx="276"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="277"></i>&nbsp;{{ __('index.fees_and_payment_methods_gird') }}  </a></li>
                                                            <li data-uw-node-idx="278"><a href="{{ route('newSubscription', app()->getLocale()) }}"
                                                                                          data-uw-node-idx="279"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="280"></i>&nbsp;{{ __('index.new_subscribers_post') }}  </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-hosting ux-noauth" data-uw-node-idx="296">
                                    <a href="#" data-eid="uxp.eld.sales_header.sales.product_nav.hosting.link.click"
                                       data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#main-nav .item-hosting&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#main-nav .item-hosting .sub-nav&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                       class="font-primary-bold oi-pc-header" data-uw-node-idx="297">
                                        <div class="selected-marker" data-uw-node-idx="298"></div>
                                        <i class="soap-icon-bottom" data-uw-node-idx="299"></i>
                                        {{ __('index.help') }}
                                    </a>
                                    <div class="sub-nav" data-uw-node-idx="300">
                                        <div class="content-wrap" data-uw-node-idx="301">
                                            <div class="container" data-uw-node-idx="302">
                                                <div class="row" data-uw-node-idx="303">
                                                    <div class="col-md-12" data-uw-node-idx="304">
                                                        <h3 data-uw-node-idx="305">{{ __('index.help') }}</h3>
                                                    </div>
                                                </div>
                                                <div class="row content-row" data-uw-node-idx="306">
                                                    <div class="col-md-4 col first" data-uw-node-idx="307">
                                                        <p data-uw-node-idx="308"> إذا كنت تبحث عن مزيد من المساعدة أو لديك سؤال يرجى الاتصال بنا</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 HostingLinks" data-uw-node-idx="309">
                                                        <ul class="subnav-ul" data-uw-node-idx="310">
                                                            <li data-uw-node-idx="311"><a href="{{ route('newSuggestion', app()->getLocale()) }}"
                                                                                          data-uw-node-idx="312"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="313"></i>&nbsp;{{ __('index.feedback') }}</a> &nbsp;&nbsp;
                                                                {{--<i class="fab fa-youtube"
                                                                                                 data-uw-node-idx="314"></i>&nbsp;<a
                                                                        href="https://youtu.be/LMFv8KeSufM"
                                                                        target="_blank" data-uw-node-idx="315"><span
                                                                            class="flag-sale" data-uw-node-idx="316">فيديو توضيحي</span></a>
                                                            </li>--}}
                                                            <li data-uw-node-idx="317"><a
                                                                        href="{{ route('faq', app()->getLocale()) }}"
                                                                        data-uw-node-idx="318"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="319"></i>{{ __('index.faqs') }}</a></li>
                                                            <li data-uw-node-idx="324"><a href="{{ route('contactUs', app()->getLocale()) }}"
                                                                                          data-uw-node-idx="325"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="326"></i>&nbsp;{{ __('index.contact_us') }}</a>&nbsp;<span class="flag-sale"
                                                                                        data-uw-node-idx="327">&nbsp;</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="http://www.josmsservice.com/madaresona/" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-sms" data-uw-node-idx="152"></i>
                                        {{ __('index.sms_platform') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('services', app()->getLocale())  }}" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-ball-pile" data-uw-node-idx="152"></i>
                                        {{ __('index.services') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="http://job.madaresonajo.com" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-briefcase" data-uw-node-idx="152"></i>
                                        {{ __('index.madaresona_jobs') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('mainSupplier', app()->getLocale()) }}" class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-building" data-uw-node-idx="152"></i>
                                        {{ __('index.suppliers') }}
                                    </a>
                                </li>

                                <li class="item-hotdeals ux-noauth" data-uw-node-idx="407">
                                    <a href="{{ route('discounts', app()->getLocale()) }}" class="button btn-medium orange"
                                       data-uw-node-idx="408"><i class="fad fa-user-tag" data-uw-node-idx="409"></i>&nbsp;{{ __('index.discounts') }}</a>


                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection




