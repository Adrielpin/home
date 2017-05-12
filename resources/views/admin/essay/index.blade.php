@extends('admin.layouts.dashboard')
@section('page_title',' - ensaios')

@section('section') 

<div class='col-sm-12'>

	<table class="table table-hover">

		<thead>

			<tr>
				<th>#</th>
				<th>Ensaio</th>
				<th>Destaques</th>
				<th>Ações</th>
			</tr>

		</thead>

		<tbody>

			@foreach ($essays as $essay)
			<tr>
				<td>{{ $essay->id }}</td>
				<td>{{ $essay->name }}</td>
				<td>{{ count($essay->homes) }}</td>
				<td>
					<a href="{{ route('admin.essay.edit', $essay->id) }}"><span class="glyphicon glyphicon-pencil" title="editar"></span></a>
					<a href="{{ route('admin.essay.destroy', $essay->id) }}"><span class="glyphicon glyphicon-remove" title="remover"></span></a>
					<a href=""><span class="glyphicon glyphicon-ok" title="publicar"></span></a>
				</td>
			</tr>
			@endforeach

		</tbody>

	</table>


</div>

@stop