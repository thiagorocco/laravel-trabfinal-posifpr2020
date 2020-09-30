@extends('layout.principal')
@section('conteudo')

	<?php //echo $series; ?>

	@if(empty($series))
		<div class="alert alert-danger">	
			Você não tem nenhum produto cadastrado!
		</div>

	@else
		<h2 class="text-center text-light bg- bg-primary p-2">Lista de Séries Cadastradas</h2>
		<table class="table table-striped table-bordered table-hover text-center">
			<tr class="bg bg-secondary text text-warning">
				<th>Série</th>
				<th>Assistida?</th>
				<th colspan="2" >Ações</th>
			</tr>
			@foreach ($series as $s)
				<tr class="{{$s->assistida=='S' ? 'bg-success' : '' }}">
				<td>{{$s->serie}} </td>
				<td>{{$s->assistida}}</td>
				<td>
					<a href="{{action('SeriesController@atualiza',$s->id)}}">
						Alterar
					</a>
				</td>
				<td>	
					<a href="{{action('SeriesController@remove',$s->id)}}">
						Excluir
					</a>
				</td>
				</tr>
			@endforeach
		</table>
	@endif
	<h4 class="text-right">
		<span class="bg-success">
			Série já assistida
		</span>
	</h4>
	
	@if(old('serie'))
		<div class="alert alert-success">
			A série {{ old('série') }} foi adicionada com sucesso!.
		</div>
	@endif
@stop