<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use App\Film;
use App\Repositories\Films;
use App\Repositories\Zanrs;
use Illuminate\Support\Facades\Input;

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

        if (Input::hasFile('slika')) {

            $filename = $request->slika->getClientOriginalName();

            $request->slika->move(public_path('images'), $filename);
            
            if (file_exists(public_path('images' . DIRECTORY_SEPARATOR . $filename))) {
               $file_url = 'images/'.$filename;
            }

        }

        try{

            Film::create([
                'naslov'=>request('naslov'),
                'id_zanr'=>request('id_zanr'),
                'godina'=>request('godina'),
                'trajanje'=>request('trajanje'),
                'slika'=> (string) $file_url
            ]);

        }catch(\Illuminate\Database\QueryException $e){

            dd($e);
            
        }

        
        
        return redirect()->route('unos')->with('success', 'Film uspjesno unesen');
    }

    public function destroy(Film $film)
    {

        File::delete($film->slika);
        $film->delete();
        
        return redirect()->route('unos')->with('success', 'Film je izbrisan');
        
    }
}
