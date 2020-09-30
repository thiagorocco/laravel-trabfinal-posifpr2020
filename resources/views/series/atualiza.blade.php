@extends('layout.principal')
@section('conteudo')
	<h2 class="text-center text-warning bg- bg-info p-2">Atualização de dados da série</h2>
	<form action="/series/alterar" method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<input type="hidden" name="id" value="{{$s->id}}">

		<div class="form-group">
			<label>Nome da Série</label>
			<input name="serie" class="form-control" value="{{$s->serie}}">
		</div>
		<div class="form-group">
			<label>Assistida</label>
			<select name="assistida" class="form-control"> 
				@if(($s->assistida=='N'))
					<option value="N" selected="selected">N</option>
					<option value="S" >S</option>	
				@else
					<option value="N">N</option>
					<option value="S" selected="selected">S</option>	
				@endif		
			</select>
		</div>
		<button type="submit" class="btn btn-primary btn-block" >Atualizar</button>
	</form>
@stop