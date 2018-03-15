@extends('layouts.master')
@section('page_title', 'Unos filmova')
@section('heading', 'Lista filmova')
@section('container')

	<form>
	  <div class="form-group">
	    <label for="naslov">Naslov</label>
	    <input type="email" class="form-control" id="naslov" aria-describedby="naslov" placeholder="Unesi naslov filma">
	  </div>
	  <div class="form-group">
	    <label for="zanr">Zanr</label>
	    <input type="email" class="form-control" id="zanr" aria-describedby="zanr" placeholder="Zanr filma">
	  </div>
	  <div class="form-group">
	    <label for="godina">Godina</label>
	    <input type="email" class="form-control" id="godina" aria-describedby="godina" placeholder="Godina snimanja">
	  </div>
	  <div class="form-group">
	    <label for="trajanje">Trajanje</label>
	    <input type="email" class="form-control" id="trajanje" aria-describedby="trajanje" placeholder="Trajanje filma">
	  </div>
	  <div class="form-group">
	    <label for="slika">Slika</label>
	    <input type="email" class="form-control" id="slika" aria-describedby="slika" placeholder="Uploadaj sliku">
	  </div>
	  <button type="submit" class="btn btn-primary">Unesi film</button>
	</form>

@endsection