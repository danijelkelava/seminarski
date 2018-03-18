<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreZanr;
use App\Zanr;
use App\Repositories\Zanrs;

class ZanrsController extends Controller
{
    public function zanr(Zanrs $zanrs)
    {
        $zanrs = $zanrs->all();
        //$zanrs = Zanr::latest()->get();//oldest

    	return view('zanr', compact('zanrs'));
    }

    public function store(StoreZanr $request)
    {
    	
    	Zanr::create([
    		'naziv'=>request('naziv')
    	]);

    	return redirect('/zanr');
    }
}
