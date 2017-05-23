@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">

	<div class="div-conteudo">

		<script type="text/javascript"> var addthis_config = {"data_track_clickback":true}; </script>
		<script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=belladasemana"></script>

		<div class="model-header">

			<h1 class="n1">{{ $essay->name }}</h1>

			<div id="div-model-header-fotos">
				<div class="fs icoSecoes">
					<h4 onclick="BellaAssay.showSecoes();"></h4>
					<a onclick="BellaAssay.showSecoes();"></a>
				</div>

				<div class="fs icoZoom">
					<h4 onclick="BellaAssay.zoomStart()" data-title="Zoom"></h4>
					<a onclick="BellaAssay.zoomStart()" data-title="Zoom"></a>
				</div>
				
				<div class="fs"><h4>Slideshow</h4>
					<span class="slideshow slideshow-0">
						<a onclick="BellaAssay.SlideSlow()" data-title="Slide Show -"></a>
						<a onclick="BellaAssay.SlideDo()" data-title="Slide Show Play/Pause"></a>
						<a onclick="BellaAssay.SlideFast()" data-title="Slide Show +">+</a>
					</span>
				</div>

				<div id="div-mb-mshow" class="fs mb-ico-add">
					<a onclick="alertMan();" data-title="Adicionar ao Meu Bella"></a>
					<h4 onclick="alertMan();" data-title="Adicionar ao Meu Bella"></h4>
				</div>
			</div>

			<div id="div-ensaio-opcs">       
				<ul class="guias resp-menu-tablet mPop" id="ul-model-subm">

					<li id="li-ge-photos"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/fotos">Fotos </a></li>
					<li id="li-ge-video"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/video">Vídeo</a></li>
					<li id="li-ge-profile"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/perfil">Perfil</a></li>
					<li id="li-ge-makingof"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/making-of">Making Of</a></li>
					<li id="li-ge-wallpapers"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/wallpapers">Wallpapers</a></li>
					<li id="li-ge-credits" class="lg"><a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/creditos">Créditos</a></li>
				</ul>
				<a class="icomenu tablet" onclick="BellaClub.mttgl('ul-model-subm');"></a>
			</div>

			<br class="clearfloat">
		</div>
		
		<div class="bbox-c-clean" id="div-assay-content">


			<style>
				.btAssineEnsaioSecoes {  width: 178px; height: 136px; display: block; background-repeat: no-repeat; margin-top:10px; }
				.br .btAssineEnsaioSecoes { background-image: url(/storage/br/2015/desktop/bt-assinar-ensaio-1-br.png); }
				.en .btAssineEnsaioSecoes { background-image: url(/storage/en/2015/desktop/bt-assinar-ensaio-1-en.png); }
				.mx .btAssineEnsaioSecoes { background-image: url(/storage/mx/2015/desktop/bt-assinar-ensaio-1-mx.png); }
				.bannerVerticalLateralFoto {
					position: absolute; z-index: 8; top: 0px; width: 178px; height: 703px; background-repeat:no-repeat;
					/* left: 68px;*/
				}
				.br .bannerVerticalLateralFoto { background-image: url(/storage/br/2015/desktop/bt-assinar-ensaio-2-br.png); }
				.en .bannerVerticalLateralFoto { background-image: url(/storage/en/2015/desktop/bt-assinar-ensaio-2-en.png); }
				.mx .bannerVerticalLateralFoto { background-image: url(/storage/mx/2015/desktop/bt-assinar-ensaio-2-mx.png); }

				.zoom > .bannerVerticalLateralFoto { display: none; }

				#div-assay-fotos-content { min-height: 715px; }
				#div-assay-fotos-content img { z-index: 9; position: absolute; }

				@media (max-width: 980px) {       
					.btAssineEnsaioSecoes, .bannerVerticalLateralFoto { display: none; }
				}
				@media (max-width: 650px) { 
					.btAssineEnsaioSecoes, .bannerVerticalLateralFoto { display: none; } 
				}
			</style>

			<div id="div-assay-datagallery" class="mPop">

				<div class="header-thumbs">
					<span class="txt-secoes">&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<span class="txt-fotos">Fotos </span>
				</div>

				<div class="nav-secoes-n">

					@foreach ($essay->parts as $p => $part)					

					<ul class="partB partM" name="{{ $p }}">

						<li>{{ $part->name }}</li>

					</ul>

					<ul class="sections" name="{{ $p }}" style="display: none">

						@foreach ($part->sections as $s => $section)
						
						<li class="section s0">

							<a name="{{$p.$s}}"> {{ $section->name }} </a>

						</li>						

						@endforeach

					</ul>

					@endforeach


				</div> 


				@foreach ($essay->parts as $p => $part)
				
				@foreach ($part->sections as $s => $section)

				<ul class="isSec b0" name="{{ $p.$s }}" style="display: none">

					@foreach ($section->photos as $photo)

					<li class="{{ '/storage/essays/'. $photo->file }}">

						<a style="background-image:url({{ '/storage/essays/'.$photo->thumb }})"></a>

					</li>

					@endforeach
					

				</ul>

				@endforeach				

				@endforeach				

				<br class="clearfloat">

				<a class="btAssineEnsaioSecoes bannerCta" href="/assine"></a>

			</div>



			<div id="div-ensaio-fotoframe">

				<div id="div-assay-fotos-content" class="" style="min-height: 704px;">

					<div id="div-loading-mobile" style="display: none;"></div>

					<div class="zoomBar"> 

						<a class="x" rel="nofollow" onclick="BellaAssay.zoomClose()"></a>
						<a class="a" rel="nofollow" onclick="BellaAssay.PassaFoto('-')">anterior</a>
						<a class="p" rel="nofollow" onclick="BellaAssay.PassaFoto('+')">próxima</a>
						<a id="a-mais-zoom" rel="nofollow" class="btz hide" onclick="BellaAssay.zoomIn()">+ zoom</a>
						<a id="a-menos-zoom" rel="nofollow" class="btz hide" onclick="BellaAssay.zoomOut()">- zoom</a>
						<a class="slideshow" rel="nofollow">slideshow</a>
						<span class="slideshow slideshow-0"><a onclick="BellaAssay.SlideSlow()"></a><a onclick="BellaAssay.SlideDo()"></a><a onclick="BellaAssay.SlideFast()"></a></span>

					</div>

					<div class="zoomSpacer"></div>

					<a class="previous controls" rel="nofollow" onclick="BellaAssay.PassaFoto('-')"></a>
					<a class="next controls" rel="nofollow"></a>

					<a class="bannerVerticalLateralFoto bannerCta" style="left:98px" href="{{ route('assine.index') }}"></a>
					<a class="bannerVerticalLateralFoto bannerCta" style="left:778px" href="{{ route('assine.index') }}"></a>

					<img src="/storage/img/essay.png" class="imgView">

				</div>    

			</div>

			<br class="clearfloat">    

		</div>

		<div class="bbox-end-line"></div>
		<br>
		
	</div>

	<style type="text/css">
		.imgView{
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>     

	<div class="div-conteudo">

		<div class="text">

			<div align="justify">

				{{ $essay->text }}

	</div>

	<div class="bbox-end-line"> </div>

	<br class="clearfloat">

</div>

@stop