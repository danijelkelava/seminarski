<?php

namespace App\Http\Controllers;

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
    	$zanrs = Zanr::all();
    	return view('unos', compact('zanrs'));
    }
}
