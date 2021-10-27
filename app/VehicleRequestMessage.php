<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleRequestMessage extends Model
{
    public $table = 'vehicle_request_message';

    public $fillable = [
        'vehicle_request_id',
        'message'
    ];
}
