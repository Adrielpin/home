@extends('admin.layouts.dashboard')
@section('page_heading','Planos de assinaturas')
@section('section')

<div class="col-sm-12">

	<div class="row">

		<div class="col-sm-3">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class='fa fa-usd fa-fw'></i> Dólar</strong>
				</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">

							<thead>
								<tr>
									<th>compra</th>
									<th>venda</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $dolar[0] }}</td>
									<td>{{ $dolar[1] }}</td>
								</tr>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<a href="{{ route('admin.plans.create')}}" class="btn btn-primary" role="buttons"> Novo </a>
		</div>
	</div>

	<div class="row">
		<div class='table-responsive'>

			<table class="table table-hover">
				<thead>
					<tr>	
						<th>#</th>
						<th>Nome</th>
						<th>Periodo (meses) </th>
						<th>Moeda</th>
						<th>Valor</th>
						<th>Descrição</th>
						<th>Ativo</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($plans as $row)
					<tr>
						<td>{{ $row->id }}</td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->period }}</td>
						<td>{{ $row->currency }}</td>
						<td>{{ $row->value }}</td>
						<td>{{ $row->description }}</td>

						@if($row->active == 1)
						<td><i class="fa fa-check" style="color:green"></i></td>
						<td>
							<a href="{{ route('admin.plans.edit', $row->id) }}" class="btn btn-default">Editar</a>
							<a href="{{ route('admin.plans.disable', $row->id) }}" class="btn btn-danger">Desativar</a>
						</td>
						@else
						<td><i class="fa fa-times" style="color:red"></i></td>
						<td>
							<a href="{{ route('admin.plans.edit', $row->id) }}" class="btn btn-default">Editar</a>
							<a href="{{ route('admin.plans.enamble', $row->id) }}" class="btn btn-default">Ativar</a>
						</td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>

		{{ $plans->links() }}
		
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function () {
		$("[name='teste']").bootstrapSwitch();

	});
</script>

@stop
