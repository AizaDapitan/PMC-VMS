
@extends('layout.maintenance')

@section('content')
<div class="content">
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- Begin: life time stats -->
            <div class="portlet box blue tabbable">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-car"></i>Unit
                    </div>
                </div>
                                
                <div class="portlet-body">
                    <div class="portlet-tabs">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#portlet_tab2" data-toggle="tab">
                                    Add New 
                                </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_tab1" data-toggle="tab">
                                    List
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            {{-- CONTENT TAB #1 --}}
                            <div class="tab-pane active" id="portlet_tab1">
                                <form role="form" action="{{route('maintenance.unit.index')}}" method="GET">
                                    <div style="height: 35px;">                                
                                        <div style="h-100">
                                            <a href="{{route('maintenance.export', ['type' => 'unit'])}}" target="_blank" type="button" class="btn btn-success btn-xs">Export to Excel</a>
                                            
                                            <span class="pull-right">
                                            <label>Search Plate No </label>
                                            <input type="" name="plateno" id="plateno">
                                            <button type="submit" class="btn-primary" style="height: 26px; border: 0.2px;"><i class="fa fa-search"></i></button>
                                            </span>                                                                                                                                        
                                        </div>
                                    </div>

                                    @if(Session::has('success'))

                                    <script>
                                        setTimeout(function(){ $('#success').fadeOut();
                                        }, 3000 );
                                    </script>
                                    <div id="success" class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><span class="fa fa-check-square-o"></span> Success!</strong> {{ Session::get('success') }}
                                    </div>

                                    @endif

                                    @if(Session::has('error'))

                                    <script>
                                        setTimeout(function(){ $('#error').fadeOut();
                                        }, 3000 );
                                    </script>
                                    <div id="error" class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><span class="fa fa-warning"></span> Error!</strong> {{ Session::get('error') }}
                                    </div>

                                    @endif                                    
                                </form>
                                <div>
                                    {{-- DISPLAY ON EDIT --}}
                                    @isset($item)
                                    <form class="form-horizontal" action="{{route('maintenance.unit.update',['unit' => $item->id])}}" method="POST" role="form">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="portlet grey-gallery box">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Update Unit
                                                </div>
                                            </div>

                                            <div class="portlet-body"><br><br>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Vehicle Cost Code</label>
                                                        <div class="col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="vehicle_code_new" value="{{ $item->vehicle_code }}">
                                                        </div>
                                                       <!--  <div class="col-md-3">
                                                        <input type="text" class="form-control text-uppercase" name="vehicle_code" value="{{ $item->vehicle_code ? explode('.', $item->vehicle_code)[0] : '' }}" maxlength="9">
                                                        </div>
                                                        {{-- <div class="col-md-3">
                                                        <input class="form-control" type="text" size="16" class="form-control text-uppercase" name="dept_code" value="{{  $item->vehicle_code ? explode('.', $item->vehicle_code)[1] : '' }}" maxlength="5">
                                                        </div> --}}
                                                        {{-- <div class="col-md-3">
                                                            <input readonly class="form-control" type="text" size="16" class="form-control" value=".158">
                                                        </div> --}} -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Department</label>
                                                        <div class="col-md-9">
                                                            <select onchange="disableTextbox()" class="form-control input-large select2me" name="department" id="department" data-placeholder="Select Department">   
                                                                <option value="{{ $item->dept }}" selected>{{ ($item->dept) }}</option>                 
                                                                <option value="">Select Dept</option>  
                                                                @foreach($dept as $key => $dep) 
                                                                <option value="{{ $dep['name'] }}">{{ ($dep['name']) }}</option>
                                                                @endforeach
                                                           </select>
                                                           <input type="hidden" name="check" id="check">
                                                       </div>                                              
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Brand</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="brand" class="form-control" value="{{$item->name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Model</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="model" id="model" value="{{$item->model}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Plate Number</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="plateno" id="plateno" value="{{$item->plateno}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Chassis Serial #</label>
                                                        <div class="col-md-9">
                                                            <input type="text" size="16" name="chassisno" id="chassisno" value="{{$item->chassisno}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Engine Serial #</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="engineno" id="engineno" value="{{$item->engineno}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Color</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="color" id="color" value="{{$item->color}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Type</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="type" required="required">
                                                                <option value="">- Select -</option>
                                                                <option value="Light Vehicle" {{$item->type == 'Light Vehicle' ? 'selected' : ''}}>Light Vehicle</option>
                                                                    <option value="Medium Vehicle" {{$item->type == 'Medium Vehicle' ? 'selected' : ''}}>Medium Vehicle</option>
                                                                    <option value="Heavy Equipment" {{$item->type == 'Heavy Equipment' ? 'selected' : ''}}>Heavy Equipment</option>
                                                                    <option value="Motorcycle" {{$item->type == 'Motorcycle' ? 'selected' : ''}}>Motorcycle</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Required Availability Hours</label>
                                                        <div class="col-md-9">
                                                        <input type="number" size="16" name="required_availability_hours" value="{{$item->required_availability_hours}}" step="0.01" id="required_availability_hours" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions" style="margin-left:20px;">
                                                    <button type="submit" class="btn btn-sm blue">Update</button>
                                                    <a href="{{route('maintenance.unit.index')}}" class="btn btn-sm default">Cancel</a> <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    @endisset       

                                    <table class="table table-striped table-bordered table-hover" style="font-size:11px;">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Vehicle Code</th>
											<th>Brand</th>
											<th>Model</th>
											<th>Plate No.</th>
											<th>Chassis No.</th>
											<th>Engine No.</th>
											<th>Color</th>
											<th>Department</th>
											<th>Type</th>
											<th>Required Availability Hrs</th>
											<th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @isset($units)
                                            @foreach ($units as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->vehicle_code}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->model}}</td>
                                                    <td>{{$item->plateno}}</td>
                                                    <td>{{$item->chassisno}}</td>
                                                    <td>{{$item->engineno}}</td>
                                                    <td>{{$item->color}}</td>
                                                    <td>{{$item->dept ?? 'ECS'}}</td>
                                                    <td>{{$item->type}}</td>
                                                    <td align="right">{{$item->required_availability_hours}}</td>
                                                    <td align="right">
                                                        <form action="{{route('maintenance.unit.destroy', ['unit' => $item->id])}}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <a href="{{ route('maintenance.unit.edit', ['unit' => $item->id]) }}" class="btn green btn-xs tooltips" data-container="body" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            @if($item->is_dispose==0)
                                                            <a href="maintenance/unit/{{ $item->id }}/dispose" class="btn blue btn-xs tooltips" data-container="body" data-placement="top" data-original-title="Deactivate"><i class="fa fa-times"></i></a>
                                                            @else
                                                            <a href="maintenance/unit/{{ $item->id }}/undispose" class="btn purple btn-xs tooltips" data-container="body" data-placement="top" data-original-title="Activate"><i class="fa fa-check"></i></a>
                                                            @endif
                                                            <button type="submit" class="btn red btn-xs tooltips" data-container="body" data-placement="top" data-original-title="Delete"><i class="fa fa-minus-circle"></i></button>                                                            
                                                        </form>                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <div class="tab-pane" id="portlet_tab2">
                            {{-- CONTENT TAB #2 --}}
                               <div class="">
                                    <h3>Add New</h3>
                                    <form class="form-horizontal" action="{{route('maintenance.unit.store')}}" method="POST" role="form">
                                        @csrf                                        
                                        <div class="form-body">
                                            <div class="form-group">
                                                <!-- <div class="col-md-12"> -->
                                                    <label class="control-label col-md-3" style="text-align:left;">Vehicle Cost Code</label>
                                                    <div class="col-md-3">
                                                        <input class="form-control text-uppercase" type="text" placeholder="Vechicle code" name="vehicle_code_new"/>
                                                    </div>
                                                    <!-- <div class="col-md-3">
                                                        <input class="form-control text-uppercase" type="text" placeholder="Vechicle code" name="vehicle_code" maxlength="9" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input class="form-control text-uppercase" type="text" placeholder="Department code"size="16" class="form-control" name="dept_code" maxlength="5">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input readonly class="form-control" type="text" size="16" class="form-control" value=".158"> -->
                                                    </div>
                                                <!-- </div> -->
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Department</label>

                                                <div class="col-md-4">													
                                                    <select onchange="disableTextbox()" class="form-control input-large select2me" name="department" id="department" data-placeholder="Select Department">                                                         
                                                        <option value="">Select Dept</option>  
                                                        @foreach($dept as $key => $item)
                                                        <option value="{{ $item['name'] }}">{{ ($item['name']) }}</option>
                                                        @endforeach
                                                   </select>
                                                   <input type="hidden" name="check" id="check">
                                               </div>
                                               <div class="col-md-5">													
                                                   <input onblur="disableDropdown()" class="form-control" type="text" size="16" name="departmanual" id="departmanual" class="form-control">													
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Brand</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="brand" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Model</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="model" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Plate Number</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="plate_number" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Chassis Serial#</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="chassis_serial" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Engine Serial#</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="engine_serial" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Color</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="color" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Type</label>
                                                <div class="col-md-9">
                                                    <select name="unit_type" class="form-control">
                                                        <option value="">- Select -</option>
                                                        <option value="Light Vehicle">Light Vehicle</option>
                                                        <option value="Medium Vehicle">Medium Vehicle</option>
                                                        <option value="Heavy Equipment">Heavy Equipment</option>
                                                        <option value="Motorcycle">Motorcycle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" style="text-align:left;">Required Availability Hours</label>
                                                <div class="col-md-9">
                                                    <input type="number" size="16" name="required_availability_hours" value="0.00" step="0.01" id="required_availability_hours" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions" style="margin-left:20px;">
                                            <button type="submit" class="btn btn-sm blue">Save</button>
                                            <a href="" class="btn btn-sm default">Cancel</a> <br><br>
                                        </div>
                                    </form>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                 </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
</div>
@endsection
@push('javascript')

@endpush

