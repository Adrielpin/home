@extends('admin.layouts.dashboard')
@section('page_title',' - Lista de diretores ')

@section('section') 

<div class='col-sm-12' style="margin-top: 15px">

	<a href="{{ route('admin.essay.photographers.create') }}" class="btn btn-primary"> Novo	</a>

	<h3>Fotografos</h3>

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
			@foreach ($photographers as $photographer)
			<tr>
				<td>{{ $photographer->id }}</td>
				<td>{{ $photographer->name }}</td>
				<td>{{ $photographer->created_at }}</td>
				<td><a href="{{ route('admin.essay.photographers.edit', $photographer->id) }}" class="btn btn-default">editar</td>
				<td><a href="{{ route('admin.essay.photographers.destroy', $photographer->id) }}" class="btn btn-default">remover</td>
			</a>
		</tr>
		@endforeach
	</tbody>

</table>

</div>

@stop