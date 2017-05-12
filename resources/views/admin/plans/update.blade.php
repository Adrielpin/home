@extends('admin.layouts.dashboard')
@section('page_heading','Novo plano')
@section('section')

{{ Form::open()}}


<div class="form-group">

	{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
	{!! Form::text('name',null, array_merge(['class' => 'form-control'])) !!}

</div>

<div class="form-group">

{!! Form::label('period', 'periodo em meses', ['class' => 'control-label']) !!}
{!! Form::text('period',null, array_merge(['class' => 'form-control'])) !!}

</div>

<div class="form-group">
	
	{!! Form::label('currency', 'Valor', ['class' => 'control-label']) !!}
	
	<div class="input-group">

		{!! Form::select('currency',['BRL'=>'R$','USD'=>'US$'],null, ['class' => 'form-control']) !!}
		<span class='input-group-addon'>:</span>
		{!! Form::number('value',null, array_merge(['class' => 'form-control'])) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('description', 'description', ['class' => 'control-label']) !!}
	{!! Form::textarea('namdescriptione',null, ['class' => 'form-control']) !!}

</div>


<div class="form-group">

	{!! Form::label('active', 'ativado', ['class' => 'control-label']) !!}
	{!! Form::checkbox('active',null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

	
	{!! Form::submit('salvar', ['class' => 'btn btn-success']) !!}

</div>

{!! Form::close() !!}