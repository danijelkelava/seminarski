<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use App\Film;
use App\Repositories\Films;
use App\Repositories\Zanrs;

class FilmsController extends Controller
{
    public function index(Films $films)
    {

    	$films = $films->getFilmsNames();

        $collection = [];

        foreach ($films as $film) {
            if (!in_array($film->naslov[0], $collection)) {
                $collection[] = strtoupper($film->naslov[0]);
            }            
        }

    	return view('index', compact('collection'));

    }

    public function showFilms(Films $films, $letter)
    {

        $films = $films->getFilmsByLetter($letter);

        return view('filmovi.index', compact('films'));

    }

    public function unos(Films $films, Zanrs $zanrs)
    {
        
        $films = $films->all();
    	$zanrs = $zanrs->all();
        
    	return view('unos', compact('zanrs', 'films'));
    }

    public function store(StoreFilm $request)
    {

        if ($request->hasFile('slika')) {

            $filename = $request->slika->getClientOriginalName();

            $request->slika->storeAs('public/images', $filename);

            $file_url = Storage::url('images/'.$filename);
            
            if ($request->file('slika')->isValid()) {
                $q = Film::create([
                    'naslov'=>request('naslov'),
                    'id_zanr'=>request('id_zanr'),
                    'godina'=>request('godina'),
                    'trajanje'=>request('trajanje'),
                    'slika'=> (string) $file_url
                ]);
            }

        }
        
        return redirect()->route('unos');
    }

    public function destroy(Film $film)
    {
        //dd($film->slika);
        //Storage::delete('images/logo.png');
        Storage::disk('public')->delete('/images/logo_2.png');
        $film->delete();
        
        return redirect()->route('unos');
        
    }
}
