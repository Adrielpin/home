@extends('admin.ensaios.partials.menu')
@section('page_title',' - informações')

@section('forms') 

<div class="col-sm-12" style="margin-top: 10px">

	

	<div class="row">

		@if ($essay->profile != null)

		<h3> {{ $essay->profile->description }} </h3>

		<p> {{ $essay->profile->profile }} </p>

		<a href="{{route('admin.essay.profile.edit', [$essay->id, $essay->profile->id] )}} " class="btn btn-primary"> Editar </a>

		@else

		<h3> não foi encontrado um perfil para exibição </h3>

		<a href="{{route('admin.essay.profile.create', [$essay->id] )}} " class="btn btn-primary"> criar </a>

			
		@endif


	</div>


</div>

<script type="text/javascript">
	
</script>

@stop