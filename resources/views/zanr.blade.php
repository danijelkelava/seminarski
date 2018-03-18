@extends('layouts.master')

@section('page_title', 'Zanr')

@section('heading', 'Zanrovi')

@section('container')
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 py-4">
		@include('layouts.errors')
		<form method="POST" action="/zanr">
			@csrf
		  <div class="form-group">
		    <label for="zanr">Naslov zanra</label>
		    <input type="text" class="form-control" id="zanr" name="naziv" aria-describedby="zanr" placeholder="Unesi naslov zanra">
		  </div>
		  <button type="submit" class="btn btn-dark">Unesi zanr</button>
		</form>	
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 py-4 bg-info">
		<h2>Lista zanrova</h2>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Naziv zanra</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($zanrs as $zanr)
		    <tr>
		      <td class="align-middle">{{ $zanr->naziv }}</td>
		      <td class="align-middle">

		      	<form method="post" action="/zanr/{{ $zanr->id }}">
		      		@csrf
	                <input type="hidden" name="_method" value="DELETE" />
					<button type="submit" class="btn btn-danger">delete</button>
				</form>

		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</div>

@endsection