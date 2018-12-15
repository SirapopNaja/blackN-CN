<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'sex',
        'Birthday'
    ];
}
