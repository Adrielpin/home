@extends('admin.layouts.dashboard')
@section('page_heading','Cadastro de promoções')

@section('section') 

<div class='col-sm-6'>


	{{ Form::open(array('route' => array('admin.promotions.update', $promotion->id), 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}
	
	<div class="form-group">
		
		{!! Form::label('aplication', 'Aplicação') !!}	
		{{ Form::select('aplication', $aplications, null, array('class' => 'form-control')) }}
		
	</div>

	<div class="form-group">

		{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
		{!! Form::text('name',$promotion->name, array_merge(['class' => 'form-control'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('discount', 'Disconto (%)', ['class' => 'control-label']) !!}
		{!! Form::number('discount',$promotion->discount, array_merge(['class' => 'form-control', 'min'=>'1', 'max'=>'99'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('period', 'Periodo (em meses)', ['class' => 'control-label']) !!}
		{!! Form::number('period',$promotion->period, array_merge(['class' => 'form-control', 'min'=>'1', 'max'=>'24'])) !!}

	</div>

	<div class="form-group">

		{!! Form::label('file', 'Arquivo (html)', ['class' => 'control-label']) !!}
		{!! Form::textarea('file',$promotion->file, ['id' => 'file', 'class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::label('active', 'ativado', ['class' => 'control-label']) !!}
		{!! Form::checkbox('active',$promotion->active, ['class' => 'form-control']) !!}

	</div>

	{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}
	
</div>

<div class="col-sm-6">
<strong>preview</strong>
<div class="col-sm-12" style="border:solid 1px; padding: 15px 15px 15px 15px">

		<div id='preview'></div>
	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#preview').html($('#file').val());
	});

	$('#file').on('keyup',function (){
		$('#preview').html($('#file').val());
	})
</script>

@stop