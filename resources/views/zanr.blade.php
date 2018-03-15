@extends('layouts.master')

@section('page_title', 'Zanr')

@section('heading', 'Zanrovi')

@section('container')
<div class="py-2">
	@include('layouts.errors')
	<form method="POST" action="/zanr">
		@csrf
	  <div class="form-group">
	    <label for="zanr">Naslov zanra</label>
	    <input type="text" class="form-control" id="zanr" name="naziv" aria-describedby="zanr" placeholder="Unesi naslov zanra">
	  </div>
	  <button type="submit" class="btn btn-primary">Unesi zanr</button>
	</form>	
</div>
@endsection