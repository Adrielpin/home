@extends('admin.ensaios.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12" style="margin-top: 10px">

	<div class='col-sm-12' style="margin-top: 10px;">

		{!! Form::open(array('route' => ['admin.essay.photos.parts.store',$essay->id], 'class' => 'form-group', 'files' => true)) !!}

		<div class="form-group">

			{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
			{!! Form::text('name',null, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'onclick' => 'close();']) !!}

		</div>

		{{ Form::close() }}

	</div>

</div>

@stop
