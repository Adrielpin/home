@extends('admin.layouts.dashboard')
@section('page_title',' - Adicionar diretor')

@section('section') 

<div class='col-sm-12'>

	
	{!! Form::open(array('route' => array('admin.essay.directors.update', $cameraman->id), 'class' => 'form-group')) !!}


	<div class="form-group">

		{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
		{!! Form::text('name',$cameraman->name, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::submit('salvar', ['class' => 'btn btn-primary']) !!}

	</div>
	

	{{ Form::close() }}

</div>

@stop