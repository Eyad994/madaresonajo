<style>

</style>
<nav class="menu-classic menu-fixed align-right light " data-menu-anima="fade-bottom" style="direction:{{(app()->getLocale() == 'en') ?'ltr;' :'rtl;'}}" >
    <div class="container">
        <div class="menu-brand">
            <a href="{{ route('home') }}">
                <img class="logo-light" src="{{ asset('assets/images/logo-light.png') }}" alt="Madaresona JO"/>
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt" style="justify-content:{{(app()->getLocale() == 'en') ?'flex-end;' :'flex-start;'}}">
            <div class="moduletable_menu">

                <ul class="menu-mp">
                    <li class="item-101 selected "><a class=" js-activated bt-white font-weight-bold"  href="{{ route('home') }}"> {{ __('index.home') }}</a></li>

                    <li class="item-129 "><a class=" js-activated bt-white font-weight-bold">{{ __('index.News') }}</a></li>
                    <li class="item-130   dropdown"><a class=" js-activated bt-white font-weight-bold">{{ __('index.subscription') }}</a>
                        <ul class="">
                            <li class="item-133"><a class="" href=""> {{ __('index.membership_Benefits_classic') }}</a></li>
                            <li class="item-134" ><a  class="" href="{{ route('pricing', app()->getLocale()) }}">{{ __('index.fees_and_payment_methods_gird') }}</a></li>
                            <li class="item-135"><a  class="" href=""> {{ __('index.new_subscribers_post') }}</a></li>
                        </ul>
                    </li>
                    <li class="item-131   dropdown"><a class=" js-activated bt-white font-weight-bold">{{ __('index.help') }}</a>
                        <ul class="">
                            <li class="item-133"><a class="" href=""> {{ __('index.feedback') }} </a></li>
                            <li class="item-134" ><a  class="" href="">{{ __('index.faqs') }}</a></li>
                            <li class="item-135"><a  class="" href="">{{ __('index.contact_us') }}</a></li>
                        </ul>
                    </li>
                    <li class="item-101 selected "><a class=" js-activated bt-white font-weight-bold">{{ __('index.sms_platform') }}</a></li>
                    <li class="item-101 selected "><a class=" js-activated bt-white font-weight-bold">{{ __('index.services') }}</a></li>
                    <li class="item-101 selected "><a class=" js-activated bt-white font-weight-bold">{{ __('index.madaresona_jobs') }}</a></li>

                </ul>
            </div>


            <div class="clear"></div>
        </div>
    </div>
</nav>
