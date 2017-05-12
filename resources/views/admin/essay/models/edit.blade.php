@extends('admin.layouts.dashboard')
@section('page_title',' - Editar modelo')

@section('section') 


<div class="col-sm-12">


	{{ Form::open(array('route' => ['admin.essay.models.update', $model->id], 'method' => 'POST', 'role' => 'form', 'files' => true, 'class'=>'form-group')) }}

	<div class="form-group">

		{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
		{!! Form::text('name',$model->name, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
		{!! Form::text('email',$model->email, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::label('image', 'imagen modelo', ['class' => 'control-label']) !!}	
		{!! Form::file('image',['id' => 'image']) !!}

	</div>


	{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}

</div>


@stop