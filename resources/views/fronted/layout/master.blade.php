<!doctype html>
<html lang="en">

<head>
    @include('fronted.layout.includes.head')
</head>

<body id="top">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar mt-3">
            @include('fronted.layout.includes.header')
        </header>

      @yield('content')


        <footer class="site-footer">
            @include('fronted.layout.includes.footer')
        </footer>
    </div>

@include('fronted.layout.includes.script')


</body>

<!-- Mirrored from preview.colorlib.com/theme/jobboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 04:36:40 GMT -->

</html>
