<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use App\Film;
use App\Repositories\Zanrs;

class FilmsController extends Controller
{
    public function index()
    {
    	
    	return view('index');
    }

    public function unos(Zanrs $zanrs)
    {

    	$zanrs = $zanrs->all();
        $films = Film::latest()->get();

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
        
        return redirect('/unos');
    }
}
