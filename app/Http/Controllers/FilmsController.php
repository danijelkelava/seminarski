<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    public function index()
    {
    	
    	return view('index');
    }

    public function unos()
    {
    	$zanrs = DB::table('zanrs')->select('id', 'naziv')->get();
        $films = Film::latest()->get();
    	return view('unos', compact('zanrs', 'films'));
    }

    public function store()
    {
        Film::create([
            'naslov'=>request('naslov'),
            'id_zanr'=>request('id_zanr'),
            'godina'=>request('godina'),
            'trajanje'=>request('trajanje'),
            'slika'=>request('slika')
        ]);
        return redirect('/unos');
    }
}
