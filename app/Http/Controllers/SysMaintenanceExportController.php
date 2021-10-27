<?php

namespace App\Http\Controllers;

use App\Assigned;
use App\Downtime;
use App\Mechanic;
use App\RepairBreakdown;
use App\RepairPreventive;
use App\Unit;
use App\UnitStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SysMaintenanceExportController extends Controller
{
    public function export(Request $request)
    {
        $type = $request->route('type');

        switch ($type) {
            case 'assigned':
                $assigned = Assigned::all()->where('active', 1);
                return view('admin.maintenance.export', compact('assigned'));
                break;
            case 'unit':
                $unit = Unit::all()->where('active', 1);
                return view('admin.maintenance.export', compact('unit'));
                break;
            case 'mechanic':
                $mechanic = Mechanic::all()->where('active', 1);
                return view('admin.maintenance.export', compact('mechanic'));
                break;
            case 'status':
                $unitstatus = UnitStatus::all()->where('active', 1);
                return view('admin.maintenance.export', compact('unitstatus'));
                break;
            case 'preventive':
                $preventive = RepairPreventive::all()->where('active', 1);
                return view('admin.maintenance.export', compact('preventive'));
            case 'breakdown':
                $breakdown = RepairBreakdown::all()->where('active', 1);
                return view('admin.maintenance.export', compact('breakdown'));
                break;
            case 'raw_data':
                
                if( $request->has('startDate'))
                {
                    // $startDate = $request->query('startDate');
                    
                }

                $startDate = "2018-01-01";
                $endDate = date("Y-m-d");

                $query = "
                SELECT
                    d.dateStart,
                    d.dateEnd,
                    d.reportedDate,
                    d.addedDate,
                    d.*,
                    u.name as uni,
                    u.type
                FROM downtime d
                LEFT JOIN unit u ON u.id=d.unitId 
                WHERE
                    (
                        (d.dateStart >= '" . $startDate . "' and d.dateEnd <= '" . $endDate . " 23:59:59') 
                    OR 
                        (d.dateEnd >= '" . $startDate . "' and d.dateEnd <= '" . $endDate. " 23:59:59')
                    ) 
                AND 
                    d.active=1 
                ORDER BY
                    d.id desc";


                $raw_data = DB::select($query);
                return view('admin.maintenance.export', compact('raw_data'));
                break;
            default:
                return;
                break;
        }
    }
}
