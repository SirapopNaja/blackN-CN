<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class statusgo extends Model
{
    protected $table = 'statusgo';
    protected $fillable = [
        'name_id', 
        'go'
    ];
}
