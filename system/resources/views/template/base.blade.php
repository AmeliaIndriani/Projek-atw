<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public')}}/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/libs/css/style.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Laravel projek-3</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('template.section.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('template.section.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('template.utils.notif')
                </div>
            </div>
        </div>
        @yield('content')
        <!-- ============================================================== -->
        @include('template.section.footer')
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{url('public')}}/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{url('public')}}/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{url('public')}}/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{url('public')}}/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{url('public')}}/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{url('public')}}/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{url('public')}}/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{url('public')}}/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{url('public')}}/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{url('public')}}/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{url('public')}}/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{url('public')}}/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>