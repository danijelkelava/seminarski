@extends('layouts.master')

@section('page_title', 'Filmovi')

@section('heading', 'Filmovi')

@section('container')
<div class="py-4">
	<h2>Lista filmova</h2>
	<div class="row">
	@if(count($films))
	@foreach($films as $film)
	<div class="card my-2 mx-2" style="width: 10rem;">
	  <img class="card-img-top" src="{{ asset($film->slika) }}" alt="Card image cap">
	  <div class="card-body bg-light">
	    <h5 class="card-title">{{ $film->naslov }} ({{ $film->godina }})</h5>
	    <p class="card-text">Trajanje: {{ $film->trajanje }}&nbsp;min</p>
	  </div>
	</div>
	@endforeach
    </div>
	@else
	<p>Nema filmova u bazi</p>	    
	@endif
</div>
@endsection
