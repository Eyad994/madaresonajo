<footer class=" light " style="text-align: center">
    <div class="container" style="margin-bottom: 2px ">
        <div class="row">
            <div class="col-lg-3">
                <h4> معلومات للتواصل </h4>

                <div class="custom">
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li> <span style=" font-size: 12px;"><i class="fad fa-map-marked" style="color:#fff; margin: 0px 10px;"></i> عمان-الأردن-الياسمين -شارع جبل عرفات</span></li>
                            <li> <span><i class="fad fa-envelope" style="color:#fff; margin: 0px 10px;"></i>info@madaresonajo.com</span></li>
                            <li> <span><i class="fad fa-phone" style="color:#fff; margin: 0px 10px;"></i> 00962797902497</span></li>
                            <li> <span><i class="fad fa-clock" style="color:#fff; margin: 0px 10px;"></i>Sun - Thu: 8:00 - 16:00</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <h4> مساعدة و دعم</h4>

                <div class="custom">
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li><a href="{{ route('newSubscription', app()->getLocale()) }}">اشتراك جديد</a></li>
                            <li><a href="{{ route('newSuggestion', app()->getLocale()) }}   ">اقتراحات و ملاحظات</a></li>
                            <li><a href="">اسئلة متكررة</a></li>
                            <li><a href="{{ route('pricing', app()->getLocale()) }}">الرسوم و طرق الدفع</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <h4> اختصارات </h4>

                <div class="custom">
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li><a href="#">رؤيتنا</a></li>
                            <li><a href="#">أهدافنا</a></li>
                            <li><a href="#">رسالتنا</a></li>
                            <li><a href="#">الشروط والأحكام</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div style="text-align: center; margin-bottom: 10px">
                    مدارسنا هي الخدمة الاولى على مستوى الاردن وهي خدمة فاعلة وشاملة ونسعى من خلال هذا الموقع إلى الربط
                    بين أكبر قدر ممكن من المدارس الخاصة والمراكز والمعاهد والجامعات والجهات التعليمية، الأخرى
                </div>
                <h4> Follow us</h4>
                <div class="custom" style="margin-bottom: 15px !important;">
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <style>
                            .fa_c {
                                margin: 0px 5px !important;
                                border-radius: 5px;
                                box-shadow: 0 10px 15px rgba(0, 0, 0, .5);
                            }
                        </style>
                        <a class="facebook fa_c" href="https://web.facebook.com/madaresonajoltd/?ref=bookmarks"><i
                                    class="icon-facebook"></i></a>
                        <a class="twitter fa_c" href="https://twitter.com/MadaresonaJO"><i class="icon-twitter"></i></a>
                        <a class="linkedin fa_c"
                           href="https://www.linkedin.com/organization-guest/company/madaresona?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1432542756242%2Ctas%3Amadaresona&challengeId=AQFYzHBLDqlKPQAAAXOW38fxb21AbYry5eksRAtNi6xsghsMVxN4OU-lEFX8lc4bP6G2eM_EhwpRzjmlTmTo_R-lb6F9nQMROA&submissionId=baa8b416-e800-2616-d452-2878020ed006"><i
                                    class="icon-linkedin"></i></a>
                        <a class="youtube fa_c" href="https://www.youtube.com/channel/UCAGYODjz5zE50x8CAgus9Yg"><i
                                    class="icon-youtube"></i></a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="moduletable">


                <div class="custom">
                    <div>
                        <span> COPYRIGHTS © 2018 - {{ now()->year }} Madaresona Jo. ALL RIGHTS RESERVED  </span>
                        <span><img src="{{ asset('assets/images/logo-light.png') }}" alt=""/></span></div>
                </div>
            </div>

        </div>
    </div>
</footer>
