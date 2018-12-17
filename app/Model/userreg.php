<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userreg extends Model
{
    protected $table = 'userreg';
    protected $fillable = [
        'usernamereg',
        'passwordreg',
        'emailreg',
        'student_id',
        'school_name'
    ];
}
