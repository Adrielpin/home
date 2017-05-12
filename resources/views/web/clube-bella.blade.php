@extends('web.layouts.menu')

@section ('page_title','Clube bella')

@section('content')

<div class="box-central">

	<div id="div-conteudo">

		<script type="text/javascript" defer="defer">
			GetBannerTop(3); BellaClub.fixMenu('clubebella');
		</script><script type="text/javascript">
		loginNextAction = function() {  location.href = location.href+'?refresh'; };
	</script><style type="text/css">
	.cv-banner { height: 454px;  background-repeat: no-repeat; 
		background-image:url('../storage/br/2015/desktop/cv-banner2.jpg');  }
		.cv h2 {  font-size: 50px;    font-weight: 400;    line-height: 76px;    margin-bottom: 10px;    text-align: center;}
		.cv ul { list-style: none; width: 102%; }
		.cv ul li {   display: inline-block; float:left; }
		.cv ul li a { display:inherit; width:401px; height: 334px; margin:0 10px 10px 0; background-repeat: no-repeat;  }
		.cv-centauro { background-image:url('../storage/br/2015/desktop/cv-centauro-3.jpg'); }
		.cv-homem-de-marte { background-image:url('../storage/br/2015/desktop/cv-homem-de-marte.jpg'); }
		.cv-bellanoir { background-image:url('../storage/br/2015/desktop/cv-bella-noir.jpg'); }
		.cv-brevemais { background-image:url('../storage/br/2015/desktop/cv-em-breve.jpg'); margin-right:0px !important; }

		.cv-popd-box {
			width: 600px; height:230px; border:2px solid #000; position: absolute; z-index: 450; background-color: #fff;
		}
		.cv-popd-box-text {
			padding: 44px 38px 0;
			font-size: 20px; font-weight:500;
		}
		.cv-popd-box-cod {
			margin-top: 20px;
			background-color: #000; color:#fff; font-size: 30px; line-height: 48px; height: 50px;
			letter-spacing: 2.5pt; text-align: center;
		}
		@media (max-width: 980px) {       
			.cv-banner { height: 340px; background-image:url('../storage/br/2015/tablet/cv-banner2.jpg'); }
			.cv ul li a { width:300px; height:250px; background-size: contain; }
			.cv-centauro { background-image:url('../storage/br/2015/tablet/cv-centauro3.jpg'); }
			.cv-bellanoir { background-image:url('../storage/br/2015/tablet/cv-bella-noir.jpg'); }
			.cv-brevemais { background-image:url('../storage/br/2015/tablet/cv-em-breve.jpg'); }
			.cv h2 {  font-size: 40px; }
		}
		@media (max-width: 650px) {   
			.cv-banner { height: 454px; background-image:url('../storage/br/2015/mobile/cv-banner2.jpg'); }
			.cv ul { width:104%; }
			.cv ul li a { width:199px; height:166px;}
			.cv-centauro { background-image:url('../storage/br/2015/mobile/cv-centauro3.jpg'); }
			.cv-bellanoir { background-image:url('../storage/br/2015/mobile/cv-bella-noir.jpg'); }
			.cv-brevemais { background-image:url('../storage/br/2015/mobile/cv-em-breve.jpg)';  }
			.cv h2 {  font-size: 26px; white-space: nowrap; }
		}   
	</style>
	<script>
		_popd = function(div_) {  BellaClub.showAlphaBox(div_); Centralizar(div_, isAM); $(div_).appear({duration:0.5}); };
	</script>
	<div class="bbox-c-clean cv">
		<div class="cv-banner"></div>    
		<h2>Para obter desconto clique nas imagens abaixo</h2>
		<ul>
			<li><a class="cv-centauro" onclick="BellaClub.promptLogin();"></a></li>
			<!--<li><a class="cv-bellanoir" onclick="BellaClub.promptLogin();"></a></li>-->
			<li><a class="cv-homem-de-marte" onclick="BellaClub.promptLogin();"></a></li>            
			<li><a class="cv-brevemais" rel="nofollow"></a></li>
		</ul>
		<br class="clearfloat">
	</div>
	<div class="bbox-end-line"></div>


</div>     

</div>
@stop