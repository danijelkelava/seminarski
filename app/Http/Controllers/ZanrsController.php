<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zanr;

class ZanrsController extends Controller
{
    public function zanr()
    {
    	return view('zanr');
    }

    public function store()
    {
    	//dd(request()->all());
    	//dd(request('naziv'));
    	//dd(request(['naziv', '_token']));

    	/*$zanr = new Zanr;
    	$zanr->naziv = request('naziv');
    	$zanr->save();*/

    	Zanr::create([
    		'naziv'=>request('naziv')
    	]);

    	return redirect('/zanr');
    }
}
