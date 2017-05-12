@extends('admin.ensaios.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12">

	<div class="row">

		{{ Form::open(array('route' => ['admin.essay.profile.store', $essay->id], 'method' => 'POST', 'role' => 'form', 'files' => true, 'class'=>'form-group')) }}

		<div class="form-group">

			{{Form::label('description', 'Descrição', array( 'class' => 'control-label')) }}
			{{ Form::text('description', null, ['class' => 'form-control']) }}

		</div>

		<div class="form-group">

			{{Form::label('conteudo', 'Descrição', array( 'class' => 'control-label')) }}
			{{ Form::text('conteudo', null, ['class' => 'form-control', 'id' => 'conteudo']) }}

		</div>

		<div class="form-group">
			
			{{ Form::submit('salvar',['class' => 'btn btn-primary']) }}

		</div>

		{{ Form::close() }}

	</div>


</div>

@stop