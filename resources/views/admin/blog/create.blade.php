@extends('admin.layouts.dashboard')
@section('page_title','Novo post')

@section('section')


<div class="col-*-12">
	<div class="col-md-9">


		{{ Form::open(array('route' => 'admin.customers.store', 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}
		<div class="form-group">

			{!! Form::label('Title', 'Titulo', ['class' => 'control-label']) !!}
			{!! Form::text('Title',null, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::label('Schedule', 'Agendar', ['class' => 'control-label']) !!}
			{!! Form::date('Schedule',null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('author', 'Autor', ['class' => 'control-label']) !!}
			{!! Form::select('author',[1=>'Fulano',2=>'Ciclano'], null, ['class' => 'form-control']) !!}
			<a href="{{ url('/login') }}">Novo</a>

		</div>

		<div class="form-group">

			{!! Form::label('tag', 'Coluna', ['class' => 'control-label']) !!}
			{!! Form::select('tag',[1=>'coluna - 1',2=>'Coluna - 2'], null, ['class' => 'form-control']) !!}
			<a href="{{ url('/modelos') }}" class="btn btn-primary" onclick="popup(this); return false;">Novo</a>

		</div>

		<div class="form-group">

			{!! Form::label('description', 'Descrição', ['class' => 'control-label']) !!}
			{!! Form::textArea('description',null, array_merge(['class' => 'form-control', 'rows'=>3])) !!}

		</div>


		<div class="form-group">

			{!! Form::label('conteudo', 'Texto', ['class' => 'control-label']) !!}
			{!! Form::textArea('conteudo',null, ['class' => 'form-control', 'id'=> 'conteudo']) !!}

		</div>



		{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}

		{{ Form::close() }}

	</div>




	<div class="col-md-3" style="background-color: #f8f8f8; height: 100vh">
		<button class="btn btn-default">preview</button>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function () {

			// $('#Schedule').attr('min', new Date().toJSON().slice(0,10));
			$('#Schedule').attr('min', new Date().toLocaleDateString());

			// alert(new Date().toLocaleDateString());

			CKEDITOR.replace('conteudo');



		});

	function popup (value){

		window.open(value.href, 'newwindow', 'width=600, height=500');

	}

</script>
@stop