<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    /**
     * The attributes that are mass assighnable.
     * @var array
     */
    protected $fillable =[
                'emp_id',
                'fname',
                 'id_no',
                 'gender',
                  'marital_status',
                   'dob',
             'contact1',
             'contact2',
             'email',
             'nationality',
              'photo',
            'department',
            'designation',
             'emp_type',
             'emp_date',
             'start_salary',
           'status',
             'kra',
              ' nssf',
                'nhif',
            'bank_name',
             'acc_name',
                'acc_no',
    ];
}
