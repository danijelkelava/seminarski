<?php

namespace App\Repositories;

use App\Zanr;

class Zanrs
{
	public function all()
	{
		return Zanr::select('id', 'naziv')->orderBy('naziv', 'asc')->get();
	}
}