<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <title>Vehicle | Monitoring</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   @include('layout.head.styles.globalstyles')
   <!-- END GLOBAL MANDATORY STYLES -->

   <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/select2/select2.css') }}" />
   <link rel="stylesheet" type="text/css"
      href="{{ asset('metronic/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}" />
   <link rel="stylesheet" type="text/css"
      href="{{ asset('metronic/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}" />
   <link rel="stylesheet" type="text/css"
      href="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}" />


   <!-- BEGIN THEME STYLES -->
   <link href="{{ asset('metronic/assets/global/css/components.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('metronic/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('metronic/assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css" />
   <link id="style_color" href="{{ asset('metronic/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet"
      type="text/css" />
   <link href="{{ asset('metronic/assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css" />
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
   <style>
      .popover-title {
         color: black;
      }

      .popover-content {
         color: black;
      }

      #dashboard_div {
         padding-left: 340px;
      }

      #dashboard_div table {
         border-collapse: separate;
         /*border-top: 3px solid; */
      }

      #dashboard_div td,
      th {
         margin: 0;
         /*  border:3px solid grey;
         border-top-width:0px;*/
         white-space: nowrap;
      }

      #dashboard_div .headcol {
         position: absolute;
         width: 28em;
         left: 28px;
         top: auto;
         border-right: 0px none;
         /* border-top-width:3px; 
         margin-top:-3px; compensate for top border*/
         background-color: white;
      }

      #dashboard_div .headcol:before {
         content: '';
      }

      #dashboard_div .long {
         background: yellow;
         letter-spacing: 1em;
      }
   </style>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
   <!-- BEGIN HEADER -->
   @include('layout.header')
   <!-- END HEADER -->

   <!-- BEGIN CONTENT -->
   @yield('content')
   <!-- END CONTENT -->

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
   <script src="{{ asset('metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript">
   </script>
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="{{ asset('metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}"
      type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript">
   </script>
   <script src="{{ asset('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
      type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
      type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript">
   </script>
   <script src="{{ asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
      type="text/javascript"></script>

   <script src="{{ asset('metronic/assets/global/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>

   <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/select2/select2.min.js') }}"></script>
   <script type="text/javascript"
      src="{{ asset('metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
   <script type="text/javascript"
      src="{{ asset('metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}">
   </script>
   <script type="text/javascript"
      src="{{ asset('metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}">
   </script>
   <script type="text/javascript"
      src="{{ asset('metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}">
   </script>
   <script type="text/javascript"
      src="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
   <script src="{{ asset('metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>


   <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
   <script src="{{ asset('metronic/assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
   <script src="{{ asset('js/excel/src/jquery.table2excel.js') }}"></script>
   <script src="{{ asset('js/notifications.js') }}"></script>
   <script src="{{ asset('js/comments.js') }}"></script>
   <script>
      function exportToExcel(table){
            jQuery(table).table2excel({
               name: "VMS",
               filename: "VMS" //do not include extension
            }); 
         }
   </script>

   <script>
      jQuery(document).ready(function() {    
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            TableAdvanced.init();
            //exportToExcel('#maintenance_excel');
         });
   </script>
   <script>
      var TableAdvanced = function () {


            var initTable4 = function () {
               var table = $('#sample_4');


               var oTable = table.dataTable({
                  "columnDefs": [{
                     "orderable": false,
                     "targets": [0]
                  }],
                  "order": [
                  [0, 'desc']
                  ],
                  "lengthMenu": [
                  [5, 15, 20, -1],
                  [5, 15, 20, "All"] 
                  ],
                  "pageLength": 300,
                  });

var tableWrapper = $('#sample_4_wrapper');
var tableColumnToggler = $('#sample_4_column_toggler');

tableWrapper.find('.dataTables_length select').select2(); 
var hidden_fields = [4,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
for (i = 0; i < hidden_fields.length; i++) {
    oTable.fnSetColumnVis(hidden_fields[i], false);
}

$('input[type="checkbox"]', tableColumnToggler).change(function () {
   /* Get the DataTables object again - this is not a recreation, just a get of the object */
   var iCol = parseInt($(this).attr("data-column"));
   var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
   //alert(iCol+' = '+bVis);
   oTable.fnSetColumnVis(iCol, (bVis ? false : true));
});
}



return {


   init: function () {

      if (!jQuery().dataTable) {
         return;
      }

      initTable4();
      
   }

};

}();
   </script>
   <script>
      function deleted(x){        
         var r = confirm("Are you sure you want to delete this record?");
         if (r == true) {
             window.location = "downtimes.php?act=delete&id="+x;
         } else {
             return false;
         }
      }
   </script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>