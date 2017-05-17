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

					@foreach ($essay->parts as $p => $part)					

					<ul class="partB" onclick="BellaAssay.toggleParts(this)">

						<li>{{ $part->name }}</li>

					</ul>

					<ul class="sections">

						@foreach ($part->sections as $s => $section)
						
						<li class="section s0">

							<a class="on" name="{{$p.$s}}"> {{ $section->name }} </a>

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
						<a style="background-image:url({{ '/storage/essays/'. $photo->thumb }})"></a>
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
					<a class="next controls" rel="nofollow" onclick="BellaAssay.PassaFoto('+')"></a>

					<a class="bannerVerticalLateralFoto bannerCta" style="left:98px" href="{{ route('assine.index') }}"></a>
					<a class="bannerVerticalLateralFoto bannerCta" style="left:778px" href="{{ route('assine.index') }}"></a>

					<img id="imgFE_1_1" style="height: auto; width: auto; left: 292px;" src="https://ia.bella.com.br/vanessa_vailatti/fotos/101.jpg" onload="BellaAssay.fotoShow(1,1,this.id)" onerror="BellaAssay.FotoLoadError(this.id)" ondblclick="BellaAssay.zoomStart()" class="https://ia.bella.com.br/vanessa_vailatti/fotos/101.jpg undefined">

				</div>    

			</div>



			<br class="clearfloat">    

		</div>

		<div class="bbox-end-line"></div>
		<br>
		
	</div>     

	<script type="text/javascript">
		
		jQuery(document).ready(function(){

			jQuery('.isSec:first').show();

			jQuery('.section a').click(function () {

				jQuery('.isSec').hide();
				
				name = jQuery(this).attr('name');
				jQuery('ul[name="' + name + '"]').show();
			});

		});

		
	</script>

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