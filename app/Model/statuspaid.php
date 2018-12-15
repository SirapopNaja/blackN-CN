<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class statuspaid extends Model
{
    protected $table = 'statuspaid';
    protected $fillable = [
        'name_id',
        'name',
        'surname',
        'paidmony'
    ];
}
