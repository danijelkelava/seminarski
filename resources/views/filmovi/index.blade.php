@extends('layouts.master')

@section('page_title', 'Filmovi')

@section('heading', 'Filmovi')

@section('container')
<div class="py-4 bg-light">
	<h2>Lista filmova</h2>
	@if(count($films))
	@foreach($films as $film)
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="{{ asset('storage/'.$film->slika) }}" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">{{ $film->naslov }}&nbsp;({{ $film->godina }})</h5>
	    <p class="card-text">Trajanje:&nbsp;{{ $film->trajanje }}&nbsp;min</p>
	    <a href="#" class="btn btn-primary">Go somewhere</a>
	  </div>
	</div>
	@endforeach
	@else
	<p>Nema filmova u bazi</p>	    
	@endif
</div>
@endsection
