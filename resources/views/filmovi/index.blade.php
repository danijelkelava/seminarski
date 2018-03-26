@extends('layouts.master')

@section('page_title', 'Filmovi')

@section('heading', 'Filmovi')

@section('container')
<div class="py-4">
	<h2>Lista filmova</h2>
	<div class="row">
	@if(count($films))
	@foreach($films as $film)
	<div class="card col-xs-4 my-4" style="height: 18rem;">
	  <img class="card-img-top" src="{{ asset($film->slika) }}" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">{{ $film->naslov }}&nbsp;({{ $film->godina }})</h5>
	    <p class="card-text">Trajanje:&nbsp;{{ $film->trajanje }}&nbsp;min</p>
	  </div>
	</div>
	@endforeach
    </div>
	@else
	<p>Nema filmova u bazi</p>	    
	@endif
</div>
@endsection
