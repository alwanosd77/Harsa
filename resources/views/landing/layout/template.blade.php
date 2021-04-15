<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 14:31:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link rel="icon" href="{{ asset('front/images/ico.png') }}">

    <!-- Stylesheets ============================================= -->
    @include('landing.layout.css')

    <!-- Document Title
 ============================================= -->
    <title>@yield('title')</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;">
        </div>

        @yield('slider')

        <!-- Header ============================================= -->
        @include('landing.layout.navbar')
        <!-- #header end -->

        <!-- Content ============================================= -->
        @yield('content')
        <!-- #content end -->

        <!-- Footer ============================================= -->
        @include('landing.layout.footer')
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    @include('landing.layout.scripts')

</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 14:31:37 GMT -->

</html>
