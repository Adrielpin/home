<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essay_section extends Model
{
	protected $table = 'essay_sections';

	public function photos()
	{
		return $this->hasMany('App\Models\Essay_photo','section_id');
	}

	public function part()
	{
		return $this->belongsTo('App\Models\Essay_part');
	}
}
