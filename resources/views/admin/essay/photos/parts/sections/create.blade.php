@extends('admin.essay.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12" style="margin-top: 10px">

	<div class='col-sm-12' style="margin-top: 10px;">

		{!! Form::open(array('route' => ['admin.essay.show.photos.parts.section.store',$essay->id, $part->id], 'class' => 'form-group', 'files' => true)) !!}

		<div class="form-group">

			{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
			{!! Form::text('name',null,['class' => 'form-control']) !!}

		</div>

		<div class="checkbox">
			<label><input type="checkbox" name="active" value="true">Aberto</label>
		</div>

		<div class="form-group">

         {!! Form::label('images[]', 'imagens de capa', ['class' => 'control-label']) !!} 
         {!! Form::file('images[]',['multiple'=>true,'id' => 'images']) !!}

     </div>


     <div class="form-group">

         {!! Form::label('thumbs[]', 'thumbs da seção', ['class' => 'control-label']) !!}	
         {!! Form::file('thumbs[]',['multiple'=>true,'id' => 'thumbs']) !!}

     </div>

     <div class="form-group">

         {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'onclick' => 'close();']) !!}

     </div>


     {{ Form::close() }}

 </div>

</div>

<div class="col-sm-12">

	<div class="col-sm-6">
		<div id="image-preview"></div>	
	</div>

	<div class="col-sm-6">
		<div id="thumb-preview"></div>
	</div>
	
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

	$("#thumbs").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#thumb-preview");
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
