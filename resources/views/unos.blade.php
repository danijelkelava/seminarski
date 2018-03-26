@extends('layouts.master')

@section('page_title', 'Unos filmova')

@section('heading', 'Unos filmova')

@section('container')
<div class="py-4">
	<h2>Forma za unos filmova</h2>
	@include('layouts.errors')
	@include('layouts.success')
	<form method="POST" action="{{ route('unos') }}" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="naslov">Naslov</label>
	    <input type="text" class="form-control" id="naslov" name="naslov" aria-describedby="naslov" placeholder="Unesi naslov filma">
	  </div>
	  <div class="form-group">
	    <label for="zanr">Zanr</label>
	    <select id="exampleFormControlSelect1" class="form-control" id="zanr" name="id_zanr" aria-describedby="zanr">
	      <option value="" selected="selected" disabled>Odaberi zanr</option>
	    @if(count($zanrs)>0)
	    @foreach($zanrs as $zanr)
	      <option value="{{ $zanr->id }}">{{ $zanr->naziv }}</option>
	    @endforeach
	    @endif
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="godina">Godina snimanja</label>
	    <select class="form-control" id="godina" name="godina" aria-describedby="godina">
	    <option value="" selected="selected" disabled>Odaberi godinu</option>
	    <?php $current_year = (int) date('Y'); ?>
	    @for ($i = $current_year; $i >= 1900; $i--)
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
	  <button type="submit" class="btn btn-dark" name="unesi">Unesi film</button>
	</form>
</div>
<hr>
<div class="py-4 bg-light">
	@if(count($films)>0)
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
	  	
	  	@foreach($films as $film)
	    <tr>
	      <td class="align-middle"><img src="{{ asset($film->slika) }}" style="width: 200px;"></td>
	      <td class="align-middle">{{ $film->naslov }}</td>
	      <td class="align-middle">{{ $film->godina }}</td>
	      <td class="align-middle">{{ $film->trajanje }}&nbsp;min</td>
	      <td class="align-middle">
		    <form method="post" action="{{ route('film.destroy', ['film'=>$film->id]) }}">
			    @csrf
	            <input type="hidden" name="_method" value="DELETE" />
			    <button type="submit" class="btn btn-danger">delete</button>
		    </form>
	      </td>
	    </tr>
	    @endforeach
	   </tbody>
	</table>	    
	    @else	  
	    <p><i>Nema filmova u bazi podataka</i></p></td>	    	    
	    @endif
</div>
@endsection
