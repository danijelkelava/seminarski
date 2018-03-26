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

    	$first_letters = $films->getFilmsNamesFirstLetter();

    	return view('index', compact('first_letters'));

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

            //$file_url = Storage::url('images/'.$filename);
            $file_url = 'images/'.$filename;
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
        
        return redirect()->route('unos')->with('success', 'Film uspjesno unesen');
    }

    public function destroy(Film $film)
    {

        Storage::disk('public')->delete($film->slika);
        $film->delete();
        
        return redirect()->route('unos')->with('success', 'Film je izbrisan');
        
    }
}
