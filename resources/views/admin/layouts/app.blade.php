<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('pageTitle')</title>

    <!-- Font Awesome Icons -->
    <base href="{{ asset('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('include/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('include/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/include/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/include/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('include/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('include/dist/css/phuc.css') }}">
    <link rel="stylesheet" href="{{ asset('include/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('admin.components.header')

    @include('admin.components.menu')

    @yield('content')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @include('admin.components.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="{{ asset('include/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('include/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('include/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('include/dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('include/dist/js/demo.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('include/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('include/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('include/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('include/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('include/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
{{--<script src="{{ asset('include/dist/js/pages/dashboard2.js') }}"></script>--}}
<script src="{{ asset('include/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('include/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/include/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="{{ asset('include/dist/js/category.js') }}"></script>
<script src="{{ asset('include/dist/js/profile.js') }}"></script>
<script src="{{ asset('include/dist/js/post.js') }}"></script>
<script src="{{ asset('include/dist/js/page.js') }}"></script>
@yield('script')
</body>
</html>
