<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essay_home extends Model
{

	protected $table = 'essay_homes';

	public function èssay()
	{
		return $this->belongsTo('App\Models\Essay');
	}
}
