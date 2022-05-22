<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
        name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{asset('/')}}assets/backend/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="{{asset('/')}}assets/backend/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('/')}}assets/backend/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('css')

    <style>
        :root{
            --primaryOne:#27a9e3;
        }
    </style>
</head>

<body>
@include('sweetalert::alert')
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
>
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('backend.includes.header')
<!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('backend.includes.sidebar')

<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
@yield('content')

{{--    <h1>this is a heading</h1>--}}


<!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('/')}}assets/backend/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}assets/backend/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}assets/backend/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}assets/backend/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="{{asset('/')}}assets/backend/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{asset('/')}}assets/backend/libs/flot/excanvas.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot/jquery.flot.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot/jquery.flot.pie.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot/jquery.flot.time.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot/jquery.flot.stack.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot/jquery.flot.crosshair.js"></script>
<script src="{{asset('/')}}assets/backend/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="{{asset('/')}}assets/backend/dist/js/pages/chart/chart-page-init.js"></script>

@stack('js')

</body>
</html>
