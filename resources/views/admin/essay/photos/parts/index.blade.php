@extends('admin.layouts.dashboard')
@section('page_title',' - ')

@section('section') 

<div class='col-sm-12'>
	
	@if (count($part->sections) > 0 )

		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Fotos</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($part->sections as $section)
					<tr>
						<td>{{ $section->id}}</td>
						<td>{{ $section->name}}</td>
						<td>{{ count($section->files) }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	@else

	<a href="{{ route('admin.essay.photos.parts.section.create', [ $essay->id, $part->id]) }}" class="btn btn-primary"> Criar seção </a>

	@endif

</div>

@stop