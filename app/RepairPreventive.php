<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairPreventive extends Model
{
    public $table = 'repair_preventive';

    protected $fillable = [
        'name',
        'active',
    ];
}
