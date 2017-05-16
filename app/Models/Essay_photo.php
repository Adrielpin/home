<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essay_photo extends Model
{
    protected $table = 'essay_photos';

	public function section()
	{
		return $this->belonsTo('App\Models\Essay_sections');
	}
}
