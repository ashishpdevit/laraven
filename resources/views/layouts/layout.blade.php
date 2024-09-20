<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laraven | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assest/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assest/dist/css/adminlte.min.css')}}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assest/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('images/Synergie-Logoface-small-icn.png') }}"
    alt="AdminLTELogo" height="60" width="60">
  </div>
@include('layouts.header')

@include('layouts.sidebar')

@yield('contents')
  <!-- /.control-sidebar -->
@include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assest/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assest/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('assest/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assest/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assest/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assest/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assest/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assest/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assest/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assest/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assest/dist/js/pages/dashboard.js')}}"></script>
<script>
  
</script>
@yield('script')
</body>
</html>
