<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <title>Vehicle | Monitoring</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <meta content="" name="description"/>
      <meta content="" name="author"/>

      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      @include('layout.head.styles.globalstyles')
      <!-- END GLOBAL MANDATORY STYLES -->

      <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/select2/select2.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>


      <!-- BEGIN THEME STYLES -->
      <link href="{{ asset('metronic/assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
      <link id="style_color" href="{{ asset('metronic/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
      <!-- END THEME STYLES -->
      <link rel="shortcut icon" href="favicon.ico"/>
      <style>
         .popover-title {
         color: black;
         }
         .popover-content {
         color: black;
         }
         #dashboard_div {padding-left:340px; }
         #dashboard_div	table { border-collapse:separate;
         /*border-top: 3px solid; */
         }
         #dashboard_div    td, th {
         margin:0;
         /*  border:3px solid grey;
         border-top-width:0px;*/
         white-space:nowrap;
         }
         
         #dashboard_div   .headcol {
         position:absolute;
         width:28em;
         left:28px;
         top:auto;
         border-right: 0px none;
         /* border-top-width:3px; 
         margin-top:-3px; compensate for top border*/
         background-color: white;
         }
         #dashboard_div    .headcol:before {content:'';}
         #dashboard_div    .long { background:yellow; letter-spacing:1em; }
      </style>
   </head>
   <body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
      <!-- BEGIN HEADER -->
        <div class="clearfix">
            @include('layout.header')
        </div>
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
            {{ date('Y') }} &copy; PMC - ICT.
            </div>
            <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
   <!-- Scripts -->
      <script src="{{ asset('metronic/assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
      <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
      <script src="{{ asset('metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

      <script src="{{ asset('metronic/assets/global/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>

      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/select2/select2.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>

      <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/pages/scripts/table-managed.js') }}"></script>
      <script src="{{ asset('js/notifications.js') }}"></script>
      <script src="{{ asset('js/comments.js') }}"></script> 
      
      @stack('javascript')
      
      
      <!-- END JAVASCRIPTS -->
   </body>
   <!-- END BODY -->
</html>