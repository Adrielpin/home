@extends('admin.layouts.dashboard')
@section('page_heading','Usuarios')

@section('section') 

<div class='panel'>

	<a href="{{ route('admin.usuarios.create') }}" class='btn btn-primary' role='button'> Novo + </a>

	<div class='panel'>

		<div class='table-responsive'>

			<table class="table table-hover">
				<thead>
					<tr>	
						<th>#</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>acesso</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($rows as $row)
					<tr>
						<td>{{ $row->id }}</td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ $row->userLevel->name }}</td>
						<td>
							<a href="{{ route('admin.usuarios.edit', $row->id) }}">editar</a>
							<a href="{{ route('admin.usuarios.destroy', $row->id) }}">remover</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>

	</div>

</div>

@stop