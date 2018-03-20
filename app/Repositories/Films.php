<?php 

namespace App\Repositories;

use App\Film;

class Films
{
	public function all()
	{
		return Film::latest()->get();
	}

	public function getFilmsNamesFirstLetter()
	{
		$films = Film::select('naslov')->orderBy('naslov', 'asc')->get();

		$collection = [];

        foreach ($films as $film) {
            if (!in_array($film->naslov[0], $collection)) {
                $collection[] = strtoupper($film->naslov[0]);
            }            
        }

        return $collection;
	}

	public function getFilmsByLetter($letter)
	{
		return Film::where('naslov','LIKE',"{$letter}%")->get();
	}
}