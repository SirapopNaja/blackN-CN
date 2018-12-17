<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profilereg extends Model
{
    protected $table = 'profilereg';
    protected $fillable = [
    'name_reg',
    'surname_reg',
    'sex_reg',
    'Birthday_reg',
    'phone_number_reg',
    'email_reg'
    ];
}
