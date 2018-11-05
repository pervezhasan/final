<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('partial.meta')

</head>

<body class="horizontal-nav boxed skin-megna fixed-layout">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <div class="preloader">

        <div class="loader">

            <div class="loader__figure"></div>

            <p class="loader__label">Elite admin</p>

        </div>

    </div>

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

        

    @include('partial.header')

    @include('partial.navbar')

    @include('partial.sidebar')
    <div class="page-wrapper">
    @yield('content')
        </div>

    @include('partial.footer')
</div>
</body>

</html>

