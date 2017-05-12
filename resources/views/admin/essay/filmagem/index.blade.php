@extends('admin.layouts.dashboard')
@section('page_title',' - Lista de diretores ')

@section('section') 

<div class='col-sm-12' style="margin-top: 15px">

	<a href="{{ route('admin.essay.filming.create') }}" class="btn btn-primary"> Novo	</a>

	<h3>Cameramans</h3>

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
			@foreach ($cameramans as $cameraman)
			<tr>
				<td>{{ $cameraman->id }}</td>
				<td>{{ $cameraman->name }}</td>
				<td>{{ $cameraman->created_at }}</td>
				<td><a href="{{ route('admin.essay.filming.edit', $cameraman->id) }}" class="btn btn-default">editar</td>
				<td><a href="{{ route('admin.essay.filming.destroy', $cameraman->id) }}" class="btn btn-default">remover</td>
			</a>
		</tr>
		@endforeach
	</tbody>

</table>

</div>

@stop