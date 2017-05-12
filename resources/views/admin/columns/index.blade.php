@extends('admin.layouts.dashboard')
@section('page_title','Artigos')

@section('section') 

	<div class="row">

		<div class='col-sm-12'>

			<table class="table table-hover">

				<thead>
					<tr>	
						<th>#</th>
						<th>Titulo</th>
						<th>Imagens</th>
						<th>Inserido em</th>
						<th>Atualizado em</th>
						<th></th>
					</tr>
					<tr hidden id="result">	
						<th colspan="7">Não encontrado</th>
					</tr>
				</thead>

				<tbody>

					@foreach ($articles as $row)

					<tr>
						<td>{{ $row->id }}</td>
						<td name='title'>{{ $row->title }}</td>
						<td name='imgs'>{{ count($row->photos) }}</td>
						<td name="last_name">{{ $row->created_at }}</td>
						<td name="email">{{ $row->updated_at }}</td>
						
						<td>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ações <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('admin.columns.edit', $row->id) }}">editar</a></li>
									<li><a href="{{ route('admin.columns.destroy', $row->id) }}">remover</a></li>
								</ul>
							</div>						
							
						</td>
					</tr>

					@endforeach

				</tbody>

			</table>

		</div>

	</div>


@stop