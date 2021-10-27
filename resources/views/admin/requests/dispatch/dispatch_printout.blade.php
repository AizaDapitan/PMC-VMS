@extends('layout.dispatch_printout')

<img src="{{ asset('assets/images.jpg') }}" style="height: 120px;" alt="">
<h3 style="font-family:'Times New Roman', Times, serif; margin-left: 110px;margin-top: -90px;"><strong>PHILSAGA MINING CORPORATION</strong></h3>
<a href="javascript:;" class="btn btn-lg btn-success pull-right printBtn" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!-- BEGIN BREADCRUMBS -->
            <br/><br/>
            <div class="breadcrumbs">
                <ul class="list-unstyled">
                    <li style="margin-left: 110px;">
                        Purok 1-A Bayugan 3, Rosario, Agusan Del Sur
                    </li>
                </ul>
            </div>
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class="page-content-container">
                <div class="page-content-row">
                    <div class="page-content-col">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <div class="invoice">
                            <div class="row invoice-logo">
                                <div class="col-xs-12">
                                    <center><h3 style="font-family:'Times New Roman', Times, serif"><strong>ENGINEERING & CONSTRUCTION SERVICES DIVISION</strong></h3></center>
                                    <center><h4 style="font-family:'Times New Roman', Times, serif"><strong>TRIP TICKET FORM & FUEL SLIP FORM</strong></h4></center>
                                    <center><strong>TRIP TICKET # : {{ $id }} </strong></center>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="list-unstyled">
                                        <li> Request # : {{ $vehicle_request[0]->refcode ?? '' }} </li>
                                        <li> Driver : {{ $dispatch[0]->driver_name ?? '' }} </li>
                                        <li> Vehicle : {{ $unit[0]->name ?? '' }} </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="list-unstyled">
                                        <li> Date Needed : {{ $date_needed ?? '' }} </li>
                                        <li> Date Out : {{ $date_start ?? '' }}</li> 
                                         {{-- <li> Date Out : {{ \Carbon\Carbon::parse($dispatch[0]->addedDate)->format('Y-m-d h:i:s A') ?? '' }}</li> --}}
                                        <li> Plate # : {{ $unit[0]->plateno ?? '' }} </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="list-unstyled">
                                        <li> Destination : {{ strtoupper(str_replace('|',' - ',$dispatch[0]->destination)) ?? '' }}</li>
                                        <li> Passengers : {{ ucfirst(str_replace('|',' * ',$dispatch[0]->passengers)) ?? '' }} </li>
                                        <li> Purpose : {{ strtoupper($dispatch[0]->purpose) ?? '' }} </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="list-unstyled">
                                        <li> Contact Person : {{ strtoupper($request_other_info[0]->contact_person) ?? '' }} </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="list-unstyled">
                                        <li> Contact # : {{ $request_other_info[0]->contact_no ?? ''}} </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <br>
                                    <table class="table borderless" style="border-top: 4px dotted black;">
                                        <thead>
                                            <tr>
                                                <th colspan="2" style="font-size: 20px;font-family:'Times New Roman', Times, serif"><br><center>RETURN SLIP FORM</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Return Date & Time : {{ $return_date }} </td>
                                                <td>Odometer Start :  {{ number_format($dispatch[0]->odometer_start,2) }} </td>
                                            </tr>
                                            <tr>
                                                <td>ECS Security Guard : ____________________________</td>
                                                <td>Odometer End : {{ $odo_end }} </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table borderless" style="display:none;border-top: 4px dotted black;">
                                        <thead>
                                            <tr>
                                                <th colspan="2" style="font-size: 20px;font-family:'Times New Roman', Times, serif"><center>FUEL SLIP FORM</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td colspan="2">Request Cost Code : {{ $vehicle_request[0]->costcode ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle Cost Code : {{ $dispatch[0]->vehicle_cost_code ?? '' }} </td>
                                                <td>RQ # : {{ $dispatch[0]->RQ }} </td>
                                            </tr>
                                            <tr>
                                                <td>Department : {{ $dispatch[0]->deptId }} </td>
                                                <td>Item Code : {{ $dispatch[0]->itemCode }}</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type : {{ $dispatch[0]->fuel_added_type }} </td>
                                                <td>UoM : {{ $dispatch[0]->uom }} </td>
                                            </tr>
                                            <tr>
                                                <td>Requested Qty : {{ number_format($dispatch[0]->fuel_requested_qty,2) }} </td>
                                                <td>Acutal Qty : ____________________________</td>
                                            </tr>
                                            <tr>
                                                <td><center><br>&nbsp;<br>__________________________________<br>ISSUED BY (MCD)</center></td>
                                                <td><center><br> {{ $dispatch[0]->driver_name }} <br>__________________________________<br>RECEIVED BY</center></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>                                     
                                    <table class="table borderless" style="border-top: 4px dotted black;">
                                        <tbody>
                                            <tr><td colspan="3">&nbsp;</td></tr>
                                            <tr>
                                                <td>Dispatched By :</td>
                                                <td>Driver :</td>
                                                <td>Approved By :</td>
                                            </tr>
                                            <tr>
                                                <td><center> {{ $users[0]->fullname ?? '' }} <br>__________________________________<br><br>Date : ____________________________<br>( MM / DD / YYYY )</center></td>
                                                <td><center> {{ $dispatch[0]->driver_name ?? '' }} <br>__________________________________<br><br>Date : ____________________________<br>( MM / DD / YYYY )</center></td>
                                                <td><center>DAMASCO, PHIL CARLO<br>__________________________________<br><br>Date : ____________________________<br>( MM / DD / YYYY )</center></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="pull-right">
                                        <strong>Confirmed / Accepted By:</strong>
                                        <br><br>
                                        <table>
                                        <tbody>
                                            <tr>
                                                <td>End-User: ________________________________<br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name & Signature</center></td>
                                            </tr>
                                            <tr>
                                                <td>Date : ________________________________<br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( MM / DD / YYYY )</center></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection