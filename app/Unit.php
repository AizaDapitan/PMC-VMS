<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $table = 'unit';
    
    protected $fillable = [
        'name',
        'type',
        'required_availability_hours',
        'active',
        'dept','model',
        'plateno',
        'chassisno',
        'engineno',
        'color',
        'datasource',
        'vehicle_code',
        'isECS',
        'odo_status',
        'is_dispose'
    ];

    public function dispatches(){
        return $this->hasMany('App\Dispatch', 'unitId');
    }
}
