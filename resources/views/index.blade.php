@extends('layouts.master')

@section('page_title', 'Filmski izbornik')

@section('heading', 'Filmski izbornik')

@section('container')
<div>
	<nav>
		<div>
			@if(count($first_letters)>0)
			<p>Izbor filmova iz baze podataka po pocetnom slovu</p>
			@foreach($first_letters as $letter)
			<a class="btn btn-outline-primary" href="{{ route('filmovi.showFilms', ['filmovi'=>$letter]) }}">{{ $letter }}</a>
			@endforeach
			@else
			<p><i>Nema filmova u bazi podataka</i></p>
			@endif
		</div>
	</nav>
</div>
@endsection