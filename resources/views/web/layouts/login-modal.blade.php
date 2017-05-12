<div id="div-box-login" style="left: 102px; top: 719px; display: none;">

	<a class="x" onclick="$('div-box-login','div-alphabox').invoke('hide');"></a>

	<form id="fLogin" name="flogin" method="post" action="{{ route('login') }}">

		{{ csrf_field() }}

		<div class="ja-socio"><span>Já é sócio?</span></div>

		<div class="do-login">Faça seu login</div>        

		<div class="field">
			<span>E-mail:</span>
			<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" autofocus>

			{{-- <input id="email" type="text"  id="logind" maxlength="100" name="email" value="{{ old('email') }}" required autofocus> --}}
		</div>

		<div class="field">
			<span>Senha:</span>
			<input name="password" type="password" id="pwsd" maxlength="20">
		</div>

		<button type="submit">Entrar</button>

	</form>


	<div>

		<div class="txt">Se você esqueceu sua senha, <a href="javascript:BellaClub.showForgotPass()" rel="nofollow">clique aqui</a></div>

	</div>

	<div id="div-login-act" style="display:none"></div>

	
	<div class="nao-socio"><span>Ainda não é sócio?</span></div>

	<a class="assine-img" href="https://www.belladasemana.com.br/assine"></a>
	<a class="assine-txt" href="https://www.belladasemana.com.br/assine"></a>

	<br class="clearfloat">

	<div class="planos">Escolha seu plano</div>


	<table class="planos-table" border="0" cellspacing="0" cellpadding="0">

		<tbody>

			<tr>       
				<td nowrap="nowrap" class="td1"> Mensal </td>
				<td nowrap="nowrap" class="td2"><span>somente</span> R$ 24.99</td>
				<td nowrap="nowrap" class="td3"><span class="pdN">(apenas <strong>0,83/dia</strong>)</span></td>
			</tr>
			<tr>       
				<td nowrap="nowrap" class="td1"> Trimestral </td>
				<td nowrap="nowrap" class="td2"><span>somente</span> R$ 63.99</td>
				<td nowrap="nowrap" class="td3"><span class="pdN">(apenas <strong>0,71/dia</strong>)</span> 16% de desconto</td>
			</tr>
			<tr>       
				<td nowrap="nowrap" class="td1"> Semestral </td>
				<td nowrap="nowrap" class="td2"><span>somente</span> R$ 99.99</td>
				<td nowrap="nowrap" class="td3"><span class="pdN">(apenas <strong>0,55/dia</strong>)</span> 33% de desconto</td>
			</tr>
			<tr>       
				<td nowrap="nowrap" class="td1"> Anual </td>
				<td nowrap="nowrap" class="td2"><span>somente</span> R$ 149.99</td>
				<td nowrap="nowrap" class="td3"><span class="pdN">(apenas <strong>0,41/dia</strong>)</span> 50% de desconto</td>
			</tr>

		</tbody>

	</table>

	<a href="{{ route('assine.index') }}"><button class="assine">Assinar agora</button></a>

</div>