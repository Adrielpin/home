@extends('admin.layouts.dashboard')
@section('page_heading','Clientes')

@section('section') 


<div class='col-sm-12'>

	<div class="row">

		<a href="{{ route('admin.customers.create') }}" class='btn btn-primary' role='button'> Novo + </a>

	</div>

	<div class='row'>


		<div class="input-group custom-search-form">
			<input type="text" class="form-control" placeholder="Busca... [ NOME, SOBRENOME, EMAIL]" id="searchBox">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
					<i class="fa fa-search"></i>
				</button>
			</span>
		</div>

	</div>

	<div class="row">

		<div class='col-sm-12'>

			<table class="table table-hover">

				<thead>
					<tr>	
						<th>#</th>
						<th>Nome</th>
						<th>Ultimo nome</th>
						<th>E-mail</th>
						<th>País</th>
						<th>Data de nascimento</th>
						<th></th>
					</tr>
					<tr hidden id="result">	
						<th colspan="7">Não encontrado</th>
					</tr>
				</thead>

				<tbody>

					@foreach ($customers as $row)

					<tr>
						<td>{{ $row->id }}</td>
						<td name='first_name'>{{ $row->first_name }}</td>
						<td name="last_name">{{ $row->last_name }}</td>
						<td name="email">{{ $row->email }}</td>
						<td>{{ $row->country }}</td>
						<td>{{ date('d/m/Y', strtotime($row->birth)) }}</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ações <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('admin.customers.edit', $row->id) }}">editar</a></li>
									<li><a href="{{ route('admin.customers.destroy', $row->id) }}">remover</a></li>
									<li class="divider"></li>
									<li><a href="{{ route('admin.customers.show', $row->id) }}">historico</a></li>
								</ul>
							</div>
							
							
						</td>
					</tr>

					@endforeach

				</tbody>

			</table>

		</div>

	</div>

</div>

@stop