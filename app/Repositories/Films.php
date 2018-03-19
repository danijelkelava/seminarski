<?php 

namespace App\Repositories;

use App\Film;

class Films
{
	public function all()
	{
		return Film::latest()->get();
	}

	public function getFilmsNames()
	{
		return Film::select('naslov')->orderBy('naslov', 'asc')->get();
	}

}