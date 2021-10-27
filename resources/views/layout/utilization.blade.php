<!DOCTYPE html>
<html lang="en">

<head>
   @if(Request::is('vehicle/dispatch/*'))
      @include('layout.head.dispatch')
   @else
      @include('layout.head.utilization')
   @endif
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
   <!-- BEGIN HEADER -->
   @include('layout.header')
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->   
   <div class="page-container">
      <!-- BEGIN CONTENT -->
      @yield('content')
      <!-- END CONTENT -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="page-footer">
      <div class="page-footer-inner">
         <?php echo date('Y'); ?> &copy; PMC - ICT.
      </div>
      <div class="page-footer-tools">
         <span class="go-top">
            <i class="fa fa-angle-up"></i>
         </span>
      </div>
   </div>

   @if(Request::is('vehicle/dispatch/*'))
   @else
      <!-- Scripts -->
      <script src="{{ asset('metronic/assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
      <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
      <script src="{{ asset('metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/select2/select2.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/clockface/js/clockface.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
      <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/excel/src/jquery.table2excel.js') }}"></script>
      <script src="{{ asset('metronic/assets/admin/pages/scripts/components-pickers.js') }}"></script>
      <script src="{{ asset('js/notifications.js') }}"></script>
      <script src="{{ asset('js/comments.js') }}"></script>
      @yield('javascript')
      @stack('script')
   @endif
   
   
   <!-- END JAVASCRIPTS -->
</body>

   @if (Request::is('vehicle/dispatch/*'))
      <script src="{{ asset('metronic/assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>

      <script src="{{ asset('metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
      <!-- END CORE PLUGINS -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/select2/select2.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js') }}"></script>

      <script src="{{ asset('metronic/assets/global/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('metronic/datepicker/js/jquery-1.8.3.min.js') }}" charset="UTF-8"></script>
      <script type="text/javascript" src="{{ asset('metronic/datepicker/js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
      <script src="{{ asset('js/notifications.js') }}"></script>
      <script src="{{ asset('js/comments.js') }}"></script>
      @yield('javascript')
      @stack('script')
   @endif
<!-- END BODY -->

</html>