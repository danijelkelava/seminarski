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
            $collection[] = strtoupper($film->naslov[0]);
        }

    	return view('index', compact('collection'));

    }

    public function showFilms($letter)
    {
        $films = Film::where('naslov','LIKE',"{$letter}%")->get();
        dd($films);
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
            $request->slika->storeAs('public/uploads', $filename);

            $file_url = Storage::url('uploads/'.$filename);
            
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

        $film->delete();

        return redirect()->route('unos');
        
    }
}
