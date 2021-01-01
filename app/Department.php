<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=[
        'department', 'description',
    ];
    public function  Designation()
    {
        return $this->hasMany('App\Designation'); // This department has MANY designations
    }
}
