@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">

	<div class="div-conteudo">

		<script type="text/javascript"> var addthis_config = {"data_track_clickback":true}; </script>
		<script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=belladasemana"></script>

		<div class="model-header">

			<h1 class="n1">Vanessa Vailatti</h1>

			<div id="div-model-header-fotos">
				<div class="fs icoSecoes">
					<h4 onclick="BellaAssay.showSecoes()"></h4>
					<a onclick="BellaAssay.showSecoes()"></a>
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

					<ul class="partB" onclick="BellaAssay.toggleParts(this)">
						<li>Parte 1</li>
					</ul>
					<ul>
						<li class="s0"><a id="a-secao-1" href="#1.1" class="on">Seção 01</a></li>
						<li class="s1"><a id="a-secao-2" href="#2.1">Seção 02</a></li>
						<li class="s1"><a id="a-secao-3" href="#3.1">Seção 03</a></li>
						<li class="s1"><a id="a-secao-4" href="#4.1">Seção 04</a></li>
						<li class="s0"><a id="a-secao-5" href="#5.1">Seção 05</a></li>
						<li class="s1"><a id="a-secao-6" href="#6.1">Seção 06</a></li>
						<li class="s1"><a id="a-secao-7" href="#7.1">Seção 07</a></li>
						<li class="s0"><a id="a-secao-8" href="#8.1">Seção 08</a></li>
						<li class="s1"><a id="a-secao-9" href="#9.1">Seção 09</a></li>
						<li class="s1"><a id="a-secao-10" href="#10.1">Seção 10</a></li>
						<li class="s0"><a id="a-secao-11" href="#11.1">Seção 11</a></li>
					</ul>
					<ul class="partB partM" title="125" onclick="BellaAssay.toggleParts(this)">
						<li>Parte 2</li>
					</ul>
					<ul class="hide">
						<li class="s0"><a id="a-secao-12" href="#12.1">Seção 12</a></li>
						<li class="s1"><a id="a-secao-13" href="#13.1">Seção 13</a></li>
						<li class="s1"><a id="a-secao-14" href="#14.1">Seção 14</a></li>
						<li class="s0"><a id="a-secao-15" href="#15.1">Seção 15</a></li>
						<li class="s1"><a id="a-secao-16" href="#16.1">Seção 16</a></li>
						<li class="s0"><a id="a-secao-17" href="#17.1">Seção 17</a></li>
						<li class="s1"><a id="a-secao-18" href="#18.1">Seção 18</a></li>
						<li class="s0"><a id="a-secao-19" href="#19.1">Seção 19</a></li>
						<li class="s0"><a id="a-secao-20" href="#20.1">Seção 20</a></li>
						<li class="s1"><a id="a-secao-21" href="#21.1">Seção 21</a></li>
						<li class="s0"><a id="a-secao-22" href="#22.1">Seção 22</a></li>
					</ul>

				</div> 

				<ul id="div-secao-thumbs-1" class="isSec b0">
					<li id="li-f-1-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/101.jpg">
						<a href="#1.1" id="a-thumb-1-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/101.jpg)" class="on"></a>
					</li>
					<li id="li-f-1-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/102.jpg">
						<a href="#1.2" id="a-thumb-1-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/102.jpg)"></a>
					</li>
					<li id="li-f-1-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/103.jpg">
						<a href="#1.3" id="a-thumb-1-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/103.jpg)"></a>
					</li>
					<li id="li-f-1-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/104.jpg">
						<a href="#1.4" id="a-thumb-1-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/104.jpg)"></a>
					</li>
					<li id="li-f-1-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/105.jpg">
						<a href="#1.5" id="a-thumb-1-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/105.jpg)"></a>
					</li>
					<li id="li-f-1-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/106.jpg">
						<a href="#1.6" id="a-thumb-1-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/106.jpg)"></a>
					</li>
					<li id="li-f-1-7" class="https://ia.bella.com.br/vanessa_vailatti/fotos/107.jpg">
						<a href="#1.7" id="a-thumb-1-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/107.jpg)"></a>
					</li>
					<li id="li-f-1-8" class="https://ia.bella.com.br/vanessa_vailatti/fotos/108.jpg">
						<a href="#1.8" id="a-thumb-1-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/108.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-2" class="isSec b1" style="display:none">
					<li id="li-f-2-1">
						<a href="#2.1" id="a-thumb-2-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/201.jpg)"></a>
					</li>
					<li id="li-f-2-2">
						<a href="#2.2" id="a-thumb-2-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/202.jpg)"></a>
					</li>
					<li id="li-f-2-3">
						<a href="#2.3" id="a-thumb-2-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/203.jpg)"></a>
					</li>
					<li id="li-f-2-4">
						<a href="#2.4" id="a-thumb-2-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/204.jpg)"></a>
					</li>
					<li id="li-f-2-5">
						<a href="#2.5" id="a-thumb-2-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/205.jpg)"></a>
					</li>
					<li id="li-f-2-6">
						<a href="#2.6" id="a-thumb-2-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/206.jpg)"></a>
					</li>
					<li id="li-f-2-7">
						<a href="#2.7" id="a-thumb-2-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/207.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-3" class="isSec b1" style="display:none">
					<li id="li-f-3-1">
						<a href="#3.1" id="a-thumb-3-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/301.jpg)"></a>
					</li>
					<li id="li-f-3-2">
						<a href="#3.2" id="a-thumb-3-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/302.jpg)"></a>
					</li>
					<li id="li-f-3-3">
						<a href="#3.3" id="a-thumb-3-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/303.jpg)"></a>
					</li>
					<li id="li-f-3-4">
						<a href="#3.4" id="a-thumb-3-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/304.jpg)"></a>
					</li>
					<li id="li-f-3-5">
						<a href="#3.5" id="a-thumb-3-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/305.jpg)"></a>
					</li>
					<li id="li-f-3-6">
						<a href="#3.6" id="a-thumb-3-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/306.jpg)"></a>
					</li>
					<li id="li-f-3-7">
						<a href="#3.7" id="a-thumb-3-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/307.jpg)"></a>
					</li>
					<li id="li-f-3-8">
						<a href="#3.8" id="a-thumb-3-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/308.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-4" class="isSec b1" style="display:none">
					<li id="li-f-4-1">
						<a href="#4.1" id="a-thumb-4-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/401.jpg)"></a>
					</li>
					<li id="li-f-4-2">
						<a href="#4.2" id="a-thumb-4-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/402.jpg)"></a>
					</li>
					<li id="li-f-4-3">
						<a href="#4.3" id="a-thumb-4-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/403.jpg)"></a>
					</li>
					<li id="li-f-4-4">
						<a href="#4.4" id="a-thumb-4-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/404.jpg)"></a>
					</li>
					<li id="li-f-4-5">
						<a href="#4.5" id="a-thumb-4-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/405.jpg)"></a>
					</li>
					<li id="li-f-4-6">
						<a href="#4.6" id="a-thumb-4-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/406.jpg)"></a>
					</li>
					<li id="li-f-4-7">
						<a href="#4.7" id="a-thumb-4-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/407.jpg)"></a>
					</li>
					<li id="li-f-4-8">
						<a href="#4.8" id="a-thumb-4-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/408.jpg)"></a>
					</li>
					<li id="li-f-4-9">
						<a href="#4.9" id="a-thumb-4-9" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/409.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-5" class="isSec b0" style="display:none">
					<li id="li-f-5-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/501.jpg">
						<a href="#5.1" id="a-thumb-5-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/501.jpg)"></a>
					</li>
					<li id="li-f-5-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/502.jpg">
						<a href="#5.2" id="a-thumb-5-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/502.jpg)"></a>
					</li>
					<li id="li-f-5-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/503.jpg">
						<a href="#5.3" id="a-thumb-5-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/503.jpg)"></a>
					</li>
					<li id="li-f-5-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/504.jpg">
						<a href="#5.4" id="a-thumb-5-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/504.jpg)"></a>
					</li>
					<li id="li-f-5-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/505.jpg">
						<a href="#5.5" id="a-thumb-5-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/505.jpg)"></a>
					</li>
					<li id="li-f-5-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/506.jpg">
						<a href="#5.6" id="a-thumb-5-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/506.jpg)"></a>
					</li>
					<li id="li-f-5-7" class="https://ia.bella.com.br/vanessa_vailatti/fotos/507.jpg">
						<a href="#5.7" id="a-thumb-5-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/507.jpg)"></a>
					</li>
					<li id="li-f-5-8" class="https://ia.bella.com.br/vanessa_vailatti/fotos/508.jpg">
						<a href="#5.8" id="a-thumb-5-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/508.jpg)"></a>
					</li>
					<li id="li-f-5-9" class="https://ia.bella.com.br/vanessa_vailatti/fotos/509.jpg">
						<a href="#5.9" id="a-thumb-5-9" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/509.jpg)"></a>
					</li>
					<li id="li-f-5-10" class="https://ia.bella.com.br/vanessa_vailatti/fotos/510.jpg">
						<a href="#5.10" id="a-thumb-5-10" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/510.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-6" class="isSec b1" style="display:none">
					<li id="li-f-6-1">
						<a href="#6.1" id="a-thumb-6-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/601.jpg)"></a>
					</li>
					<li id="li-f-6-2">
						<a href="#6.2" id="a-thumb-6-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/602.jpg)"></a>
					</li>
					<li id="li-f-6-3">
						<a href="#6.3" id="a-thumb-6-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/603.jpg)"></a>
					</li>
					<li id="li-f-6-4">
						<a href="#6.4" id="a-thumb-6-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/604.jpg)"></a>
					</li>
					<li id="li-f-6-5">
						<a href="#6.5" id="a-thumb-6-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/605.jpg)"></a>
					</li>
					<li id="li-f-6-6">
						<a href="#6.6" id="a-thumb-6-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/606.jpg)"></a>
					</li>
					<li id="li-f-6-7">
						<a href="#6.7" id="a-thumb-6-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/607.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-7" class="isSec b1" style="display:none">
					<li id="li-f-7-1">
						<a href="#7.1" id="a-thumb-7-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/701.jpg)"></a>
					</li>
					<li id="li-f-7-2">
						<a href="#7.2" id="a-thumb-7-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/702.jpg)"></a>
					</li>
					<li id="li-f-7-3">
						<a href="#7.3" id="a-thumb-7-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/703.jpg)"></a>
					</li>
					<li id="li-f-7-4">
						<a href="#7.4" id="a-thumb-7-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/704.jpg)"></a>
					</li>
					<li id="li-f-7-5">
						<a href="#7.5" id="a-thumb-7-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/705.jpg)"></a>
					</li>
					<li id="li-f-7-6">
						<a href="#7.6" id="a-thumb-7-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/706.jpg)"></a>
					</li>
					<li id="li-f-7-7">
						<a href="#7.7" id="a-thumb-7-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/707.jpg)"></a>
					</li>
					<li id="li-f-7-8">
						<a href="#7.8" id="a-thumb-7-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/708.jpg)"></a>
					</li>
					<li id="li-f-7-9">
						<a href="#7.9" id="a-thumb-7-9" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/709.jpg)"></a>
					</li>
					<li id="li-f-7-10">
						<a href="#7.10" id="a-thumb-7-10" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/710.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-8" class="isSec b0" style="display:none">
					<li id="li-f-8-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/801.jpg">
						<a href="#8.1" id="a-thumb-8-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/801.jpg)"></a>
					</li>
					<li id="li-f-8-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/802.jpg">
						<a href="#8.2" id="a-thumb-8-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/802.jpg)"></a>
					</li>
					<li id="li-f-8-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/803.jpg">
						<a href="#8.3" id="a-thumb-8-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/803.jpg)"></a>
					</li>
					<li id="li-f-8-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/804.jpg">
						<a href="#8.4" id="a-thumb-8-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/804.jpg)"></a>
					</li>
					<li id="li-f-8-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/805.jpg">
						<a href="#8.5" id="a-thumb-8-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/805.jpg)"></a>
					</li>
					<li id="li-f-8-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/806.jpg">
						<a href="#8.6" id="a-thumb-8-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/806.jpg)"></a>
					</li>
					<li id="li-f-8-7" class="https://ia.bella.com.br/vanessa_vailatti/fotos/807.jpg">
						<a href="#8.7" id="a-thumb-8-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/807.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-9" class="isSec b1" style="display:none">
					<li id="li-f-9-1">
						<a href="#9.1" id="a-thumb-9-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/901.jpg)"></a>
					</li>
					<li id="li-f-9-2">
						<a href="#9.2" id="a-thumb-9-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/902.jpg)"></a>
					</li>
					<li id="li-f-9-3">
						<a href="#9.3" id="a-thumb-9-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/903.jpg)"></a>
					</li>
					<li id="li-f-9-4">
						<a href="#9.4" id="a-thumb-9-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/904.jpg)"></a>
					</li>
					<li id="li-f-9-5">
						<a href="#9.5" id="a-thumb-9-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/905.jpg)"></a>
					</li>
					<li id="li-f-9-6">
						<a href="#9.6" id="a-thumb-9-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/906.jpg)"></a>
					</li>
					<li id="li-f-9-7">
						<a href="#9.7" id="a-thumb-9-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/907.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-10" class="isSec b1" style="display:none">
					<li id="li-f-10-1">
						<a href="#10.1" id="a-thumb-10-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1001.jpg)"></a>
					</li>
					<li id="li-f-10-2">
						<a href="#10.2" id="a-thumb-10-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1002.jpg)"></a>
					</li>
					<li id="li-f-10-3">
						<a href="#10.3" id="a-thumb-10-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1003.jpg)"></a>
					</li>
					<li id="li-f-10-4">
						<a href="#10.4" id="a-thumb-10-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1004.jpg)"></a>
					</li>
					<li id="li-f-10-5">
						<a href="#10.5" id="a-thumb-10-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1005.jpg)"></a>
					</li>
					<li id="li-f-10-6">
						<a href="#10.6" id="a-thumb-10-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1006.jpg)"></a>
					</li>
					<li id="li-f-10-7">
						<a href="#10.7" id="a-thumb-10-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1007.jpg)"></a>
					</li>
					<li id="li-f-10-8">
						<a href="#10.8" id="a-thumb-10-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1008.jpg)"></a>
					</li>
					<li id="li-f-10-9">
						<a href="#10.9" id="a-thumb-10-9" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1009.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-11" class="isSec b0" style="display:none">
					<li id="li-f-11-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1101.jpg">
						<a href="#11.1" id="a-thumb-11-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1101.jpg)"></a>
					</li>
					<li id="li-f-11-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1102.jpg">
						<a href="#11.2" id="a-thumb-11-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1102.jpg)"></a>
					</li>
					<li id="li-f-11-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1103.jpg">
						<a href="#11.3" id="a-thumb-11-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1103.jpg)"></a>
					</li>
					<li id="li-f-11-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1104.jpg">
						<a href="#11.4" id="a-thumb-11-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1104.jpg)"></a>
					</li>
					<li id="li-f-11-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1105.jpg">
						<a href="#11.5" id="a-thumb-11-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1105.jpg)"></a>
					</li>
					<li id="li-f-11-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1106.jpg">
						<a href="#11.6" id="a-thumb-11-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1106.jpg)"></a>
					</li>
					<li id="li-f-11-7" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1107.jpg">
						<a href="#11.7" id="a-thumb-11-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1107.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-12" class="isSec b0" style="display:none">
					<li id="li-f-12-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1201.jpg">
						<a href="#12.1" id="a-thumb-12-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1201.jpg)"></a>
					</li>
					<li id="li-f-12-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1202.jpg">
						<a href="#12.2" id="a-thumb-12-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1202.jpg)"></a>
					</li>
					<li id="li-f-12-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1203.jpg">
						<a href="#12.3" id="a-thumb-12-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1203.jpg)"></a>
					</li>
					<li id="li-f-12-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1204.jpg">
						<a href="#12.4" id="a-thumb-12-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1204.jpg)"></a>
					</li>
					<li id="li-f-12-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1205.jpg">
						<a href="#12.5" id="a-thumb-12-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1205.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-13" class="isSec b1" style="display:none">
					<li id="li-f-13-1">
						<a href="#13.1" id="a-thumb-13-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1301.jpg)"></a>
					</li>
					<li id="li-f-13-2">
						<a href="#13.2" id="a-thumb-13-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1302.jpg)"></a>
					</li>
					<li id="li-f-13-3">
						<a href="#13.3" id="a-thumb-13-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1303.jpg)"></a>
					</li>
					<li id="li-f-13-4">
						<a href="#13.4" id="a-thumb-13-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1304.jpg)"></a>
					</li>
					<li id="li-f-13-5">
						<a href="#13.5" id="a-thumb-13-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1305.jpg)"></a>
					</li>
					<li id="li-f-13-6">
						<a href="#13.6" id="a-thumb-13-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1306.jpg)"></a>
					</li>
					<li id="li-f-13-7">
						<a href="#13.7" id="a-thumb-13-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1307.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-14" class="isSec b1" style="display:none">
					<li id="li-f-14-1">
						<a href="#14.1" id="a-thumb-14-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1401.jpg)"></a>
					</li>
					<li id="li-f-14-2">
						<a href="#14.2" id="a-thumb-14-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1402.jpg)"></a>
					</li>
					<li id="li-f-14-3">
						<a href="#14.3" id="a-thumb-14-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1403.jpg)"></a>
					</li>
					<li id="li-f-14-4">
						<a href="#14.4" id="a-thumb-14-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1404.jpg)"></a>
					</li>
					<li id="li-f-14-5">
						<a href="#14.5" id="a-thumb-14-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1405.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-15" class="isSec b0" style="display:none">
					<li id="li-f-15-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1501.jpg">
						<a href="#15.1" id="a-thumb-15-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1501.jpg)"></a>
					</li>
					<li id="li-f-15-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1502.jpg">
						<a href="#15.2" id="a-thumb-15-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1502.jpg)"></a>
					</li>
					<li id="li-f-15-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1503.jpg">
						<a href="#15.3" id="a-thumb-15-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1503.jpg)"></a>
					</li>
					<li id="li-f-15-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1504.jpg">
						<a href="#15.4" id="a-thumb-15-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1504.jpg)"></a>
					</li>
					<li id="li-f-15-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1505.jpg">
						<a href="#15.5" id="a-thumb-15-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1505.jpg)"></a>
					</li>
					<li id="li-f-15-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1506.jpg">
						<a href="#15.6" id="a-thumb-15-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1506.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-16" class="isSec b1" style="display:none">
					<li id="li-f-16-1">
						<a href="#16.1" id="a-thumb-16-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1601.jpg)"></a>
					</li>
					<li id="li-f-16-2">
						<a href="#16.2" id="a-thumb-16-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1602.jpg)"></a>
					</li>
					<li id="li-f-16-3">
						<a href="#16.3" id="a-thumb-16-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1603.jpg)"></a>
					</li>
					<li id="li-f-16-4">
						<a href="#16.4" id="a-thumb-16-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1604.jpg)"></a>
					</li>
					<li id="li-f-16-5">
						<a href="#16.5" id="a-thumb-16-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1605.jpg)"></a>
					</li>
					<li id="li-f-16-6">
						<a href="#16.6" id="a-thumb-16-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1606.jpg)"></a>
					</li>
					<li id="li-f-16-7">
						<a href="#16.7" id="a-thumb-16-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1607.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-17" class="isSec b0" style="display:none">
					<li id="li-f-17-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1701.jpg">
						<a href="#17.1" id="a-thumb-17-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1701.jpg)"></a>
					</li>
					<li id="li-f-17-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1702.jpg">
						<a href="#17.2" id="a-thumb-17-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1702.jpg)"></a>
					</li>
					<li id="li-f-17-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1703.jpg">
						<a href="#17.3" id="a-thumb-17-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1703.jpg)"></a>
					</li>
					<li id="li-f-17-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1704.jpg">
						<a href="#17.4" id="a-thumb-17-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1704.jpg)"></a>
					</li>
					<li id="li-f-17-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1705.jpg">
						<a href="#17.5" id="a-thumb-17-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1705.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-18" class="isSec b1" style="display:none">
					<li id="li-f-18-1">
						<a href="#18.1" id="a-thumb-18-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1801.jpg)"></a>
					</li>
					<li id="li-f-18-2">
						<a href="#18.2" id="a-thumb-18-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1802.jpg)"></a>
					</li>
					<li id="li-f-18-3">
						<a href="#18.3" id="a-thumb-18-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1803.jpg)"></a>
					</li>
					<li id="li-f-18-4">
						<a href="#18.4" id="a-thumb-18-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1804.jpg)"></a>
					</li>
					<li id="li-f-18-5">
						<a href="#18.5" id="a-thumb-18-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1805.jpg)"></a>
					</li>
					<li id="li-f-18-6">
						<a href="#18.6" id="a-thumb-18-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1806.jpg)"></a>
					</li>
					<li id="li-f-18-7">
						<a href="#18.7" id="a-thumb-18-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1807.jpg)"></a>
					</li>
					<li id="li-f-18-8">
						<a href="#18.8" id="a-thumb-18-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1808.jpg)"></a>
					</li>
					<li id="li-f-18-9">
						<a href="#18.9" id="a-thumb-18-9" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1809.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-19" class="isSec b0" style="display:none">
					<li id="li-f-19-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1901.jpg">
						<a href="#19.1" id="a-thumb-19-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1901.jpg)"></a>
					</li>
					<li id="li-f-19-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1902.jpg">
						<a href="#19.2" id="a-thumb-19-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1902.jpg)"></a>
					</li>
					<li id="li-f-19-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1903.jpg">
						<a href="#19.3" id="a-thumb-19-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1903.jpg)"></a>
					</li>
					<li id="li-f-19-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1904.jpg">
						<a href="#19.4" id="a-thumb-19-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1904.jpg)"></a>
					</li>
					<li id="li-f-19-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1905.jpg">
						<a href="#19.5" id="a-thumb-19-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1905.jpg)"></a>
					</li>
					<li id="li-f-19-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/1906.jpg">
						<a href="#19.6" id="a-thumb-19-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/1906.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-20" class="isSec b0" style="display:none">
					<li id="li-f-20-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2001.jpg">
						<a href="#20.1" id="a-thumb-20-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2001.jpg)"></a>
					</li>
					<li id="li-f-20-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2002.jpg">
						<a href="#20.2" id="a-thumb-20-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2002.jpg)"></a>
					</li>
					<li id="li-f-20-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2003.jpg">
						<a href="#20.3" id="a-thumb-20-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2003.jpg)"></a>
					</li>
					<li id="li-f-20-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2004.jpg">
						<a href="#20.4" id="a-thumb-20-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2004.jpg)"></a>
					</li>
					<li id="li-f-20-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2005.jpg">
						<a href="#20.5" id="a-thumb-20-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2005.jpg)"></a>
					</li>
					<li id="li-f-20-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2006.jpg">
						<a href="#20.6" id="a-thumb-20-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2006.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-21" class="isSec b1" style="display:none">
					<li id="li-f-21-1">
						<a href="#21.1" id="a-thumb-21-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2101.jpg)"></a>
					</li>
					<li id="li-f-21-2">
						<a href="#21.2" id="a-thumb-21-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2102.jpg)"></a>
					</li>
					<li id="li-f-21-3">
						<a href="#21.3" id="a-thumb-21-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2103.jpg)"></a>
					</li>
					<li id="li-f-21-4">
						<a href="#21.4" id="a-thumb-21-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2104.jpg)"></a>
					</li>
					<li id="li-f-21-5">
						<a href="#21.5" id="a-thumb-21-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2105.jpg)"></a>
					</li>
					<li id="li-f-21-6">
						<a href="#21.6" id="a-thumb-21-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2106.jpg)"></a>
					</li>
					<li id="li-f-21-7">
						<a href="#21.7" id="a-thumb-21-7" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2107.jpg)"></a>
					</li>
					<li id="li-f-21-8">
						<a href="#21.8" id="a-thumb-21-8" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2108.jpg)"></a>
					</li>
				</ul>

				<ul id="div-secao-thumbs-22" class="isSec b0" style="display:none">
					<li id="li-f-22-1" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2201.jpg">
						<a href="#22.1" id="a-thumb-22-1" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2201.jpg)"></a>
					</li>
					<li id="li-f-22-2" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2202.jpg">
						<a href="#22.2" id="a-thumb-22-2" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2202.jpg)"></a>
					</li>
					<li id="li-f-22-3" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2203.jpg">
						<a href="#22.3" id="a-thumb-22-3" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2203.jpg)"></a>
					</li>
					<li id="li-f-22-4" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2204.jpg">
						<a href="#22.4" id="a-thumb-22-4" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2204.jpg)"></a>
					</li>
					<li id="li-f-22-5" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2205.jpg">
						<a href="#22.5" id="a-thumb-22-5" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2205.jpg)"></a>
					</li>
					<li id="li-f-22-6" class="https://ia.bella.com.br/vanessa_vailatti/fotos/2206.jpg">
						<a href="#22.6" id="a-thumb-22-6" style="background-image:url(https://ia.bella.com.br/vanessa_vailatti/thumbs/2206.jpg)"></a>
					</li>
				</ul>

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
					<a class="next controls" rel="nofollow" onclick="BellaAssay.PassaFoto('+')"></a>

					<a class="bannerVerticalLateralFoto bannerCta" style="left:98px" href="{{ route('assine.index') }}"></a>
					<a class="bannerVerticalLateralFoto bannerCta" style="left:778px" href="{{ route('assine.index') }}"></a>

					<img id="imgFE_1_1" style="height: auto; width: auto; left: 292px;" src="https://ia.bella.com.br/vanessa_vailatti/fotos/101.jpg" onload="BellaAssay.fotoShow(1,1,this.id)" onerror="BellaAssay.FotoLoadError(this.id)" ondblclick="BellaAssay.zoomStart()" class="https://ia.bella.com.br/vanessa_vailatti/fotos/101.jpg undefined">

				</div>    

			</div>



			<br class="clearfloat">    

		</div>

		<div class="bbox-end-line"> </div>
		<br>
		<div id="div-assay-js" style="display:none"></div>
		<script type="text/javascript">
			id_assay = 346;
			model_name = "Vanessa Vailatti";
			model_folder = "vanessa_vailatti";
			model_tracker = "https://www.belladasemana.com.br/modelos/vanessa-vailatti";
			BellaClub.assayShow("photos");
		</script>

	</div>     

	<div class="div-conteudo">

		<div class="text">

			<div align="justify">
				<p>&nbsp;</p>
				<h2 id="m_-3676559654912172710docs-internal-guid-4ee9f044-815c-ee68-bc89-979d30567016" dir="ltr">Vanessa Vailatti</h2>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">Dona de um corpo escultural e um rosto expressivo e hipnotizante, a modelo Vanessa Vailatti (que tamb&eacute;m atende pelo nome de Vanessinha) &eacute; uma taurina de personalidade e convic&ccedil;&atilde;o, daquelas que nunca deixam para tr&aacute;s suas origens. Natural de Santa Catarina e estudante de Educa&ccedil;&atilde;o F&iacute;sica,&nbsp;Vanessa &eacute; a grande vencedora do Concurso Bella da Semana&nbsp;(etapa Feijoada do Cacau) e seu ensaio fotogr&aacute;fico foi mais um presente para os assinantes do site mais quente da web.</p>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">Aqui na Bella da Semana voc&ecirc; se deleita com&nbsp;<a href="https://www.belladasemana.com.br/modelos/vanessa-vailatti/video" target="_blank" rel="noopener noreferrer" data-saferedirecturl="https://www.google.com/url?hl=pt-BR&amp;q=https://www.belladasemana.com.br/modelos/vanessa-vailatti/video&amp;source=gmail&amp;ust=1492610495578000&amp;usg=AFQjCNFMS53pr8oTwnaFQ0BiFBr1bprODA">Vanessa Vailatti completamente nua&nbsp;</a>pelas lentes do fot&oacute;grafo Alex Ribeiro e curte momentos de puro prazer e beleza. Reserve um momento para voc&ecirc; mesmo e prepare-se para uma agrad&aacute;vel surpresa.</p>
				<h3 dir="ltr">There she goes: Vanessa Vailatti pelada em um ensaio fotogr&aacute;fico de tirar o f&ocirc;lego</h3>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">N&atilde;o foi a primeira vez que Vanessa Vailatti posou nua para o fot&oacute;grafo Alex Ribeiro: ambos j&aacute; se conheciam via redes sociais e j&aacute; haviam feito um ensaio de nudez. Por isso, as fotos ficaram deslumbrantes: &agrave; vontade e se divertindo bastante, a modelo se deixou fotografar e, por meio dos registros, descobrimos por que&nbsp;Vanessinha&nbsp;foi a grande vencedora do Concurso!</p>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">Com l&aacute;bios carnudos, uma pele acetinada e formas perfeitas, a modelo catarinense faz jus ao t&iacute;tulo recebido: determinada, cuida do corpo com dietas e muita malha&ccedil;&atilde;o, com treinos acompanhados por seu personal trainer particular. Voluptuosa e cheia de atitude, Vanessa Vailatti &eacute; uma mulher rom&acirc;ntica, que gosta de usar lingerie sexy e tomar um vinho ao som de uma boa m&uacute;sica. Segundo a modelo, estes s&atilde;o os tr&ecirc;s ingredientes principais de uma noite especial e inesquec&iacute;vel.</p>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">Quando o assunto &eacute; fantasia sexual, Vanessa curte uma aventura mais ousada e arriscada, em lugares p&uacute;blicos. Inclusive, essa del&iacute;cia de 1,64 m j&aacute; matou a vontade em uma praia! Quem ter&aacute; sido o sortudo premiado? Uma outra particularidade dessa deusa &eacute; o fato de sexo no primeiro encontro n&atilde;o ser um tabu para ela. Segundo a modelo, o importante na vida &eacute; viver intensamente e n&atilde;o se preocupar com regras preestabelecidas. A galera vibra: nada mais sexy do que uma mulher decidida, n&atilde;o &eacute; mesmo?</p>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<h3 dir="ltr">Quer ficar pertinho de Vanessa Vailatti? Venha para o clube mais secreto da web!</h3>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<p dir="ltr">O Bella da Semana &eacute; um clube repleto de vantagens para o usu&aacute;rio. Motivos para assinar n&atilde;o faltam:</p>
				<p style="text-align: center; font-size: 15px;">&nbsp;</p>
				<ol>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr">Sua identidade &eacute; preservada, portanto, sua assinatura &eacute; sigilosa. No recibo banc&aacute;rio ou no extrato do cart&atilde;o de cr&eacute;dito n&atilde;o aparecer&aacute; o nome do site</p>
					</li>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr">Seus dados est&atilde;o protegidos aqui no Bella da Semana. Por isso, relaxe: nosso sistema de criptografia oferece total seguran&ccedil;a para realizar compras</p>
					</li>
				</ol>
				<ol>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr"><a href="https://www.belladasemana.com.br/politica-de-privacidade" target="_blank" rel="noopener noreferrer" data-saferedirecturl="https://www.google.com/url?hl=pt-BR&amp;q=https://www.belladasemana.com.br/politica-de-privacidade&amp;source=gmail&amp;ust=1492610495579000&amp;usg=AFQjCNEYUvOrcbvbls8_OuiMHY-9F_byRg">Clique aqui</a>&nbsp;e saiba mais a sobre a nossa pol&iacute;tica de privacidade</p>
					</li>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr">Voc&ecirc; acessa fotos HD e v&iacute;deos em Foll HD</p>
					</li>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr">Nossos planos t&ecirc;m valores extremamente acess&iacute;veis (apenas R$ 24,99 por m&ecirc;s!)</p>
					</li>
					<li dir="ltr" style="list-style-type: disc;">
						<p dir="ltr">O Clube Bella permite que o usu&aacute;rio aproveite descontos de at&eacute; 20% em lojas parceiras, vantagem concedida durante a vig&ecirc;ncia da assinatura</p>
					</li>
				</ol>
				<p style="text-align: center; font-size: 15px;"><br /><br /></p>
				<p dir="ltr">Confira nossos planos agora mesmo: assine a Bella da Semana e veja Vanessinha Vailatti nua em fotos de alta resolu&ccedil;&atilde;o!</p>

				<p>&nbsp;</p>
			</div>

		</div>

		<div class="assine-btl">
			<a href="{{ route('assine.index') }}" style="width:30%; margin-right: auto">Assinar agora!</a>
		</div>

	</div>

	<div class="bbox-end-line"> </div>

	<br class="clearfloat">

</div>

@stop