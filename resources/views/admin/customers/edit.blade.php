@extends('admin.layouts.dashboard')
@section('page_heading','Usuarios')

@section('section') 

<div class='col-sm-12'>

	<div class='row'>

		<h1>Atualizar de usuarios</h1>

	</div>


	{{ Form::open(array('route' => array('admin.customers.update', $row->id), 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

	<div class="form-group">

		{!! Form::label('first_name', 'Primeiro nome', ['class' => 'control-label']) !!}
		{!! Form::text('first_name',$row->first_name, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('last_name', 'Ultimo nome', ['class' => 'control-label']) !!}
		{!! Form::text('last_name',$row->last_name, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
		{!! Form::text('email',$row->email, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('country', 'País', ['class' => 'control-label']) !!}
		{!! Form::text('country',$row->country, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('birth', 'Data de nascimento', ['class' => 'control-label']) !!}
		{!! Form::date('birth',$row->birth, array_merge(['class' => 'form-control'])) !!}

	</div>

	{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}

	{{ Form::close() }}

</div>


@stop