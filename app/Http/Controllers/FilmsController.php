<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Zanr;

class FilmsController extends Controller
{
    public function index()
    {
    	
    	return view('index');
    }

    public function unos()
    {
    	$zanrs = DB::table('zanrs')->select('id', 'naziv')->get();
    	return view('unos', compact('zanrs'));
    }
}
