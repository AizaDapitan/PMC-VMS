<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enums\DispatchStatusEnum;

class Department extends Model
{
    public $table = 'department';
    
    public $fillable = [
        'name'
    ];

    public function dispatch(){
        return $this->hasMany('App\Dispatch', 'deptId');
    }

    public function scopeDispatches($query){
        return $query->with([
            'dispatch'
        ])
        ->whereHas('dispatch', function($query){
            $query->where('status', '<>', DispatchStatusEnum::CANCELLED);
        });
    }
}
