@extends('layouts.master')

@section('page_title', 'Filmovi')

@section('heading', 'Filmski izbornik')

@section('container')
<div>
	<nav>
		@foreach($collection as $letter)
		<a class="btn btn-outline-primary" href="/filmovi/{{ $letter }}">{{ $letter }}</a>
		@endforeach
	</nav>
</div>
@endsection