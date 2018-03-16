@extends('layouts.master')

@section('page_title', 'Zanr')

@section('heading', 'Zanrovi')

@section('container')
<div class="py-4">
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
<div class="py-4">
	<h2>Lista zanrova</h2>
	<ul class="list-group">
		@foreach($zanrs as $zanr)
		<li class="list-group-item">{{ $zanr->naziv }}</li>
		@endforeach
	</ul>
</div>
@endsection