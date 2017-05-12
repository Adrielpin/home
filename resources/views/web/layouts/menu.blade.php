@extends('web.layouts.plane')

@section('menu')

<div class="barra-menu-top">

	<div class="box-central" id="div-menu-top">

		<div id="div-icomenu-left" class="top-menu-itens">
			<a class="icomenu" onclick="BellaClub.mttgl('div-menu');"></a>
		</div>

		<div id="div-menu" class="menu-blocks top-menu-itens mPop">

			<a id="a-home" {{ Request::is('/') ? 'class=focus' : '' }} href="{{ route('home') }}"> Home </a>
			<a id="a-subscribe" {{ Request::is('/assine') ? 'class=focus' : '' }} href="{{ route('assine.index') }}"> ASSINAR </a>
			<a id="a-freetour" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('freetour') }}">Free Tour</a>
			<a id="a-models" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('modelos.photos') }}">Modelos</a>

			<a id="a-videos" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('modelos.videos') }}">Vídeos</a>
			<a id="a-blog" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('blog') }}">Blog</a>
			<a id="a-colunas" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('colunas.index') }}">Colunas</a>
			<a id="a-ecard" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="#">eCards</a>
			<a id="a-meubella" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('meubella.index') }}">Meu Bella</a>    
			<a id="a-clubebella" {{ Request::is('/freetour') ? 'class=focus' : '' }} href="{{ route('clube-bella') }}">Clube Bella</a>

			<div>

				<a href="{{ route('minha-conta') }}" rel="nofollow">Minha conta</a>
				<a href="https://www.belladasemana.com.br/contato" rel="nofollow">Contato</a>
				<a class="mLogin" onclick="BellaClub.promptLogin()" rel="nofollow">Login</a>
				<a class="mLogout hide" href="https://www.belladasemana.com.br/logout" rel="nofollow">Logout</a>

			</div>

		</div>

		<div class="menu-blocks" id="div-menu-block-right">

			<div class="top-menu-itens social-itens">

				<a class="facebook" href="http://www.facebook.com/pages/Bella-da-Semana/110689609004305" target="_blank"></a>
				<a class="twitter" href="http://twitter.com/belladasemana" target="_blank"></a>
				<a class="gplus" href="https://plus.google.com/u/0/b/115272954382474077336/+belladasemana/posts" rel="publisher" target="_blank"></a>
				<a class="tumblr" href="http://belladasemana.tumblr.com/" target="_blank"></a>
				<a class="instagram" href="https://www.instagram.com/belladasemana/" target="_blank"></a>
				<a class="rss" href="/rss" target="_blank"></a>

			</div>

			<div id="div-menu2" class="top-menu-itens mPop menu-logado">
				
				@if(!Auth::guest())

				<span id="div-menu2-user-salute">Bem-vindo {{ Auth::user()->name }} </span>

				@endif

				<a href="https://www.belladasemana.com.br/minha-conta" rel="nofollow">Minha conta</a>
				<a href="https://www.belladasemana.com.br/contato" rel="nofollow">Contato</a>

				@if(Auth::guest())

				<a id="div-menu2-login" class="mLogin" onclick="BellaClub.promptLogin();" rel="nofollow">Login</a>

				@else

				<a id="div-menu2-logout" class="mLogout" href="{{ route('logout')}}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>

				@endif

				<a class="unit-menu-sel" onclick="BellaClub.mttgl('div-menu-units');" rel="nofollow">&nbsp;</a><a class="unit-menu-icodown" onclick="BellaClub.mttgl('div-menu-units');" rel="nofollow">&nbsp;</a>

				<div id="div-menu-units" class="pop-menu mPop">

					<a href="https://www.belladasemana.com.br/?SetUnit=2"><span class="unit-menu unit-menu-br"></span>Português - Brasil</a>
					<a href="https://www.bellaclub.com/?SetUnit=1"><span class="unit-menu unit-menu-en"></span>English - USA/UK</a>
					<a href="https://www.bellaclub.com.mx/?SetUnit=4"><span class="unit-menu unit-menu-mx"></span>Espanõl</a>

				</div>

			</div>

			<div id="div-icomenu-right" class="top-menu-itens">
				<a class="icomenu" onclick="BellaClub.mttgl('div-menu2');"></a>
			</div>

		</div>

	</div>

</div>

<div class="box-central">       

	<div class="logo">
		<a href="https://www.belladasemana.com.br/" title="Home"></a>
	</div>

	<div id="div-banner-mobile">
		<a href="https://www.belladasemana.com.br/?action=adsclick&amp;b=328" target="_top">
			<img src="https://www.belladasemana.com.br/up/banners/0.385934001459876568_full_banner_clube_bella.jpg" border="0" width="468" height="60" alt="banner">
		</a>
	</div>

	<div id="div-banner-desktop">
		<a href="https://www.belladasemana.com.br/?action=adsclick&amp;b=328" target="_top">
			<img src="https://www.belladasemana.com.br/up/banners/0.373233001459876568_banner_clube_bella.jpg" border="0" width="730" height="90" alt="banner">
		</a>
	</div>

	<br class="clearfloat">

</div>

@yield('content')

<br class="clearfloat">



<div id="div-rodape">

	<a href="{{ route('bella') }}" rel="nofollow">Sobre o Bella</a>  

	<a href="{{ route('politica-de-privacidade') }}" rel="nofollow">Politica de Privacidade</a> 

	<a href="{{ route('politica-de-cancelamento') }}" rel="nofollow">Política de Cancelamento</a> 

	<a href="{{ route('programa-afiliados') }}" rel="nofollow">Programa afiliados</a> 
	<a href="#" rel="nofollow">Área do parceiro</a>  

	<a href="#">Publicidade</a>        

	<a href="{{ route('imprensa') }}">Imprensa</a>
	<a href="#" rel="nofollow">Contato</a>  
	<a href="{{ route('rss') }}" class="nb">RSS</a>

</div>

<div id="div-copyright">
	&copy; 2001 - 2017. <a href="http://bellaentretenimento.com.br/">Bella Entretenimento Ltda</a> CNPJ 04.410.756/0001-60. Todos os direitos reservados
</div>

<div id="div-ups" style="display:none"></div>

<div id="div-alphabox" style="width: 1247px; height: 1650px; opacity: 0.6; display: none;"></div>

@include('web.layouts.login-modal')

<div id="div-banner-jsr" style="display:none"></div>

@endsection