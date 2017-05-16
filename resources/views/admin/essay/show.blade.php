@extends('admin.essay.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12">

	<div class="row">

		<h3>{{ $essay->name }}</h3>

	</div>

	<div class="row">
{{-- 
		{{ Form::open(array('route' => 'admin.models.store', 'method' => 'POST', 'role' => 'form', 'files' => true, 'class'=>'form-group')) }}

		<div class="form-group">

			{{Form::label('model', 'Modelo', array( 'class' => 'control-label')) }}
			{{ Form::select('model', $models, null, ['class' => 'form-control', 'placeholder' => 'selecione modelo']) }}

		</div>


		<div class="form-group">

			{!! Form::label('director', 'Diretor', array( 'class' => 'control-label')) !!}
			{!! Form::select('director',$directors , null, ['class' => 'form-control', 'placeholder' => 'selecione diretor']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('photographers', 'Fotografo', array( 'class' => 'control-label')) !!}
			{!! Form::select('photographers',$photographers , null, ['class' => 'form-control', 'placeholder' => 'Selecione fotografo']) !!}
			
		</div>

		<div class="form-group">

			{!! Form::label('filming', 'Filmagem', array( 'class' => 'control-label')) !!}
			{!! Form::select('filming',$cameramans , null, ['class' => 'form-control', 'placeholder' => 'Selecione filmagem' ]) !!}

		</div>

		<div class="form-group">

			{!! Form::label('agency', 'Agencia', array( 'class' => 'control-label')) !!}
			{!! Form::select('agency', $agencies, null, ['class' => 'form-control', 'placeholder' => 'selecione agencia']) !!}

		</div>

		<div class="form-group">
			
			{{ Form::submit('salvar',['class' => 'btn btn-primary']) }}

		</div>

		{{ Form::close() }}

	</div>
 --}}

</div>

@stop