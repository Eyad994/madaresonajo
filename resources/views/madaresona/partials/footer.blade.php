@extends('layouts.navAndFooterLinks')
@section('footer')
    <footer id="footer" class="style5" data-uw-node-idx="927" style="direction: rtl;text-align: right;">
        <div class="footer-wrapper" data-uw-node-idx="928">
            <div class="container" data-uw-node-idx="929">
                <div class="row" data-uw-node-idx="930">
                    <div class="col-sm-6 col-md-5" data-uw-node-idx="931">
                        <h2 data-uw-node-idx="932">{{ __('index.shortcuts') }}</h2>
                        <ul class="discover triangle hover row" data-uw-node-idx="933">
                            <li class=" col-xs-6" data-uw-node-idx="934"><a href="{{ route('vision', app()->getLocale()) }}" data-uw-node-idx="935">{{ __('index.vision') }}</a></li>
                            <li class=" col-xs-6" data-uw-node-idx="934"><a href="{{ route('newSubscription', app()->getLocale()) }}" data-uw-node-idx="935">{{ __('index.new_subscribers_post') }}</a></li>
                            <li class="col-xs-6" data-uw-node-idx="938"><a href="{{ route('message', app()->getLocale()) }}" data-uw-node-idx="939">{{ __('index.message') }}</a></li>
                            <li class="col-xs-6" data-uw-node-idx="938"><a href="{{ route('faq', app()->getLocale()) }}" data-uw-node-idx="939">{{ __('index.faqs') }}</a></li>
                            <li class="col-xs-6" data-uw-node-idx="936"><a href="{{ route('objective', app()->getLocale()) }}" data-uw-node-idx="937">{{ __('index.objective') }}</a></li>
                            <li class="col-xs-6" data-uw-node-idx="936"><a href="{{ route('newSuggestion', app()->getLocale()) }}" data-uw-node-idx="937">{{ __('index.feedback') }}</a></li>

                            <li class="col-xs-6" data-uw-node-idx="940"><a href="{{ route('termsConditions', app()->getLocale()) }}" data-uw-node-idx="941">{{ __('index.terms_conditions') }}</a></li>
                            <li class="col-xs-6" data-uw-node-idx="940"><a href="{{ route('pricing', app()->getLocale()) }}" data-uw-node-idx="941">{{ __('index.fees_payment_methods') }}</a></li>

                        </ul>

                        <br>
                        <br>
                        <h6 data-uw-node-idx="950">
                            <i class="fas fa-map-marked-alt" data-uw-node-idx="951"></i>
                            {{ __('index.our_branches') }}
                        </h6>
                        <a href="{{ route('home', app()->getLocale()) }}" data-uw-node-idx="952" title="{{ __('index.الاردن') }}">
                            <img src="{{ asset('assets/images/flags/jo-s.png') }}" data-uw-node-idx="953">
                        </a>
                        <a href="" target="_blank" data-uw-node-idx="954" title="{{ __('index.palestine') }}">
                            <img src="{{ asset('assets/images/flags/ps-s.png') }}" data-uw-node-idx="955">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4" data-uw-node-idx="962">
                        <h2 data-uw-node-idx="963">{{ __('index.mailing_list') }}</h2>
                        <p data-uw-node-idx="964">{{ __('index.footer_text') }}</p>
                        <form action="{{ route('subscribe', app()->getLocale()) }}" method="POST" id="formSubscribeEmail">
                            @csrf
                            <div class="with-icon full-width" data-uw-node-idx="965">
                                <input type="email" id="txtSubscriber" required name="email" class="form-control" data-uw-node-idx="966">
                                <button id="btnSubscriber" type="submit" class="icon yellow-bg white-color" data-uw-node-idx="967" style="margin-top: -17px !important;height: 35px;width: 35px;">
                                    <i id="sbciconcclass" class="soap-icon-message" data-uw-node-idx="968"></i>
                                </button>
                            </div>
                        </form>

                        <script>

                            $('#formSubscribeEmail').submit(function (e) {
                                e.preventDefault();
                                var form = $(this);
                                var url = form.attr('action');
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: new FormData(this),
                                    dataType: "json",
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    success: function (data) {
                                        if (data.status === 422) {
                                            console.log(data);
                                            var error_html = '';

                                            for (let value of Object.values(data.errors)) {
                                                error_html += '<div style="background: #f8d7da;padding: 20px;border-radius: 5px; font-size: 20px; font-weight: bold;">' + "الإيميل مسجل من قبل" + '</div>';
                                            }
                                            Swal.fire({
                                                icon: 'error',
                                                html: error_html
                                            })
                                        } else {
                                            Swal.fire({
                                                icon: 'success',
                                                title: data.message,
                                                showConfirmButton: false,
                                                timer: 1500
                                            });
                                        }
                                    }
                                });

                            });

                        </script>
                        <div class="clearer" data-uw-node-idx="969">
                            <br>
                        </div>
                        <span data-uw-node-idx="970">{{ __('index.respect_privacy') }}</span>
                        <div class="clearer" data-uw-node-idx="971">
                            <hr>
                        </div>

                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                    </div>
                    <div class="col-sm-6 col-md-3" data-uw-node-idx="976">
                        <h2 data-uw-node-idx="977">{{ __('index.about_our') }}</h2>
                        <p data-uw-node-idx="978" style="font-size: 12px;">{{ __('index.footer_text2') }}</p>
                        <address class="contact-details" data-uw-node-idx="979"  style="font-size: 12px">
                            <span class="contact-phone" data-uw-node-idx="980" style="width: 100%;display: block; "> <i class="fad fa-phone" data-uw-node-idx="981"></i> <span style="margin: 0px 5px; font-size: 14px;">0799289730</span> </span>
                            <span class="contact-phone" data-uw-node-idx="980" style="width: 100%;display: block; "> <i class="fad fa-envelope"></i> <span style="margin: 0px 5px; font-size: 14px;">info@madaresonajo.com</span> </span>
                            <span class="contact-phone" data-uw-node-idx="980" style="width: 100%;display: block; "> <i class="fad fa-map-marked"></i> <span style="margin: 0px 5px; font-size: 13px;">{{ __('index.address_footer') }}</span> </span>

                        </address>

                        <ul class="social-icons clearfix" data-uw-node-idx="983">
                            <li class="youtube" data-uw-node-idx="984"><a title="" href="https://www.youtube.com/channel/UCAGYODjz5zE50x8CAgus9Yg" data-toggle="tooltip" target="_blank" data-original-title="youtube" data-uw-node-idx="985"><i class="soap-icon-youtube" data-uw-node-idx="986"></i></a></li>
                            <li class="twitter" data-uw-node-idx="987"><a title="" href="https://twitter.com/MadaresonaJO" data-toggle="tooltip" target="_blank" data-original-title="twitter" data-uw-node-idx="988"><i class="soap-icon-twitter" data-uw-node-idx="989"></i></a></li>
                            <li class="linkedin" data-uw-node-idx="993"><a title="" href="https://www.linkedin.com/organization-guest/company/madaresona?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1432542756242%2Ctas%3Amadaresona&challengeId=AQFYzHBLDqlKPQAAAXOW38fxb21AbYry5eksRAtNi6xsghsMVxN4OU-lEFX8lc4bP6G2eM_EhwpRzjmlTmTo_R-lb6F9nQMROA&submissionId=baa8b416-e800-2616-d452-2878020ed006" data-toggle="tooltip" target="_blank" data-original-title="linkedin" data-uw-node-idx="994"><i class="soap-icon-linkedin" data-uw-node-idx="995"></i></a></li>
                            <li class="facebook" data-uw-node-idx="996"><a title="" href="https://www.facebook.com/Madaresonaj" data-toggle="tooltip" target="_blank" data-original-title="facebook" data-uw-node-idx="997"><i class="soap-icon-facebook" data-uw-node-idx="998"></i></a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>

        <div class="bottom gray-area" data-uw-node-idx="999">
            <div class="container" data-uw-node-idx="1000">
                <div class="logo pull-left" data-uw-node-idx="1001">
                    <a href="{{ route('home', app()->getLocale()) }}" title="MadaresonaJO- Home" data-uw-node-idx="1002">
                        <img src="{{ asset('WebEn/images/logo.png') }}" alt="TenderJO" data-uw-node-idx="1003">
                    </a>
                </div>

                <div class="copyright pull-right" data-uw-node-idx="1007">
                    <p data-uw-node-idx="1008">{{ __('index.all_rights_save') }} ©  2018-{{ now()->year }} لـِ MadaresonaJO, LLC</p>
                </div>
            </div>
        </div>


    </footer>

    @endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
