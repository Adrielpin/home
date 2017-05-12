@extends('admin.layouts.dashboard')
@section('page_title',' - Cadastro de ensaios')
@section('page_description','Cadastro de ensaios CMS bella')
@section('page_author','Adriel Pinheiro')

@section('section') 

<div class="col-md-12" style="margin-top: 10px">

	{!! Form::open(array('route' => 'admin.essay.store', 'class' => 'form-group', 'files' => true)) !!}

	<div class="form-group">

		{!! Form::label('title', 'Titulo', ['class' => 'control-label']) !!}
		{!! Form::text('title',$essay_name, array_merge(['class' => 'form-control', 'placeholder' => 'Titulo do ensaio'])) !!}

	</div>

    <div class="form-group">

        {!! Form::label('description', 'descrição', ['class' => 'control-label']) !!}
        {!! Form::text('description',null, array_merge(['class' => 'form-control', 'placeholder' => 'Descrição do ensaio'])) !!}

    </div>

    <div class="form-group">

      <fieldset>

       {!! Form::label('images[]', 'imagens de capa', ['class' => 'control-label']) !!}	
       {!! Form::file('images[]',['multiple'=>true,'id' => 'images']) !!}

   </fieldset>

</div>

<div class="form-group">

   {!! Form::label('text', 'texto', ['class' => 'control-label']) !!}
   {!! Form::textArea('text',null, ['class' => 'form-control', 'id'=> 'text']) !!}

</div>

<div class="form-group">

  {!! Form::submit('salvar') !!}

</div>

{!! Form::close() !!}

</div>

<div class="col-md-12">
	<h1>preview images</h1>
	<div id="image-preview"></div>

</div>



<script type="text/javascript">

	$("#images").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#image-preview");
     image_holder.empty();

     if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
     	if (typeof (FileReader) != "undefined") {

             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {

             	var reader = new FileReader();
             	reader.onload = function (e) {
             		$("<img />", {
             			"src": e.target.result,
             			"class": "img-thumbnail col-md-4"
             		}).appendTo(image_holder);
             	}

             	image_holder.show();
             	reader.readAsDataURL($(this)[0].files[i]);
             }

         } else {
         	alert("This browser does not support FileReader.");
         }
     } else {
     	alert("Pls select only images");
     }
 });

</script>



@stop