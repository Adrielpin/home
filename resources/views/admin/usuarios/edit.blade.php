@extends('admin.layouts.dashboard')
@section('page_heading','editar usuarios')

@section('section') 

<div class='col-sm-12'>

	<div class='col-sm-12'>

		<div class='row'>

			<h1>{{ $row->name}}</h1>

		</div>


		{{ Form::open(array('route' => array('admin.usuarios.update', $row->id), 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

		<div class="form-group">

			{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
			{!! Form::text('name',$row->name, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
			{!! Form::text('email',$row->email, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::label('tipos', 'Nivel', array('class' => 'control-label')) !!}
			{{ Form::select('tipos', $tipos, $row->user_type_id, array('class' => 'form-control')) }}

		</div>

		{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}

	</div>



	@stop