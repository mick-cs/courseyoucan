<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="">
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{asset('admin/vendor/fontawesome/css/font-awesome.min.css')}}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{asset('admin/vendor/whirl/dist/whirl.css')}}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    @yield('style')
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" id="maincss"></head>
<body>
    <div class="wrapper">
        @if (Auth::check())
            @include('admin.partials.navbar')
            @include('admin.partials.sidebar')
            @include('admin.partials.offsidebar')
        @endif

        @yield('container')
    </div>

    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{asset('admin/vendor/modernizr/modernizr.js')}}"></script>
    <!-- JQUERY-->
    <script src="{{asset('admin/vendor/jquery/dist/jquery.js')}}"></script>
    <!-- BOOTSTRAP-->
    <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- STORAGE API-->
    <script src="{{asset('admin/vendor/jQuery-Storage-API/jquery.storageapi.js')}}"></script>
    <!-- JQUERY EASING-->
    <script src="{{asset('admin/vendor/jquery.easing/js/jquery.easing.js')}}"></script>
    <!-- ANIMO-->
    <script src="{{asset('admin/vendor/animo.js/animo.js')}}"></script>
    <!-- SLIMSCROLL-->
    <script src="{{asset('admin/vendor/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- SCREENFULL-->
    <script src="{{asset('admin/vendor/screenfull/dist/screenfull.js')}}"></script>
    <!-- LOCALIZE-->
    <script src="{{asset('admin/vendor/jquery-localize-i18n/dist/jquery.localize.js')}}"></script>
    <!-- RTL demo-->
    <script src="{{asset('admin/js/demo/demo-rtl.js')}}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    @yield('script')
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{asset('admin/js/app.js')}}"></script>
</body>
</body>
</html>