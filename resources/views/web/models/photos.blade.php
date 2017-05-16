@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">

	<div id="div-conteudo">

		<div class="model-header">

			<h1>Modelos</h1>

			<ul class="n">

				@for ($i = 1; $i <= $essays->lastPage(); $i++)

				<li class="{{ ($essays->currentPage() == $i) ? 'on' : '' }}">
					<a href="{{ $essays->url($i) }}">{{ $i }}</a>
				</li>

				@endfor

			</ul>

			<a class="icomenu tablet" onclick="BellaClub.mttgl('ul-models-subm');"></a>
			<a class="icomenu mobile" onclick="BellaClub.mttgl('div-models-subm');"></a>

			<div id="div-models-subm" class="resp-menu-mobile mPop">

				<div class="busca">


					{!! Form::label('sel-ensaios') !!}
					{!! Form::select('sel-ensaios', $selector, null, array( 'id' => 'sel-ensaios', 'onchange' => "($('sel-ensaios').getValue()!==0 ? location.href=$('sel-ensaios').getValue() : null)", 'placeholder' => 'Pesquisa por nome' )) !!}

				</div>

				<ul class="m resp-menu-tablet mPop" id="ul-models-subm">

					<li id="li-gm-last"><a href="/modelos/ultimas-modelos">Últimas Modelos</a></li> 
					<li id="li-gm-top"><a href="/modelos/mais-acessadas">Mais Acessadas</a></li>  

				</ul>

			</div>

			<br class="clearfloat">

		</div>

		<div class="bbox-c-clean" id="div-arquivo-modelos">

			@foreach ($essays as $essay)

			<h2>
				<a class="" href="{{ route('modelos.photo',$essay->url) }}">
					<img src="{{ '/storage/home/'. $essay->homes[0]->name }}" alt="{{ $essay->name }}" width="180" height="132">
					<br>{{ $essay->name }}
				</a>
			</h2>

			@endforeach

			<br class="clearfloat">

			<div class="bbox-end-line"></div>

		</div>

	</div>     

</div>

@stop
