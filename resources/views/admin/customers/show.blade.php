@extends('admin.layouts.dashboard')
@section('page_heading','Clientes')

@section('section') 

<div class='col-sm-12'>



	<div class="row">

		<span>{{$customer->first_name}}</span>
		<span>{{$customer->last_name}}</span>
		<span>{{$customer->email}}</span>

	</div>

	<div class="row">

		<div class='table-responsive'>

			<table class="table table-hover table-bordered">

				<caption>Cartões</caption>

				<thead>

					<tr>	
						<th>#</th>
						<th>Bandeira</th>
						<th>Numero</th>
						<th>validade</th>
						<th>Rebillign</th>
					</tr>
					
				</thead>

				<tbody>

					@if(!$customer->creditcards)
					@foreach ($customer->creditcards as $row)
					
					<tr>

						<td>{{ $row->id }}</td>
						<td name='number'>{{ $row->flag }}</td>
						<td name='number'>{{ $row->number }}</td>
						<td name="validate">{{ $row->validate }}</td>
						<td name="validate">{{ $row->rebilling_active }}</td>

					</tr>

					@endforeach
					@else
					<tr>
						<td colspan="5">Nada consta</td>
					</tr>
					@endif
				</tbody>

			</table>

		</div>

	</div>

	<div class="row">

		<div class='table-responsive'>

			<table class="table table-hover table-bordered">

				<caption>Assinaturas</caption>

				<thead>

					<tr>
						<th>Cód</th>
						<th>Plano</th>
						<th>promotion</th>
						<th>inscreveu</th>
						<th>atualizado</th>
						<th>status</th>

					</tr>

				</thead>

				<tbody>
					
					@if(!isset($orders))
					@foreach ($orders as $row)
					

					<tr>
						<td name='number'>{{ $row->id }}</td>
						<td name='number'>{{ $row->plan }}</td>
						<td name='number'>{{ $row->promotion }}</td>
						<td name='number'>{{ $row->created_at }}</td>
						<td name='number'>{{ $row->updated_at }}</td>
						<td name='number'>{{ $row->status }}</td>

					</tr>

					@endforeach

					@else
					
					<tr>
						<td colspan="6">Nada consta</td>
					</tr>

					@endif

					

				</tbody>

			</table>

		</div>

	</div>

</div>

@stop