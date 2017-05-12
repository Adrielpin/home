@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">

	<div id="div-conteudo">

		@include('web.colunas.sub-menu')

		<div class="bbox-c-clean" id="div-colunas-content">    

			<script type="text/javascript">
				GetBannerTop(3);
			</script><script type="text/javascript"> var addthis_config = {"data_track_clickback":true}; </script>
			<script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=belladasemana"></script>
			<script>
				loginNextAction = function() {  location.href = location.href+'?refresh'; };
			</script>

			<style type="text/css">
				.div-thumbs {
					font-size: 0; white-space: nowrap;
				}    
				.ul-thumbs {
					display:inline-block; 
					list-style:none; margin:0; padding:0; overflow:hidden; height:62px; width:380px; text-align:left;
				}
				.ul-thumbs li {
					list-style:none; margin-right:4px; padding:0;
					background-repeat:no-repeat; background-size: 100%;
					display:inline-block; 
				}
				.ul-thumbs li, .ul-thumbs li a  { height:62px; width:92px; }
				.ul-thumbs li a  {
					float:left; cursor:pointer; text-decoration:none;  
					background-color: transparent;  
				}
				.ul-thumbs li a:hover {
					opacity:0.3;     filter:alpha(opacity=30);     background-color:#FFFFFF;
				}
				.ul-thumbs li a.on {
					opacity:0.5;    filter:alpha(opacity=50);    background-color:#FFFFFF;
				}    
				#div-nav-up, #div-nav-down { display:inline-block; background-image:url(/storage/2015/colunas-seta-gal.png); background-repeat:no-repeat; background-position:top center; height:62px; width: 20px; cursor:pointer; }
				#div-nav-up {  background-position:left top; }
				#div-nav-down { background-position:right top; }


				.post-text div.audio {
					float: left;
					margin-top: 10px;
				}
				.post-text div.audio div.txtTitle {    
					text-align: center; text-transform: uppercase; font-style: italic; font-weight: 700; font-size: 18px;
					height: 45px; line-height: 44px; background-color: #cdcdcd;
					width: 420px;
				}
				.post-text div.txtAssine {    
					float:right;
					width: 790px;
					background-color: #fff;    
				}
				.post-text div.txtAssine > a {    
					text-align: center; text-transform: uppercase; font-style: italic;
					margin-bottom: 14px;
					height: 31px; line-height: 30px;
					font-size: 16px;
					font-weight: 500;
					background-color: #cdcdcd;
					display: block;
				}
				.post-text a.aAssine {
					background-color: #ff6000 !important; 
				}

				.post-text div.audio audio {    
					width: 420px;
				}

				.post-text div.audio {
					width: 1230px; 
				}

				@media (max-width: 980px) {
					.post-text div.audio {  width: 920px; }
					.post-text div.txtAssine {  width: 490px; }
					.mx .post-text div.txtAssine > a { font-size: 14px; }
				}
				@media (max-width: 650px) { 
					.post-text div.audio, .post-text div.audio audio, .post-text div.txtAssine, .post-text div.audio div.txtTitle {  width: 100%; }
					.post-text div.txtAssine { float:none; }
				}
			</style>

			<script type="text/javascript">
				_cShowFoto = function(pos_, url_) {	
					$$('#div-gal-img-container > img').invoke('hide'); 
					var xCount = 0;
					$A($$('ul.ul-thumbs li a')).each(function(a_){
						xCount++;
						$(a_).removeClassName('on');
						if (xCount == pos_) {
							_scrollToThumb(xCount);
							$(a_).addClassName('on');
						}                 
					});
					if ($('img-mk-'+pos_)) { 
						$('img-mk-'+pos_).show() 
					} else {
						$('div-gal-img-container').insert({
							top:'<img id="img-mk-'+pos_+'" src="'+url_+'" />'});  
					}
					GetBannerTop(2);
				};
				_ckScrollInterval = false;
				_scrollToThumb = function(pos_) {
					elem_ = $$('ul.ul-thumbs')[0];
					$(elem_).scrollTop = (105*(pos_-1));
				};
				_scrollThumbs = function(d_) {
					var totalfsc = 0;
					var speed = 70;
					$A($$('ul.ul-thumbs li')).each(function(){totalfsc++;});    
					elem_ = $$('ul.ul-thumbs')[0];
					var cst_ =    $(elem_).scrollLeft;
					var n_ = 10;
					var dos_ = false;
					if (cst_ > 0 && d_==0) {
						$(elem_).scrollLeft = (cst_ - n_);
						dos_=true;
					} else if (d_==1) {
						var mpos_ = $(elem_).down().getWidth() * totalfsc;
						dos_=true;
						if (cst_ > mpos_) {   
							$(elem_).scrollLeft = 0;
						} else {
							$(elem_).scrollLeft = (cst_ + n_);
						}
					}
					if (dos_) {  _ckScrollInterval = window.setTimeout(_scrollThumbs, speed, d_ );  }
				}; 
				_preparar_thumbs = function() { 
					$('div-nav-down').observe('mouseover',function() {  _scrollThumbs(1);   });
					$('div-nav-up').observe('mouseover',function() {  _scrollThumbs(0); });
					$('div-nav-down').observe('mouseout',function() {  window.clearTimeout(_ckScrollInterval); });
					$('div-nav-up').observe('mouseout',function() { window.clearTimeout(_ckScrollInterval); });
					$$('ul.ul-thumbs li').each(function(li_) {    
						$( li_ ).observe('click', function() {            
							_cShowFoto( this.readAttribute('pos'),  this.readAttribute('img'));       
						});
					});
				};
				window.setTimeout(_preparar_thumbs,1000);
			</script>

			<div class="post-text">

				<div class="imagem" id="div-gal-img-container">

					<img id="1" src="{{Storage::url('columns/'.$article[0]->photos[0]->name) }}">
					
					<div class="credits">créditos: BMW</div>

					<div class="div-thumbs">

						<div id="div-nav-up"></div>

						<ul class="ul-thumbs">

							@foreach ($article[0]->photos as $k => $photo)
							<li img="{{Storage::url('columns/'.$photo->name) }}" pos="{{ $k+1 }}" style="background-image:url('{{"/storage/columns/".$photo->name }}"><a class=""></a></li>
							@endforeach

						</ul>

						<div id="div-nav-down"></div>

					</div>
				</div>

				<h1>{!! $article[0]->title !!}</h1>

				<div class="text">

					<div align="justify">
						{!! $article[0]->text !!}
					</div>
					<br>        

					<div class="escritor">Gustavo Sana</div>
				</div>
				<br>
				<div id="divShareAddthis" class="addthis_toolbox addthis_default_style"> 
					<a class="aaddthis_button_google_plusone at300b" style="width:30px !important" g:plusone:count="false" g:plusone:annotation="none"><div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;"><span><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 24px; height: 15px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 24px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 15px;" tabindex="0" vspace="0" width="100%" id="I0_1489674184722" name="I0_1489674184722" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;count=false&amp;annotation=none&amp;size=small&amp;hl=en-US&amp;origin=https%3A%2F%2Fwww.belladasemana.com.br&amp;url=https%3A%2F%2Fwww.belladasemana.com.br%2Fcolunas%2Fcartas-na-mesa%2Fo-que-aprendi-com-esses-caras&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.pt_BR.bFlRy4H3Eh0.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNhQ28SUq6lkZIQ0qVgmShgZYI6Xw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1489674184722&amp;parent=https%3A%2F%2Fwww.belladasemana.com.br&amp;pfname=&amp;rpctoken=15840657" data-gapiattached="true" title="+1"></iframe></div></span></div></a><a class="addthis_button_twitter at300b" title="Twitter" href="#"><span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 16px; height: 16px; width: 16px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Twitter" alt="Twitter" style="width: 16px; height: 16px;" class="at-icon at-icon-twitter"><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a class="addthis_button_facebook at300b" title="Facebook" href="#"><span class="at-icon-wrapper" style="background-color: rgb(59, 89, 152); line-height: 16px; height: 16px; width: 16px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Facebook" alt="Facebook" style="width: 16px; height: 16px;" class="at-icon at-icon-facebook"><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a class="addthis_button_compact at300m" href="#"><span class="at-icon-wrapper" style="background-color: rgb(255, 101, 80); line-height: 16px; height: 16px; width: 16px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="More" alt="More" style="width: 16px; height: 16px;" class="at-icon at-icon-addthis"><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span></a>
					<div class="atclear"></div></div></div>    
					<br class="clearfloat">
				</div>
				<div class="bbox-end-line"> </div><script type="text/javascript">
			</script>    

		</div> 

		@stop
