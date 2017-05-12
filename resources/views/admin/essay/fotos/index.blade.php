@extends('admin.ensaios.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12" style="margin-top: 10px">

	@if (count($essay->parts) > 0 )

	<table class="table table-hover">

		<thead>

			<tr>
				<th>#</th>
				<th>Parte</th>
				<th>seções</th>
				<th>ações</th>
			</tr>

		</thead>

		<tbody>

			@foreach ($essay->parts as $part)

			<tr>
				<td>{{ $part->id }}</td>
				<td>{{ $part->name}}</td>
				<td>{{ count($part->sections) }}</td>
				<td>
					<a href="{{ route('admin.essay.photos.parts.edit', [$essay->id, $part->id] ) }}" class="btn btn-default"> editar </a>
					<a href="{{ route('admin.essay.photos.parts.destroy', [$essay->id, $part->id] ) }}" class="btn btn-default"> remover </a>
				</td>

			</tr>

			@endforeach

		</tbody>

	</table>

	@endif

	<div class="btn-group">

		<a href="{{ route('admin.essay.photos.parts.create', [$essay->id]) }}" class="btn btn-default">Adicionar parte</a>
		
	</div>

</div>

@stop
