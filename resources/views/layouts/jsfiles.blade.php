@section('script')

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
  var activeLink = window.location.hash;
  console.log('activeLink', activeLink);

 
</script>
@endsection