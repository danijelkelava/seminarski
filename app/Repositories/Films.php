<?php 

namespace App\Repositories;

use App\Film;

class Films
{
	public function all()
	{
		return Film::latest()->get();
	}
}