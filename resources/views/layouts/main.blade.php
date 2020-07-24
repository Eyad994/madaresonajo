<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">

<!-- Mirrored from chipblue.net/joomla/codrop/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 21:41:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="CMSBlueTheme"/>
    <meta name="generator" content="Joomla! - Open Source Content Management"/>
    <title>MadaresonaJo</title>
    {{--<link href="cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="components/com_k2/css/k2574e.css?v=2.9.0" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset('assets/css/bootstrap-grid.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/glide.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/content-box.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/contact-form.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/media-box.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/social.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/skin/skin.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/media/icons/iconsmind/line-icons.min.css') }}" rel="stylesheet" type="text/css"/>

@if((app()->getLocale() == 'en'))
        <link href="{{ asset('assets/css/skin.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>

    @endif
    @if((app()->getLocale() == 'ar'))
        <link href="{{ asset('assets/css/skin_ar.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom_ar.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/style_ar.css') }}" rel="stylesheet" type="text/css"/>
    @endif
    <link rel="stylesheet" href="{{ asset('assets/carousel.min.css') }}">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">--}}
    <script src="{{ asset('assets/media/jui/js/jquery.min4c8f.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/media/jui/js/jquery-noconflict4c8f.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/media/jui/js/jquery-migrate.min4c8f.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/media/k2/assets/js/k2.frontend9dbe.js') }}" type="text/javascript"></script>


    <!-- Standard Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">


    <!--LESS stylesheet for managing color presets -->
    <link rel="stylesheet/less" type="text/css"
          href="{{ asset('assets/templates/codrop/less/color193e.css') }}">
    <!-- LESS JS engine  -->
    <script src="{{ asset('assets/templates/codrop/less/less-1.5.0.min.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="site bthome  com_blue_pagebuilder view-page no-layout no-task itemid-154 ">
<!-- Page pre loader -->
<div id="preloader"></div>
@include('madaresona.partials.navbar')
<main>
    <div id="system-message-container">
    </div>
    @yield('sub_header')
    {{--<div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            asdas
        </div>
    </div>--}}
    @yield('content')

</main>

<i class="scroll-top-btn scroll-top show"></i>
@include('madaresona.partials.footer')
<!-- JS Files
================================================== -->
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/glide.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/tab-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/imagesloaded.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/progress.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/pagination.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/social.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/templates/codrop/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/font-awesome/js/all.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnpiNImmRHQBxmLIn5o_zTBufGgXzZBko&language=en&region=JO&libraries=places"></script>
@yield('script')
@include('layouts.mainJs')

</body>

</html>
