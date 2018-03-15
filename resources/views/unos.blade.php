@extends('layouts.master')
@section('page_title', 'Unos filmova')
@section('heading', 'Lista filmova')
@section('container')
<div class="py-2">
	<form>
	  <div class="form-group">
	    <label for="naslov">Naslov</label>
	    <input type="text" class="form-control" id="naslov" aria-describedby="naslov" placeholder="Unesi naslov filma">
	  </div>
	  <div class="form-group">
	    <label for="zanr">Zanr</label>
	    <select id="exampleFormControlSelect1" class="form-control" id="zanr" aria-describedby="zanr">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	      <option>5</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="godina">Godina</label>
	    <select class="form-control" id="godina" aria-describedby="godina">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	      <option>5</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="trajanje">Trajanje</label>
	    <input type="number" class="form-control" id="trajanje" aria-describedby="trajanje" placeholder="Trajanje filma">
	  </div>
	  <div class="form-group">
	    <label for="slika">Slika</label>
	    <input type="file" class="form-control" id="slika" aria-describedby="slika" placeholder="Uploadaj sliku">
	  </div>
	  <button type="submit" class="btn btn-primary">Unesi film</button>
	</form>
</div>
@endsection