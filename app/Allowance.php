<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    protected $fillable=[
        'allowance_type', 'description',
    ];

}
