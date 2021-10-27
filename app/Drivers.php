<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    public $table = 'drivers';

    public $fillable = [
        'driver_name',
        'type',
        'isActive'
    ];
}
