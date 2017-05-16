@extends('admin.ensaios.partials.menu')
@section('page_title',' - informações')

@section('forms') 


<div class='col-sm-12' style="margin-top: 10px;">

	<fieldset>

		<legend>Editar</legend>

		{!! Form::open(array('route' => ['admin.essay.photos.parts.update',$essay->id, $part->id], 'class' => 'form-group')) !!}

		<div class="form-group">

			{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
			{!! Form::text('name',$section->name, array_merge(['class' => 'form-control'])) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'onclick' => 'close();']) !!}

		</div>

		{{ Form::close() }}

	</fieldset>

</div>

<div class='col-sm-12'>

	<fieldset>

		<legend>Seções</legend>

		@if (count($section->files) > 0 )

		<table class="table table-hover">

			<thead>

				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Ações</th>
				</tr>

			</thead>

			<tbody>

				@foreach ($section->files as $file)
				<tr>

					<td>{{ $file->id}}</td>
					<td>{{ $file->name}}</td>
					<td>

					<a href="{{ route('admin.essay.photos.parts.section.edit', [$essay->id, $part->id, $section->id] ) }}" class="btn btn-default"> editar </a>
						<a href="{{ route('admin.essay.photos.parts.section.destroy', [$essay->id, $part->id, $section->id] ) }}" class="btn btn-default"> remover </a>

					</td>
				</tr>

				@endforeach

			</tbody>

		</table>

	</fieldset>

	@endif

	<div class="btn-group">

		<a href="{{ route('admin.essay.photos.parts.section.create', [ $essay->id, $part->id]) }}" class="btn btn-primary"> Criar seção </a>

	</div>
	
</div>


@stop