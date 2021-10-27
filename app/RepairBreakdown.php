<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairBreakdown extends Model
{
    public $table = 'repair_breakdown';

    protected $fillable = [
        'name',
        'active',
    ];
}
