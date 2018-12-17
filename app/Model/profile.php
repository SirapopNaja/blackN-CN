<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'name',
        'surname',
        'sex',
        'Birthday',
        'phone_number',
        'email'
    ];
}
