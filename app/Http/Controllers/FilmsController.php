<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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

    public function store(Request $request)
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
