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
      <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>


      <!-- BEGIN THEME STYLES -->
      <link href="{{ asset('metronic/assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
      <link id="style_color" href="{{ asset('metronic/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('metronic/assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>

      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
      <link href="{{ asset('css/requests-vehicle.css') }}" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('datatables/jquery.dataTables.min.css') }}">
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	
      <!-- END THEME STYLES -->
      <link rel="shortcut icon" href="favicon.ico"/>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
      
   </head>
   <body style="background-color: #fff;" class="page-header-fixed page-quick-sidebar-over-content page-full-width">
   <!-- BEGIN HEADER -->
   @include('layout.header')
   <!-- END HEADER -->

   <!-- BEGIN CONTENT -->
   @yield('content')
   <!-- END CONTENT -->

   <!-- Scripts -->
   <!-- UIkit JS -->
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	   <script src="{{ asset('datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/vehicle_requests/requests-vehicle.js') }}" type="text/javascript"></script>

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

      <script src="{{ asset('metronic/assets/global/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>

      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/select2/select2.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
      <script src="{{ asset('metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>

      
      <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
      <script src="{{ asset('metronic/assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/excel/src/jquery.table2excel.js') }}"></script>
      <script src="{{ asset('js/notifications.js') }}"></script>
      <script src="{{ asset('js/comments.js') }}"></script> 

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
      <!-- END JAVASCRIPTS -->
      <script>
         $(document).ready(function () {
            function setSelectedIndex(s, i){
               console.log(i)
               s.options[i].selected = true
               return
            }

            $('#dataTableRequests').DataTable({
               initComplete: function(settings, json){
                  $('.edit-btn').click(function(){
                     var id = $(this).attr('value')
                     $('#edit-request-modal').modal({
                        'show': true
                     })

                     $.ajax({
                        url: `/vehicle/${id}/request`,
                        type: 'GET',
                        success: function(data){
                           document.getElementById('vehicle-request-form-edit').value = data.id
                           setSelectedIndex(document.getElementById('departments-select-edit'), data.dept_id)
                           document.getElementById("date_needed-edit").value = data.date_needed
                           $('#costCode-edit').attr('value', data.costcode)
                           $('#purpose-edit').attr('value', data.purpose)
                        }
                     })
                  })

                  $('.comment-action-btn').click(function(){
                     var id = $(this).attr('value')
                     $('#add-message-modal').modal({
                        'show': true
                     })

                     $('#vehicle-request-message').attr('action', '/vehicle/request/'+id+'/message'   )
                  })
               },
               processing: true,
               language: {
                  processing: '<span>Processing'
               },
               responsive: true,
               order: [[ 0, 'desc' ]],
               // serverSide: true,
               searching: false,
               lengthChange: false,
               ajax: '{{ empty($route) ? '':route($route) }}',
               columns: [
                  { data: 'id' },
                  { data: 'dept' },
                  { data: 'date_needed' },
                  { data: 'created_at' },
                  { data: 'purpose' },
                  { data: 'last_message' },
                  { data: 'status' },
                  { data: 'tripTicket', render: function(data){
                     return $('<textarea />').html(data).text()
                  } },
                  { data: 'action', searchable: true, orderable: false },
               ]
            })

         })
      </script>
   </body>
   <!-- END BODY -->
</html>