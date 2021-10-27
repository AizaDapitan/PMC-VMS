<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
    protected $table = 'assigned';
    protected $fillable = [
        'name',
        'active',
    ];
}
