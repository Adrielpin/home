@extends('admin.layouts.dashboard')
@section('page_heading','Novo plano')
@section('section')

<div class="col-sm-12">

	{{ Form::open(array('route' => 'admin.plans.store', 'method' => 'POST', 'role' => 'form', 'class'=>'form-group')) }}

	<div class='row'>

		<div class="col-sm-8">

			<div class="form-group">

				{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
				{!! Form::select('name',['Anual' => 'Anual', 'semestraS' => 'Semestral', 'Trimestral' => 'Trimestral', 'Mensal' => 'Mensal'], null,['class' => 'form-control']) !!}

			</div>

		</div>

	</div>

	<div class="row">


		<div class="col-sm-4">

			<div class="form-group">

				{!! Form::label('period', 'periodo em meses', ['class' => 'control-label']) !!}
				{!! Form::text('period',null, ['class' => 'form-control']) !!}

			</div>

		</div>

		<div class="col-sm-4">

			<div class="form-group">

				{!! Form::label('currency', 'Valor', ['class' => 'control-label']) !!}

				<div class="input-group">

					{!! Form::select('currency',['R$'=>'R$','US$'=>'US$'],null, ['class' => 'form-control']) !!}
					<span class='input-group-addon'>:</span>
					{!! Form::number('value',null, ['class' => 'form-control', 'step' => '0.01']) !!}

				</div>

			</div>

		</div>

	</div>


	<div class="row">

		<div class="col-sm-8">

			<div class="form-group">

				{!! Form::label('description', 'description', ['class' => 'control-label']) !!}
				{!! Form::textarea('description',null, ['class' => 'form-control']) !!}

			</div>

		</div>

	</div>

	<div class="form-group">


		{!! Form::submit('salvar', ['class' => 'btn btn-success']) !!}

	</div>

</div>

</div>

@stop