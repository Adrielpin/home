@extends('admin.layouts.dashboard')
@section('page_heading','Promoções')

@section('section') 


<div class='col-sm-12'>

	<div class="row">

		<a href="{{ route('admin.banners.create') }}" class='btn btn-primary' role='button'> Novo + </a>

	</div>

	<div class="row">

		<div class='table-responsive'>

			<table class="table table-hover">

				<thead>
					<tr>	
						<th>#</th>
						<th>Nome</th>
						<th>disconto</th>
						<th>periodo (meses)</th>
						<th>Aplicação</th>
						<th>Ativo</th>
						<th></th>
					</tr>
					<tr hidden id="result">	
						<th colspan="7">Não encontrado</th>
					</tr>
				</thead>

				<tbody>

					{{-- @foreach ($promotions as $row)

					<tr>
						<td>{{ $row->id }}</td>
						<td name='first_name'>{{ $row->name }}</td>
						<td name="last_name">{{ $row->discount }}</td>
						<td name="email">{{ $row->period }}</td>
						<td name="email">{{ $row->aplication_id }}</td>
						<td name="email">{{ $row->active }}</td>
						<td>
							<a href="{{ route('admin.promotions.edit', $row->id) }}">editar</a>
							<a href="{{ route('admin.promotions.destroy', $row->id) }}">remover</a>
						</td>
					</tr>

					@endforeach --}}

				</tbody>

			</table>

		</div>

		{{-- {{ $promotions->links() }} --}}

	</div>

</div>

@stop