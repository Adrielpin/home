@extends('admin.layouts.dashboard')
@section('page_title',' - Lista de diretores ')

@section('section') 

<div class='col-sm-12' style="margin-top: 15px">

	<a href="{{ route('admin.essay.agency.create') }}" class="btn btn-primary"> Novo </a>

	<h3>Agencias</h3>

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
			@foreach ($agencies as $agency)
			<tr>
				<td>{{ $agency->id }}</td>
				<td>{{ $agency->name }}</td>
				<td>{{ $agency->created_at }}</td>
				<td><a href="{{ route('admin.essay.agency.edit', $agency->id) }}" class="btn btn-default">editar</td>
				<td><a href="{{ route('admin.essay.agency.destroy', $agency->id) }}" class="btn btn-default">remover</td>
			</a>
		</tr>
		@endforeach
	</tbody>

</table>

</div>

@stop