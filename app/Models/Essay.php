<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    protected $table = 'essays';

    public function homes()
    {
        return $this->hasMany('App\Models\Essay_home','essay_id');
    }

}
