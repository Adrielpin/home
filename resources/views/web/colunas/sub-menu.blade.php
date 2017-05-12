
<div class="guias mobile">

	<a class="icomenu mobile" onclick="BellaClub.mttgl('ul-colunas-subm');"></a>

	<ul id="ul-colunas-subm" class="resp-menu-mobile mPop">

	@foreach ($tags as $tag)
		<li {{ Request::is('colunas/'.str_replace(' ', '-',$tag->name)) ? 'class=on' : '' }}><a href="{{ route('colunas.tag', str_replace(' ', '-',$tag->name)) }}">{{$tag->name}}</a></li>
	@endforeach
	
	</ul>

</div>

