<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Zanr;

class ZanrsController extends Controller
{
    public function zanr()
    {
        $zanrs = DB::table('zanrs')->select('id', 'naziv')->get();
    	return view('zanr', compact('zanrs'));
    }

    public function store()
    {
    	//dd(request()->all());
    	//dd(request('naziv'));
    	//dd(request(['naziv', '_token']));

    	/*$zanr = new Zanr;
    	$zanr->naziv = request('naziv');
    	$zanr->save();*/
    	$this->validate(request(), [
    		'naziv'=>'required|string|max:20'
    	]);
    	
    	Zanr::create([
    		'naziv'=>request('naziv')
    	]);

    	return redirect('/zanr');
    }
}
