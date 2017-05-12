@extends('admin.layouts.dashboard')
@section('page_title',' - Lista de diretores ')

@section('section') 

<div class='col-sm-12' style="margin-top: 15px">

	<a href="{{ route('admin.essay.directors.create') }}" class="btn btn-primary"> Novo	</a>

	<h3>Diretores</h3>

	<table class="table table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Adicionado em</th>
				<th>edit<th>
			</tr>

		</thead>

		<tbody>
			@foreach ($diretores as $diretor)
			<tr>
				<td>{{ $diretor->id }}</td>
				<td>{{ $diretor->name }}</td>
				<td>{{ $diretor->created_at }}</td>
				<td><a href="{{ route('admin.essay.directors.edit', $diretor->id) }}" class="btn btn-default">editar</td>
				<td><a href="{{ route('admin.essay.directors.destroy', $diretor->id) }}" class="btn btn-default">remover</td>
			</a>
		</tr>
		@endforeach
	</tbody>

</table>

</div>

@stop