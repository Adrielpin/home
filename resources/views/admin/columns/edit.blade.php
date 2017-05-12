@extends('admin.layouts.dashboard')
@section('page_title','Edit')

@section('section')


<div class="col-*-12">

	<div class="col-md-9">

		<h4 class="text-center"> {{$article->id . ' - ' . $article->title}}</h4>

		{{ Form::open(array('route' => array('admin.columns.update', $article->id), 'method' => 'POST', 'role' => 'form', 'class'=>'form-group', 'files' => true)) }}


		<div class="form-group">

			{!! Form::label('author', 'Autor', ['class' => 'control-label']) !!}

			<div class="input-group">
				{!! Form::select('author', $authors, $article->author_id, ['class' => 'form-control']) !!}
				<span class="input-group-btn">
					<a class="btn btn-default" type="button">Novo</a>
				</span>

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('tag', 'Coluna', ['class' => 'control-label']) !!}

			<div class="input-group">
				{!! Form::select('tag',$tags, $article->tag_id, ['class' => 'form-control']) !!}
				<span class="input-group-btn">
					<a class="btn btn-default" type="button">Novo</a>
				</span>

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('images', 'Imagem', ['class' => 'control-label']) !!}
			{!! Form::file('images[]',['multiple'=>true,'id' => 'images']) !!}
			
		</div>

		<script type="text/javascript">

			function removeImage(id){

				alert('remove');

				$.ajax({
					url: '/admin/columns/'+id+'/removephoto'
					type: 'POST',
					data: {_token: CSRF_TOKEN},
					dataType: 'JSON',
					success: function (data) {
						console.log(data);
					}
				});
			}

		</script>

		<div class="form-group">

			<div class="img" style="width:100%; height: 300px; overflow-y: auto">

				@foreach ($article->photos as $k => $photo)

				<div class="col-md-3">
					<img class=".thumb" src="{{ Storage::url('columns/'.$photo->name) }}" width="100%" height="200px">
					<button type="button" id="{{ $photo->id }}" style="border: 1px solid #000; background-color: transparent;" onclick="removeImage(this.id);"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
				</div>

				@endforeach

			</div>

		</div>

		<div class="form-group">

			{!! Form::label('conteudo', 'Texto', ['class' => 'control-label']) !!}
			{!! Form::textArea('conteudo',$article->text, ['class' => 'form-control', 'id'=> 'conteudo']) !!}

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

	$("#images").change(function(){
		$('.thumb').remove();
		readURL(this);
	});

</script>
@stop