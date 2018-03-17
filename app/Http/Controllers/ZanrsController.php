<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Zanr;

class ZanrsController extends Controller
{
    public function zanr()
    {

        $zanrs = Zanr::latest()->get();//oldest

    	return view('zanr', compact('zanrs'));
    }

    public function store(Request $request)
    {
    	//dd(request()->all());
    	//dd(request('naziv'));
    	//dd(request(['naziv', '_token']));

    	/*$zanr = new Zanr;
    	$zanr->naziv = request('naziv');
    	$zanr->save();*/
    	$this->validate($request, [
    		'naziv'=>'required|string|unique:zanrs|max:20'
    	]);
    	
    	Zanr::create([
    		'naziv'=>request('naziv')
    	]);

    	return redirect('/zanr');
    }
}
