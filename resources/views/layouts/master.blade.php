<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- head -->
    @include('partials/head')
    <!-- head -->
    <body>
        <!-- header section start -->
        @include('partials/header')
        <!-- header section end -->

        <!-- body -->
        @section('body')
        @show
        <!-- body -->

        <!-- footer section start -->
        @include('partials/footer')
    </body>
</html>
