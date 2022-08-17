@extends('layouts.navAndFooterLinks')
@section('nav')

    <style>
        .header_mobile_menu {
            display: none !important;
        }

        .menu_items li {
            padding: 0px 50px;
        }

        @media (max-width: 1000px) {
            #main-nav {
                height: 50px;
                box-shadow: 5px 5px 5px #bbb;
            }

            .mobile-header {
                float: right;
            }

            .header_menu {
                display: none !important;
            }

            .header_mobile_menu {
                display: block !important;
                width: 45px;
                height: 40px;
                float: right;
            }

            .item-logo {
                float: left;
            }

            .discount_btn {
                margin-top: -20px;
            }
        }
    </style>
    <nav class="menu-classic menu-fixed align-right light" style="direction: rtl">
        <header id="uxh" data-uw-node-idx="26">
            <div id="logoutDIV" data-uw-node-idx="27">
                <div id="masthead" data-uw-node-idx="28">
                    <div id="utility" data-uw-node-idx="29" class="userway-s1-selected" style="">
                        <div class="container" data-uw-node-idx="30">
                            <div class="row" data-uw-node-idx="31">
                                <div class="col-sm-12" data-uw-node-idx="32">
                                    {{-- <div id="site-locale" class="pc-menu-item has-options ux-tray ux-tray-default"
                                          data-uw-node-idx="59" style="padding: 5px 0px !important;">
                                         <select class="selectpicker" data-width="fit" onchange="location = this.value;">
                                             <option style="font-size: 15px;" {{app()->getLocale() == 'en' ? 'selected' : '' }}
                                                      value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}" >English </option>
                                             <option style="font-size: 15px;" {{app()->getLocale() == 'ar' ? 'selected' : '' }}
                                                 value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ar') }}" >
                                                     العربية </option>
                                         </select>
                                     </div>--}}


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
                                        <a href="https://dashboard.madaresonajo.com/login"
                                           data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#sign-in&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#sign-in .sign-in-options&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                           class="ux-tray-toggle menu-title oi-pc-header" data-uw-node-idx="89">
                                            <span class="not-logged-in" data-uw-node-idx="90">
                                                <span class="first" data-uw-node-idx="91">دخول   </span>
                                            </span>
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="containerNav"
             @if((app()->getLocale() == 'ar'))
             style="direction: rtl; text-align: right;">
            @else
                style="direction:ltr; text-align:left;">
            @endif
            <div id="main-nav" data-uw-node-idx="140" class="" style="">
                <div class="container mobile-header" data-uw-node-idx="141">
                    <div class="row" data-uw-node-idx="142">
                        <div class="col-md-12 col" data-uw-node-idx="143">
                            <ul class="nav-wrap" data-uw-node-idx="144">
                                <li class="item-domains ux-noauth2 header_mobile_menu" data-uw-node-idx="153">

                                    <a href="#" data-eid="uxp.eld.sales_header.sales.product_nav.domains.link.click"
                                       data-openit="{&quot;addclass&quot;:{&quot;selector&quot;:&quot;#main-nav .item-domains&quot;,&quot;class&quot;:&quot;oi-open&quot;},&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#main-nav .item-domains .sub-nav&quot;,&quot;guide&quot;:&quot;.content-wrap&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;pc-header&quot;,&quot;offclick&quot;:&quot;true&quot;}"
                                       class="font-primary-bold oi-pc-header" data-uw-node-idx="154">
                                        <div class="selected-marker" data-uw-node-idx="155"></div>
                                        <i class="fas fa-bars" style="" data-uw-node-idx="156"></i>

                                    </a>
                                    <div class="sub-nav" data-uw-node-idx="157">
                                        <ul class="menu_items">

                                            <li>
                                                <a href="{{ route('home') }}" class="font-primary-bold"
                                                   data-uw-node-idx="151">
                                                    <i class="fad fa-home" data-uw-node-idx="152"></i>
                                                    {{ __('index.home') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('news', app()->getLocale()) }}"
                                                   class="font-primary-bold" data-uw-node-idx="151">
                                                    <i class="fad fa-newspaper" data-uw-node-idx="152"></i>
                                                    {{ __('index.News') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   data-eid="uxp.eld.sales_header.sales.product_nav.websites.link.click"
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
                                                                    <p data-uw-node-idx="268">{{ __('index.subscription_text') }}</p>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 HostingLinks"
                                                                     data-uw-node-idx="269">
                                                                    <ul class="subnav-ul" data-uw-node-idx="271">
                                                                        <li data-uw-node-idx="272"><a
                                                                                    href="{{ route('faSubscribing', app()->getLocale()) }}"
                                                                                    data-uw-node-idx="273"><i
                                                                                        class="soap-icon-minus"
                                                                                        data-uw-node-idx="274"></i>&nbsp;{{ __('index.membership_Benefits_classic') }}
                                                                            </a></li>
                                                                        <li data-uw-node-idx="275"><a
                                                                                    href="{{ route('pricing', app()->getLocale()) }}"
                                                                                    data-uw-node-idx="276"><i
                                                                                        class="soap-icon-minus"
                                                                                        data-uw-node-idx="277"></i>&nbsp;{{ __('index.fees_and_payment_methods_gird') }}
                                                                            </a></li>
                                                                        <li data-uw-node-idx="278"><a
                                                                                    href="{{ route('newSubscription', app()->getLocale()) }}"
                                                                                    data-uw-node-idx="279"><i
                                                                                        class="soap-icon-minus"
                                                                                        data-uw-node-idx="280"></i>&nbsp;{{ __('index.new_subscribers_post') }}
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#"
                                                   data-eid="uxp.eld.sales_header.sales.product_nav.hosting.link.click"
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
                                                                    <p data-uw-node-idx="308">

                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 HostingLinks"
                                                                     data-uw-node-idx="309">
                                                                    <ul class="subnav-ul" data-uw-node-idx="310">
                                                                        <li data-uw-node-idx="311"><a
                                                                                    href="{{ route('newSuggestion', app()->getLocale()) }}"
                                                                                    data-uw-node-idx="312"><i
                                                                                        class="soap-icon-minus"
                                                                                        data-uw-node-idx="313"></i>&nbsp;{{ __('index.feedback') }}
                                                                            </a> &nbsp;&nbsp;
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
                                                                                        data-uw-node-idx="319"></i>{{ __('index.faqs') }}
                                                                            </a></li>
                                                                        <li data-uw-node-idx="324"><a
                                                                                    href="{{ route('contactUs', app()->getLocale()) }}"
                                                                                    data-uw-node-idx="325"><i
                                                                                        class="soap-icon-minus"
                                                                                        data-uw-node-idx="326"></i>&nbsp;{{ __('index.contact_us') }}
                                                                            </a>&nbsp;<span class="flag-sale"
                                                                                            data-uw-node-idx="327">&nbsp;</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="http://www.josmsservice.com/madaresona/"
                                                   class="font-primary-bold" data-uw-node-idx="151">
                                                    <i class="fad fa-sms" data-uw-node-idx="152"></i>
                                                    {{ __('index.sms_platform') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services', app()->getLocale())  }}"
                                                   class="font-primary-bold" data-uw-node-idx="151">
                                                    <i class="fad fa-ball-pile" data-uw-node-idx="152"></i>
                                                    {{ __('index.services') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://job.madaresonajo.com" class="font-primary-bold"
                                                   data-uw-node-idx="151">
                                                    <i class="fad fa-briefcase" data-uw-node-idx="152"></i>
                                                    {{ __('index.madaresona_jobs') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('mainSupplier', app()->getLocale()) }}"
                                                   class="font-primary-bold" data-uw-node-idx="151">
                                                    <i class="fad fa-building" data-uw-node-idx="152"></i>
                                                    {{ __('index.suppliers') }}
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
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
                                    <a href="{{ route('news', app()->getLocale()) }}" class="font-primary-bold"
                                       data-uw-node-idx="151">
                                        <i class="fad fa-newspaper" data-uw-node-idx="152"></i>
                                        {{ __('index.News') }}
                                    </a>
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
                                                        <p data-uw-node-idx="268">{{ __('index.subscription_text') }} </p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 HostingLinks" data-uw-node-idx="269">
                                                        <ul class="subnav-ul" data-uw-node-idx="271">
                                                            <li data-uw-node-idx="272"><a
                                                                        href="{{ route('faSubscribing', app()->getLocale()) }}"
                                                                        data-uw-node-idx="273"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="274"></i>&nbsp;{{ __('index.membership_Benefits_classic') }}
                                                                </a></li>
                                                            <li data-uw-node-idx="275"><a
                                                                        href="{{ route('pricing', app()->getLocale()) }}"
                                                                        data-uw-node-idx="276"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="277"></i>&nbsp;{{ __('index.fees_and_payment_methods_gird') }}
                                                                </a></li>
                                                            <li data-uw-node-idx="278"><a
                                                                        href="{{ route('newSubscription', app()->getLocale()) }}"
                                                                        data-uw-node-idx="279"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="280"></i>&nbsp;{{ __('index.new_subscribers_post') }}
                                                                </a></li>
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
                                                        <p data-uw-node-idx="308"> {{ __('index.help_text') }}</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 HostingLinks" data-uw-node-idx="309">
                                                        <ul class="subnav-ul" data-uw-node-idx="310">
                                                            <li data-uw-node-idx="311"><a
                                                                        href="{{ route('newSuggestion', app()->getLocale()) }}"
                                                                        data-uw-node-idx="312"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="313"></i>&nbsp;{{ __('index.feedback') }}
                                                                </a> &nbsp;&nbsp;
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
                                                                            data-uw-node-idx="319"></i>{{ __('index.faqs') }}
                                                                </a></li>
                                                            <li data-uw-node-idx="324"><a
                                                                        href="{{ route('contactUs', app()->getLocale()) }}"
                                                                        data-uw-node-idx="325"><i
                                                                            class="soap-icon-minus"
                                                                            data-uw-node-idx="326"></i>&nbsp;{{ __('index.contact_us') }}
                                                                </a>&nbsp;<span class="flag-sale"
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
                                    <a href="http://www.josmsservice.com/madaresona/" class="font-primary-bold"
                                       data-uw-node-idx="151">
                                        <i class="fad fa-sms" data-uw-node-idx="152"></i>
                                        {{ __('index.sms_platform') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('services', app()->getLocale())  }}" class="font-primary-bold"
                                       data-uw-node-idx="151">
                                        <i class="fad fa-ball-pile" data-uw-node-idx="152"></i>
                                        {{ __('index.services') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="http://job.madaresonajo.com" class="font-primary-bold"
                                       data-uw-node-idx="151">
                                        <i class="fad fa-briefcase" data-uw-node-idx="152"></i>
                                        {{ __('index.madaresona_jobs') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('mainSupplier', app()->getLocale()) }}" class="font-primary-bold"
                                       data-uw-node-idx="151">
                                        <i class="fad fa-building" data-uw-node-idx="152"></i>
                                        {{ __('index.suppliers') }}
                                    </a>
                                </li>
                                <li class="item-products" data-uw-node-idx="150">
                                    <a href="{{ route('distanceLearning', app()->getLocale()) }}"
                                       class="font-primary-bold" data-uw-node-idx="151">
                                        <i class="fad fa-chalkboard-teacher" data-uw-node-idx="152"></i>
                                        {{ __('index.distance_learning') }}
                                    </a>
                                </li>
                                @if(!((Request::segment(2))=='supplier'))
                                    <li class="item-hotdeals ux-noauth" data-uw-node-idx="407">
                                        <a href="{{ route('discounts', app()->getLocale()) }}"
                                           class="button btn-medium orange discount_btn"
                                           data-uw-node-idx="408"><i class="fad fa-user-tag" data-uw-node-idx="409"></i>&nbsp;{{ __('index.discounts') }}
                                        </a>
                                    </li>
                                    @else
                                    <li class="item-hotdeals ux-noauth" data-uw-node-idx="407">
                                        <a href="{{ route('newSupplierSubscription', app()->getLocale()) }}"
                                           class="button btn-medium orange discount_btn"
                                           data-uw-node-idx="408"><i class="fad fa-user-tag" data-uw-node-idx="409"></i>&nbsp;{{ __('index.register_now') }}
                                        </a>
                                    </li>
                                @endif


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection




