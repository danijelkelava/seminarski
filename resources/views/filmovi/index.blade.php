@extends('layouts.master')

@section('page_title', 'Filmovi')

@section('heading', 'Filmovi')

@section('container')
<div class="py-4 bg-light">
	<h2>Lista filmova</h2>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Slika</th>
	      <th scope="col">Naslov filma</th>
	      <th scope="col">Godina snimanja</th>
	      <th scope="col">Trajanje</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	  	@if(count($films))
	  	@foreach($films as $film)
	    <tr>
	      <td class="align-middle"><img src="{{ asset('storage/'.$film->slika) }}" style="width: 200px;"></td>
	      <td class="align-middle">{{ $film->naslov }}</td>
	      <td class="align-middle">{{ $film->godina }}</td>
	      <td class="align-middle">{{ $film->trajanje }}&nbsp;min</td>
	    </tr>
	    @endforeach
	    @else
	    <tr>
	    	<td><p>Nema filmova u bazi</p></td>
	    </tr>	    
	    @endif
	  </tbody>
	</table>
</div>
@endsection
