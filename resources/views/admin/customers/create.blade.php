@extends('admin.layouts.dashboard')
@section('page_heading','Usuarios')

@section('section') 

<div class='col-sm-12'>

	<div class='row'>

		<h1>Cadastro de usuarios</h1>

	</div>


	{{ Form::open(array('route' => 'admin.customers.store', 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

	<div class="form-group">

		{!! Form::label('first_name', 'Primeiro nome', ['class' => 'control-label']) !!}
		{!! Form::text('first_name',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('last_name', 'Ultimo nome', ['class' => 'control-label']) !!}
		{!! Form::text('last_name',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
		{!! Form::text('email',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group has-warning">

		{!! Form::label('senha', 'Senha', array('class' => 'control-label')) !!}
		{{ Form::password('senha', array('class' => 'form-control')) }}

	</div>

	<div class="form-group">

		{!! Form::label('country', 'País', ['class' => 'control-label']) !!}
		{!! Form::text('country',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('birth', 'Data de nascimento', ['class' => 'control-label']) !!}
		{!! Form::date('birth',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}
</div>


@stop