@extends('admin.layouts.dashboard')
@section('page_heading','Editando plano - '.$row->id)
@section('section')

<div class="col-sm-12">

	{{ Form::open(array('route' => array('admin.plans.update', $row->id), 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

	<div class='row'>

		<div class="col-sm-6">

			<div class="form-group">

				{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
				{!! Form::text('name',$row->name, array_merge(['class' => 'form-control'])) !!}

			</div>

		</div>

		<div class="col-sm-2">

			<div class="form-group">

				{!! Form::label('active', 'ativado', ['class' => 'control-label']) !!}
				{!! Form::checkbox('active',$row->active, ['class' => 'form-control']) !!}

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-sm-4">

			<div class="form-group">

				{!! Form::label('period', 'periodo em meses', ['class' => 'control-label']) !!}
				{!! Form::text('period',$row->period, array_merge(['class' => 'form-control'])) !!}

			</div>

		</div>

		<div class="col-sm-4">

			<div class="form-group">

				{!! Form::label('currency', 'Valor', ['class' => 'control-label']) !!}

				<div class="input-group">

					{!! Form::select('currency',['R$'=>'R$','US$'=>'US$'],$row->currency, ['class' => 'form-control']) !!}
					<span class='input-group-addon'>:</span>
					{!! Form::number('value',$row->value, array_merge(['class' => 'form-control'])) !!}

				</div>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-sm-8">

			<div class="form-group">

				{!! Form::label('description', 'description', ['class' => 'control-label']) !!}
				{!! Form::textarea('description',$row->description, ['class' => 'form-control']) !!}

			</div>

		</div>

	</div>

	<div class="form-group">

		
		{!! Form::submit('salvar', ['class' => 'btn btn-success']) !!}

	</div>

</div>

@stop