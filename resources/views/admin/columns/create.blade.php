@extends('admin.layouts.dashboard')
@section('page_title','Novo post')

@section('section')


<div class="col-*-12">

	<div class="col-md-9">

		{{ Form::open(array('route' => 'admin.columns.store', 'method' => 'POST', 'role' => 'form', 'class'=>'form-group', 'files' => true)) }}


		<div class="form-group">

			{!! Form::label('title', 'Titulo', ['class' => 'control-label']) !!}
			{!! Form::text('title',null, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::label('Schedule', 'Agendar', ['class' => 'control-label']) !!}
			{!! Form::date('Schedule',null, ['class' => 'form-control', 'min' => date('Y-m-d', strtotime('today'))]) !!}

		</div>


		<div class="form-group">

			{!! Form::label('author', 'Autor', ['class' => 'control-label']) !!}

			<div class="input-group">
				{!! Form::select('author', $authors, null, ['class' => 'form-control']) !!}
				<span class="input-group-btn">
					<a class="btn btn-default" type="button">Novo</a>
				</span>

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('tag', 'Coluna', ['class' => 'control-label']) !!}

			<div class="input-group">
				{!! Form::select('tag',$tags, null, ['class' => 'form-control']) !!}
				<span class="input-group-btn">
					<a class="btn btn-default" type="button">Novo</a>
				</span>

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('images', 'Imagem', ['class' => 'control-label']) !!}
			{!! Form::file('images[]',['multiple'=>true,'id' => 'images']) !!}
			

		</div>

		<div class="form-group">

			<div class="img">

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('conteudo', 'Texto', ['class' => 'control-label']) !!}
			{!! Form::textArea('conteudo',null, ['class' => 'form-control', 'id'=> 'conteudo']) !!}

		</div>

		

		{{ Form::submit('Salvar', array('class' => 'btn btn-primary' )) }}

		{{ Form::close() }}

	</div>




	<div class="col-md-3" style="background-color: #f8f8f8; height: 100vh">
		<a class="btn btn-default" >preview</a>
	</div>
</div>

<script type="text/javascript">

	function popup (value){

		window.open(value.href, 'newwindow', 'width=600, height=500');

	}

	function readURL(input) {
		if (input.files) {
			for (var i = 0; i < input.files.length; i++) {
				var file = input.files[i];
				var reader = new FileReader();
				reader.onload = function (e) {
					$('.img').append($('<img>',{src: e.target.result, class: 'thumb', width: 200, height: 200}));
				};
				reader.readAsDataURL(file);
			}
		}
	}

	// function readURL(input) {

	// 	if (input.files) {


	// 		var reader = new FileReader();

	// 		reader.onload = function (e) {
	// 			$('.img').append($('<img>',{src: e.target.result, class: 'thumb', width: 200, height: 200}));
	// 		}

	// 		for(var i = 0; i <= input.files.length; i++){
	// 			reader.readAsDataURL(input.files[i]);
	// 		}
	// 	}
	// }

	$("#images").change(function(){
		$('.thumb').remove();
		readURL(this);
	});

</script>
@stop