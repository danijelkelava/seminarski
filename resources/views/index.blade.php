@extends('layouts.master')

@section('page_title', 'Filmski izbornik')

@section('heading', 'Filmski izbornik')

@section('container')
<div>
	<nav>
		@foreach($collection as $letter)
		<a class="btn btn-outline-primary" href="{{ route('filmovi', ['filmovi'=>$letter]) }}">{{ $letter }}</a>
		@endforeach
		<?php $letters = range('A', 'Z') ?>
		<?php foreach($letters as $let) : ?>
			<a class="btn btn-outline-primary" href="/filmovi/<?php echo $let; ?>" ><?php echo $let; ?></a>
		<?php endforeach; ?>
	</nav>
</div>
@endsection