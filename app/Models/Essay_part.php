<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essay_part extends Model
{
	protected $table = 'essay_parts';

	public function essay()
	{
		return $this->belongsTo('App\Models\Essay','essay_id');
	}

	public function sections()
	{
		return $this->hasMany('App\Models\Essay_section','part_id');
	}
}
