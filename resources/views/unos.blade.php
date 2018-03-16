@extends('layouts.master')

@section('page_title', 'Unos filmova')

@section('heading', 'Unos filmova')

@section('container')
<div class="py-4">
	<h2>Forma za unos filmova</h2>
	<form method="POST" action="/unos">
		@csrf
	  <div class="form-group">
	    <label for="naslov">Naslov</label>
	    <input type="text" class="form-control" id="naslov" name="naziv" aria-describedby="naslov" placeholder="Unesi naslov filma">
	  </div>
	  <div class="form-group">
	    <label for="zanr">Zanr</label>
	    <select id="exampleFormControlSelect1" class="form-control" id="zanr" name="id_zanr" aria-describedby="zanr">
	      <option value="" selected="selected">--</option>
	    @if(count($zanrs))
	    @foreach($zanrs as $zanr)
	      <option value="{{ $zanr->id }}">{{ $zanr->naziv }}</option>
	    @endforeach
	    @endif
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="godina">Godina</label>
	    <select class="form-control" id="godina" name="godina" aria-describedby="godina">
	    <?php $current_year = (int) date('Y'); ?>
	    @for ($i = 1900; $i <= $current_year; $i++)
		<option value="{{ $i }}">{{ $i }}</option>
		@endfor
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="trajanje">Trajanje</label>
	    <input type="number" class="form-control" id="trajanje" name="trajanje" aria-describedby="trajanje" placeholder="Trajanje filma">
	  </div>
	  <div class="form-group">
	    <label for="slika">Slika</label>
	    <input type="file" class="form-control" id="slika" name="slika" aria-describedby="slika" placeholder="Uploadaj sliku">
	  </div>
	  <button type="submit" class="btn btn-primary" name="unesi">Unesi film</button>
	</form>
</div>
<hr>
<div class="py-4">
	<h2>Lista filmova</h2>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Slika</th>
	      <th scope="col">Naslov filma</th>
	      <th scope="col">Godina</th>
	      <th scope="col">Trajanje</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Mark</td>
	      <td>Otto</td>
	      <td>@mdo</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>
</div>
@endsection
