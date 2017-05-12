@extends('admin.layouts.dashboard')
@section('page_heading','Cadastro de promoções')

@section('section') 

<div class='col-sm-6'>


	{{ Form::open(array('route' => 'admin.banners.store', 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

	<div class="form-group">

		{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
		{!! Form::text('name',null, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('discount', 'Disconto (%)', ['class' => 'control-label']) !!}
		{!! Form::number('discount',null, array_merge(['class' => 'form-control', 'min'=>'1', 'max'=>'99'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('period', 'Periodo (em meses)', ['class' => 'control-label']) !!}
		{!! Form::number('period',null, array_merge(['class' => 'form-control', 'min'=>'1', 'max'=>'24'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('file', 'Arquivo (html)', ['class' => 'control-label']) !!}
		{!! Form::textarea('file',null, ['id' => 'file', 'class' => 'form-control', 'min'=>'1', 'max'=>'24']) !!}

	</div>

	<div class="form-group">

		{!! Form::label('active', 'ativado', ['class' => 'control-label']) !!}
		{!! Form::checkbox('active',true, ['class' => 'form-control']) !!}

	</div>

	{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}
	
</div>

<div class="col-sm-6">
	<strong>preview</strong>

	<div class="col-sm-12" style="border:solid 1px; padding: 15px 15px 15px 15px">
		<div ignoreCss="True">
			<div id='preview'></div>
		</div>
	</div>
	
</div>

<script type="text/javascript">
	$('#file').change(function (){
		$('#preview').html($('#file').val());
	})
</script>

@stop