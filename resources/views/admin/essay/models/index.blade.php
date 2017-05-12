@extends('admin.layouts.dashboard')
@section('page_title',' - cadastro de modelos')

@section('section') 

<div class='container'>

	<div class="col-sm-12">
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Image</th>
					<th>name</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($models as $model)
				<tr>
					<td>{{ $model->id }}</td>
					<td>{{ $model->name}}</td>
					<td><img src="{{ Storage::url('models/'.$model->image) }}" width="100" height="100"></td>
					<td>
						<a href="{{ route('admin.essay.models.edit', $model->id) }}">editar</a>
						<a href="{{ route('admin.essay.models.destroy', $model->id) }}">remover</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</div>

@stop