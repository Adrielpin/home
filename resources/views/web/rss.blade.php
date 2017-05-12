@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">
    <div id="div-conteudo">

    <style type="text/css">
#div-rss1 { width:560px; padding:24px 0 0 45px; }
#div-rss2 { width:560px; padding:24px 0 0 45px; }
#div-rss3 {  width:560px; padding:24px 0 0 45px; }


#div-imagem-rss { float:right; margin:32px 0 0 0; width:382px; white-space:nowrap; text-align:right; }
.rss-body { padding-bottom:50px !important; }
.rss-body ul { width:510px; }
.rss-body li {
	border-bottom:1px solid #b2b2b2; padding:6px 0 12px 64px;
	background:url(../storage/imagens/rss_ico1.png) no-repeat 34px 14px;  font-size:11px;
}
.rss-body li strong {  font-weight:500; font-size:32px; }
.rss-body a, .rss-body a:link, .rss-body a:hover, .rss-body a:visited {
	color:#b20000; font-size:11px;
}
</style>
<div class="guias">
    <ul>
    	<li id="li-g-1" class="on"><h2><a onclick="BellaClub.guiasClickNew('li-g-1');$('div-rss2','div-rss3').invoke('hide');$('div-rss1').show();">Canais RSS</a></h2></li> 
        <li id="li-g-2" class=""><h2><a onclick="BellaClub.guiasClickNew('li-g-2');$('div-rss1','div-rss3').invoke('hide');$('div-rss2').show();">Como usar</a></h2></li>  
        <li id="li-g-3" class="lg"><h2><a onclick="BellaClub.guiasClickNew('li-g-3');$('div-rss2','div-rss1').invoke('hide');$('div-rss3').show();">Leitores de RSS</a></h2></li>  
   </ul>
   <br class="clearfloat">
</div>
<div class="bbox-content bbox-c-clean rss-body">

	<div id="div-imagem-rss">
    	 <img alt="RSS Bella" src="../storage/2015/rss-image.jpg" width="382" height="573">
    </div>

	
<div id="div-rss1">
<p>Esse botãozinho laranja que a Bella Amanda Alves está segurando é chamado de <strong>RSS (Really Simple Syndication)</strong> e é um jeito novo e prático de ficar informado. Com ele você pode reunir informações de seus sites preferidos em uma única tela, e, como num programa de e-mail, ser avisado das novidades assim que elas são publicadas na internet. </p>
<p>Escolha o canal de sua preferência e copie o link para o seu agregador de RSS:</p>
<ul>
      <li><strong>Geral</strong>
      <br>RSS completo, com todas as novidades do site Bella da Semana
      <br><a href="https://www.belladasemana.com.br/rss/geral" rel="nofollow">https://www.belladasemana.com.br/rss/geral</a>
      </li>

      <li><strong>Modelos</strong>
      <br>Saiba em primeira mão da estreia de um novo ensaio no Bella da Semana
      <br><a href="https://www.belladasemana.com.br/rss/modelos" rel="nofollow">https://www.belladasemana.com.br/rss/modelos</a>
      </li>


      <li><strong>Blog</strong>
      <br>Você será avisado a cada novo post no blog do Bella da Semana
      <br><a href="https://www.belladasemana.com.br/rss/blog" rel="nofollow">https://www.belladasemana.com.br/rss/blog</a>
      </li>

      <li><strong>Colunas</strong>
      <br>Uma prévia das colunas publicadas é enviada para você
      <br><a href="https://www.belladasemana.com.br/rss/colunas" rel="nofollow">https://www.belladasemana.com.br/rss/colunas</a>
      </li>
      
      <li><strong>Enquete</strong>
      <br>Aviso do lançamento de uma nova enquete, para você dar sua opinião
      <br><a href="https://www.belladasemana.com.br/rss/enquete" rel="nofollow">https://www.belladasemana.com.br/rss/enquete</a>
      </li>

</ul>


</div>

<div id="div-rss2" style="display:none">
  <p>Para começar a usar o RSS, você precisa de um programa que lê as notícias em um formato especial chamado XML. Estes programas são conhecidos como  agregadores. Escolha um e instale-o em seu computador. Alguns browsers, como o Mozila Firefox e o internet Explorer 7, já trazem leitores de RSS. </p>
  <p>Com o leitor de notícias instalado, adicione seus canais de informação prediletos ao seu "menu de notícias". Para isso, clique com o botão direito do mouse sobre o link e escolha "Copiar Atalho". No agregador, procure a opção "Adicionar Fonte" ou "Add Feed".</p>
  <p> Para assinar o RSS do Bella da Semana selecione as seções que lhe interessam dentre as opções existentes na aba "Canais RSS".Aqui no Bella você poderá escolher receber alertas sobre a estreia de um novo ensaio, atualização do blog e das colunas etc. </p>
  <p>Você também poderá definir de quanto em quanto tempo o programa buscará novidades.</p>
</div>

<div id="div-rss3" style="display:none">
    <p>Confira uma lista com alguns leitores de notícias disponíveis na internet: </p>
  <ul>
      <li><strong>AlertBear</strong><br><a href="http://www.alertbear.com" target="_blank" rel="nofollow">http://www.alertbear.com</a></li>
      <li><strong>FeedReader</strong><br><a href="http://www.feedreader.com" target="_blank" rel="nofollow">http://www.feedreader.com</a></li>
      <li><strong>iGoogle</strong><br><a href="http://www.igoogle.com" target="_blank" rel="nofollow">http://www.igoogle.com</a></li>
      <li><strong>BlogLines</strong><br><a href="http://www.bloglines.com" target="_blank" rel="nofollow">http://www.bloglines.com</a></li>
    </ul>
</div>    
    <br class="clearfloat"><br>
    
    

</div>
<div class="bbox-end bbox-end-line"> </div><script type="text/javascript">
BellaClub.guiasClickNew('li-g-1');BellaClub.fixMenu();
</script><script type="text/javascript" defer="defer">
GetBannerTop(3);
</script>    

    </div>     

</div>

@stop
