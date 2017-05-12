@extends('admin.layouts.dashboard')
@section('page_title',' - Adicionar modelo')

@section('section') 


	<div class="col-sm-12">

		{{ Form::open(array('route' => 'admin.essay.models.store', 'method' => 'POST', 'role' => 'form', 'files' => true, 'class'=>'form-group')) }}

		<div class="form-group">

			{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
			{!! Form::text('name',null, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
			{!! Form::text('email',null, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

		

			{!! Form::label('image', 'imagen modelo', ['class' => 'control-label']) !!}	
			{!! Form::file('image',['id' => 'image']) !!}

		</div>


		{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}

	</div>


@stop