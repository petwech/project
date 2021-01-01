<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable=[

        'department', 'designation',

    ];
    public function department(){
        return $this->belongsTo('App\Department'); //each of these designation belongs to ONE department
    }


}
