@extends('admin.layouts.dashboard')

@section('section') 

<div class='col-sm-12' style="margin-top: 10px">

	<div class="row">

		<ul class="nav nav-tabs">
		<li {{ (Request::is('*/visualizar/') ? 'class=active' : '') }}><a href="{{route('admin.essay.show',[$essay->id])}}">resumo</a></li>
			<li {{ (Request::is('*/team/') ? 'class=active' : '') }}><a href="{{route('admin.essay.team.show',[$essay->id, 1])}}">Equipe</a></li>
			<li {{ (Request::is('*/info/') ? 'class=active' : '') }}><a href="{{route('admin.essay.info.show', [$essay->id, 1] )}}">Informações</a></li>
			<li {{ (Request::is('*/photos/') ? 'class=active' : '') }}><a href="{{route('admin.essay.photos.index', [$essay->id] )}}">Fotos</a></li>
			<li><a href="#">Videos</a></li>
			<li {{ (Request::is('*/profile/') ? 'class=active' : '') }}><a href="{{route('admin.essay.profile.index', [$essay->id] )}}">Perfil da modelo</a></li>

		</ul>

	</div>

	<div class="row">
			
			@yield('forms')

	</div>

</div>

@stop

