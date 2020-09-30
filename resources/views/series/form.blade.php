@extends('layout.principal')
@section('conteudo')
	<h2 class="text-center text-primary bg- bg-warning p-2">Cadastrar nova série</h2>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif		
	
	<form action="/series/adiciona" method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class="form-group">
			<label>Nome da Série:</label>
			<input name="serie" class="form-control" value="{{ old('serie') }}">
		</div>
		<div class="form-group">
			<label>Assistida:</label>
			<select name="assistida" class="form-control"> 
				<option value="N">N</option>
				<option value="S">S</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary btn-block" >Cadastrar</button>
	</form>
@stop