<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

        <header class="header">
            <div class="page-brand">
                <a class="link" target="_blank" href="{{ url('/') }}">
                    <span class="brand">
                        {{ config('app.name') }}
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1">

                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>

                @include('layouts.partials.header')

            </div>
        </header>

        @include('layouts.partials.sidebar')

        <div class="content-wrapper">

            @yield('content')

            <footer class="page-footer">
                <div class="font-13">{{ date('Y') }} &copy; <b> Software</b> - All rights reserved.</div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>

    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
 
    @include('layouts.partials._script')
    @include('backend.vendor.lara-izitoast.toast')
    <script>
        $('.number').keyup(function(e) {
            if (/\D/g.test(this.value)) {

                this.value = this.value.replace(/\D/g, '');
            }
        });
    </script>
</body>

</html>
