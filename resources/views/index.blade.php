@extends('layouts.master')

@section('page_title', 'Filmski izbornik')

@section('heading', 'Filmski izbornik')

@section('container')
<div>
	<nav>
		<div>
			<p>Izbornik - prvi nacin</p>
			@foreach($collection as $letter)
			<a class="btn btn-outline-primary" href="{{ route('filmovi.showFilms', ['filmovi'=>$letter]) }}">{{ $letter }}</a>
			@endforeach	
		</div>
		<div>
			<p>Izbornik - drugi nacin</p>
			@foreach($alpha_characters as $character)
			<a class="btn btn-outline-primary" href="{{ route('filmovi.showFilms', ['filmovi'=>$character]) }}">{{ $character }}</a>
			@endforeach
		</div>
		
	</nav>
</div>
@endsection