<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitStatus extends Model
{
    public $table = 'unit_status';

    protected $fillable = [
        'status',
    ];
}
