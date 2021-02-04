<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $fillable=[
       'colour',  'mat_name','cm','kgs','rolls','delivered_by','edate',
   ];
}
