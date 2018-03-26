<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreZanr;
use App\Zanr;
use App\Repositories\Zanrs;

class ZanrsController extends Controller
{
    public function zanr(Zanrs $zanrs)
    {
        $zanrs = $zanrs->all();

    	return view('zanrovi.index', compact('zanrs'));
    }

    public function store(StoreZanr $request)
    {
    	try{

            Zanr::create([
                'naziv'=>request('naziv')
            ]);

        }catch(\Illuminate\Database\QueryException $e){

            dd($e);
            
        }
    	

    	return redirect()->route('zanrovi')->with('success', 'Novi zanr uspjesno dodan');
    }

    public function destroy(Zanr $zanr)
    {

        $zanr->delete();

        return redirect()->route('zanrovi')->with('success', 'Zanr je obrisan');
    }
}
