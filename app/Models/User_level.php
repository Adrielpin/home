<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_level extends Model
{
    protected $table = 'user_levels';

    public function users(){
    	$this->hasOne('App\Models\User','level');
    }
}
