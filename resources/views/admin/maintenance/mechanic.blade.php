
@extends('layout.maintenance')

@section('content')

<div class="content">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="portlet box blue tabbable">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-car"></i>Mechanics
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable portlet-tabs">
                        <ul class="nav nav-tabs">
                            <li class="">
                                <a href="#portlet_tab_2" data-toggle="tab">
                                Add New </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_tab_1" data-toggle="tab">
                                List </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            {{-- CONTENT TAB #1 --}}
                            <div class="tab-pane active" id="portlet_tab_1">
                                <div style="height: 35px;">
                                    <div style="h-100">
                                        <a href="{{route('maintenance.export', ['type' => 'mechanic'])}}" target="_blank" type="button" class="btn btn-success btn-xs">Export to Excel</a>
                                    </div>
                                </div>
                            <div>
                                    {{-- Show update when clicked edit bttn --}}
                                    @isset($item)
                                    <form class="form-horizontal" action="{{ route('maintenance.mechanic.update', ['mechanic' => $item->id]) }}" method="POST" role="form">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="portlet grey-gallery box">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Update Mechanic
                                                </div>
                                            </div>
                                            <div class="portlet-body"><br><br>
                                                <div class="row">
                                                    <div class="col-md-12 margin-bottom-10">
                                                        <label class="control-label col-md-3">Name</label>
                                                        <div class="col-md-9">
                                                        <input type="text" size="16" name="name" class="form-control" value="{{$item->name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions" style="margin-left:20px;">
                                                    <button type="submit" class="btn btn-sm blue">Update</button>
                                                    <a href="{{route('maintenance.mechanic.index')}}" class="btn btn-sm default">Cancel</a> <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endisset
                                    {{-- Show table --}}
                                    <table class="table table-striped table-bordered table-hover" id="sample_4" >
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>											
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @isset($mechanics)
                                            @foreach ($mechanics as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td align="right">
                                                        <form action="{{route('maintenance.mechanic.destroy', ['mechanic' => $item->id])}}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <a href="{{ route('maintenance.mechanic.edit', ['mechanic' => $item->id]) }}" class="btn green btn-xs"><i class="fa fa-edit"></i></a>
                                                            <button type="submit" class="btn red btn-xs"><i class="fa fa-minus-circle"></i></button>
                                                        </form>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="portlet_tab_2">
                            {{-- CONTENT TAB #2 --}}
                                <h3>Add New</h3>
                                <form action="{{route('maintenance.mechanic.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 margin-bottom-10">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" size="16" name="name" id="name" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>										
                                    <div class="form-actions" style="margin-left:20px;">
                                        <button type="submit" class="btn btn-sm green">Save</button>
                                        <a href="#portlet_tab_1" data-toggle="tab" class="btn btn-sm default">Cancel</a><br><br>											
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection