<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class table extends Controller
{
      public function getTable($table){
        return \DB::getSchemaBuilder()->getColumnListing($table);
    }}
