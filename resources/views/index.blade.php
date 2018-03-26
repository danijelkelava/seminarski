@extends('layouts.master')

@section('page_title', 'Filmski izbornik')

@section('heading', 'Filmski izbornik')

@section('container')
<div>
	<nav>
		<div>
			<p>Izbornik</p>
			@if(count($first_letters)>0)
			<p>Filmovi po pocetnim imenima</p>
			@foreach($first_letters as $letter)
			<a class="btn btn-outline-primary" href="{{ route('filmovi.showFilms', ['filmovi'=>$letter]) }}">{{ $letter }}</a>
			@endforeach
			@else
			<p>Nema filmova u bazi podataka</p>
			@endif
		</div>
	</nav>
</div>
@endsection