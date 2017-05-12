@extends('admin.layouts.dashboard')
@section('page_title',' - Adicionar diretor')

@section('section') 

<div class='col-sm-12'>

	
	{!! Form::open(array('route' => 'admin.essay.directors.store', 'class' => 'form-group')) !!}


	<div class="form-group">

		{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
		{!! Form::text('name',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::submit('salvar', ['class' => 'btn btn-primary']) !!}

	</div>
	

	{{ Form::close() }}

</div>

@stop