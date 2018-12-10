<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userstd extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'id_user','Pass_user','name','surname','phonenumber','numbercar','email'     
    ];
}
