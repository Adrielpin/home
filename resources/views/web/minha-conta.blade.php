@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">
	<div id="div-conteudo">

		<style type="text/css">
			#div-minhaconta-content { min-height: 500px; background: url(/layout/imagens/minhaconta-bg-model.jpg) no-repeat top right; }
			#div-minhaconta-content h1 { font-size: 32px; text-transform:uppercase; font-weight: 700;  }
			#div-minhaconta-content .texto { margin: 10px 0; font-size: 18px; }
			#div-minhaconta-content .texto strong { font-weight: 500; }

			#div-minhaconta-content ul.texto-opcs { width: 600px; }
			#div-minhaconta-content ul.texto-opcs li {
				background: url("/layout/2015/ico_seta_contato.png") no-repeat 4px center;
				font-size: 19px; padding-left: 30px; border-bottom: 1px solid #dfdfdf; height: 50px; 
				line-height: 48px;  
				display:block;
			} 



			form.login  { text-align: center;  width: 600px; margin-top:30px; }
			form.login h3 {   font-weight: 700; font-size: 30px; margin: 8px auto; }
			form.login div { line-height:30px; font-size: 14px; }
			form.login button { display:block; margin: 5px auto;
				color:#FFF; font-size: 20px; font-weight: 700; 
				background-color:#000; 
				height: 44px;
				width: 250px;
				letter-spacing: normal;
				border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px; font-family: inherit;  }
				form.login input[type=text], form.login input[type=password] {
					background-color: #f2f2f2; 
					border: 1px solid #ccc; 
					color:#747474;     
					margin: 8px 5px;
					padding: 0 10px;
					font-size: 14px;   
					border-radius: 6px; -moz-border-radius: 6px; -webkit-border-radius: 6px;  
					height:35px;  line-height: 35px;
					width: 200px;
				}
				form.login button:hover  { background-color: #B20000; }


				/* regras mobile 650vp */
				@media (max-width: 915px) {
					#div-minhaconta-content { background: none; }
					form.login input[type=text], form.login input[type=password] { color:#111; display: block; width: 350px; margin:8px auto; }
					form.login button { width: 370px; }        
				}  
			</style>
			<div class="bbox-c-clean" id="div-minhaconta-content">

				<h1>Minha conta</h1>
				
				<div class="texto"><strong>Minha Conta</strong> é uma área destinada ao assinante do Bella da Semana.<br>Aqui você pode:</div>
				
				<ul class="texto-opcs">
					
					<li>Conferir o histórico de pagamentos da sua assinatura</li>
					<li>Colocar sua assinatura do Bella da Semana em dia</li>
					<li>Imprimir a 2a via do boleto bancário</li>
					<li>Atualizar seus dados cadastrairs (e-mail e senha)</li>
				</ul>
				
				
				
				<form class="login" id="fLogin-C" name="fLogin-C" action="/" method="post" onsubmit="return BellaClub.checkLogin('-C')">
					<h3>Faça seu login</h3>
					<input name="login" placeholder="Login" type="text" id="loginC" maxlength="100" value="" required="required">
					<input name="pws" placeholder="Senha" type="password" id="pwsC" maxlength="20" required="required">
					<button type="submit">Entrar</button>

					<div><a href="javascript:;" onclick="BellaClub.showForgotPass();">Se você esqueceu sua senha, clique aqui</a></div>

					<input type="hidden" name="action" value="loginaccount2">
					<div id="div-login-act-C" style="display:none"></div>
				</form>
				
				

			</div>
			<div class="bbox-end-line"> </div><script type="text/javascript" defer="defer">
			BellaClub.fixMenu('');
		</script>    

	</div>     

</div>

@stop
