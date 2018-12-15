<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'username',
        'password',
        'name',
        'surname',
        'phonenumber',
        'numbercar',
        'email'
    ];
}
