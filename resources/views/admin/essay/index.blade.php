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
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ações <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="{{ route('admin.essay.edit', $essay->id) }}">editar</a></li>
							<li><a href="{{ route('admin.essay.destroy', $essay->id) }}">remover</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('admin.essay.show.index', $essay->id) }}">arquivos</a></li>
						</ul>
					</div>
				</td>
			</tr>
			@endforeach

		</tbody>

	</table>

</div>

@stop