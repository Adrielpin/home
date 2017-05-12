@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">
    <div id="div-conteudo">

    <script language="javascript" type="text/javascript">
afl_terms_accepted=0;
aflFormNext = function() {
    if (afl_terms_accepted==0) {
        a9.msg(aSubscribe['termos'],'alert');
    } else {
    
        var msg_ = "";
        msg_ += ( $('company').present() ? "" : "<br /> - "+$('company-text').innerHTML );
        msg_ += ( $('commission_to').present() ? "" : "<br /> - "+$('commission_to-text').innerHTML );
        msg_ += ( $('contact_name').present() ? "" : "<br /> - "+$('contact_name-text').innerHTML );
        msg_ += ( $('address').present() ? "" : "<br /> - "+$('address-text').innerHTML );
        msg_ += ( $('city').present() ? "" : "<br /> - "+$('city-text').innerHTML );
        msg_ += ( $('state').present() ? "" : "<br /> - "+$('state-text').innerHTML );
        msg_ += ( $('zip_code').present() ? "" : "<br /> - "+$('zip_code-text').innerHTML );
        msg_ += ( $('country').getValue()!="" ? "" : "<br /> - "+$('country-text').innerHTML );
        msg_ += ( $('fone').present() ? "" : "<br /> - "+$('fone-text').innerHTML );
        msg_ += ( $('email').present() ? "" : "<br /> - "+$('email-text').innerHTML );
        msg_ += ( $('fone').present() ? "" : "<br /> - "+$('fone-text').innerHTML );
        msg_ += ( $('site_url').present() ? "" : "<br /> - "+$('site_url-text').innerHTML );
        
        if (msg_!="") {
            a9.msg(aSubscribe['preencha_corretamente']+msg_,'alert');
            return;
        }       
        
        $('lBTafl').hide();
        $('lAguardeafl').show();
        
        $('fAfl').submit();

    }
}


afGoFaq = function() {
    BellaClub.guiasClickNew('li-g-3');$('div-affiliate-formapply','div-affiliate-home').invoke('hide');$('div-affiliate-faq').show(); rolaTela();
};
afGoForm = function() { 
    BellaClub.guiasClickNew('li-g-2');$('div-affiliate-faq','div-affiliate-home').invoke('hide');$('div-affiliate-formapply').show(); rolaTela();
};
</script>
<style> 
.padding4 { padding:4px; }
#lTerms { border:1px solid #CCC; width:650px;height:125px;overflow:auto; padding:10px; }
#lMsgBox { border:1px solid #b20000; margin:6px; padding:12px; width: 580px; }
#div-affiliate-faq ul li { line-height:50px; background:url(../storage/imagens/setared.png) no-repeat left center; border-bottom:1px solid #e1e1e1; padding-left:18px; font-size: 15px; }
#lBTafl { margin-top:10px;width:650px;text-align:right; }
h3 { font-size:30px;  background:url(../storage/imagens/setared.png) no-repeat 0 11px; padding-left:18px; margin:10px 0; }
</style>
<div class="guias">
    <ul>
        <li id="li-g-1" class="on"><h2><a onclick="BellaClub.guiasClickNew('li-g-1');$('div-affiliate-faq','div-affiliate-formapply').invoke('hide');$('div-affiliate-home').show();">Programa Afiliados</a></h2></li> 
        <li id="li-g-2" class=""><h2><a onclick="afGoForm()">Inscreva-se</a></h2></li>  
        <li id="li-g-3" class="lg"><h2><a onclick="afGoFaq()">FAQ</a></h2></li>  
   </ul>
   <br class="clearfloat">
</div>
<div class="bbox-content bbox-c-clean">
    
    <div id="div-affiliate-home">
    
    <div style="padding:0 40px 20px 40px;min-height:500px">
        <img src="../storage/br/partner-fluxo-br.png" alt="Programa Afiliados" width="909" height="556">
        
          No ar desde 2001, o Bella da Semana é um dos mais conhecidos e respeitados portais de fotografias sensuais da internet. É fácil ganhar dinheiro com o Bella! Oferecemos uma parceira sem custo, que garante a você comissões fixas. 
            Nosso Programa de Afiliados funciona da seguinte forma:<br>
          <br>
          <h3>Cadastro</h3>
          
          Para dar início ao Programa de Afiliados Bella da Semana preencha a <a href="javascript:;" onclick="afGoForm()">ficha cadastral</a> em nosso site. Uma vez aprovada, você receberá um link automático que deverá ser adicionado ao seu site como banner ou em forma de link. 
           <br><br>
            Sempre que um usuário entrar no Bella da Semana através do seu link, ele receberá um cookie permanente, que permitirá identificá-lo como um cliente vindo por indicação sua.
            <br><br>
        Quanto mais cliques você gerar, maiores as chances de um visitante tornar-se membro do Bella da Semana e de você ganhar comissões. A cada assinatura gerada através do link postado em seu site, você recebe uma comissão de 50% sobre o valor da assinatura.  
            
            <br>
          <br>
          <h3>Pagamento</h3>
          Os pagamentos são cumulativos e repassados a você no dia 07 de cada mês via PagSeguro ou PayPal. Caso as comissões resultem um em montante inferior a R$ 100,00 o valor acumula até que o valor seja atingido, para então ser repassado. 
          <br>
          <br>
          <h3>Controle</h3>
              Para que você tenha total controle e possa acompanhar a contabilização passo-a-passo, você terá acesso à área reservada aos <a href="/afiliado" rel="nofollow">parceiros</a> do Bella da Semana, na qual é possível verificar toda a movimentação gerada pelo link em seu site, como relatórios de vendas, quantos cliques seu site gerou e o número de assinaturas concretizadas.
              
           <br>
          <br>
          <h3>Dúvidas</h3>
        Leia nosso <a href="javascript:;" onclick="afGoFaq()">FAQ</a> para mais informações ou fale conosco através do <a href="javascript:;" onclick="afGoForm()">formulário de contato</a>.
        
        <div style="text-align:center">
            <br>
            <img src="../storage/br/afiliate-bottom-opcs.png" alt="bella" width="474" height="115" border="0" usemap="#MapAf1">
            <map name="MapAf1" id="MapAf1">
              <area shape="rect" coords="34,10,199,52" href="javascript:afGoForm()">
              <area shape="rect" coords="252,10,426,54" href="javascript:afGoFaq()">
              <area shape="rect" coords="174,81,266,109" href="javascript:afGoForm()">
            </map>
        </div>       
        </div>
    </div>
        <!--end1-->
    
        <!--starform-->
        <div id="div-affiliate-formapply" style="display: none;">
            <div style="padding:20px 40px;min-height:500px">
        
            <div id="lAfForm">
            <input type="text" name="msgfocus" id="msgfocus" size="1" style="display:none">
            
            <form id="fAfl" name="fAfl" method="post" action="/index.php" onsubmit="return false;" target="iframeL">
                <input type="hidden" name="act" value="sdaffiliateform">
            
            <div id="lMsgBox" style="display:none">
                <table border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                <td width="35" align="center" valign="top" nowrap="nowrap"><img src="../storage/imagens/ico_alert.gif" width="14" height="14" vspace="3" alt="bullet"></td>
                <td nowrap="nowrap"><span class="textopreto" id="lMsgText" style="font-weight:bold">&nbsp;</span></td>
                </tr>
                </tbody></table>
            </div>
            
            
            <table border="0" cellspacing="2" cellpadding="0">
            <tbody><tr>
            <td><strong id="company-text">Nome da empresa</strong>:</td>
            <td><input name="company" type="text" class="bordaForm" id="company" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="50">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td nowrap="nowrap"><strong id="commission_to-text">Pagar comissões para</strong>:</td>
            <td><input name="commission_to" type="text" class="bordaForm" id="commission_to" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="30">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            
            
            <tr>
            <td><strong id="email-text">Forma de pagamento</strong>:</td>
            <td><label><input name="forma_pagamento" type="radio" value="PagSeguro" checked="checked"> PagSeguro UOL</label> &nbsp; 
                <label><input name="forma_pagamento" type="radio" value="PayPal"> PayPal</label> &nbsp; 
                <label><input name="forma_pagamento" type="radio" value="Itau"> Depósito em conta ITAU</label> &nbsp; 
                <label><input name="forma_pagamento" type="radio" value="BB"> Depósito em conta BB</label>                
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            
                   <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            
            <tr>
            <td><strong id="contact_name-text">Pessoa de contato</strong>: </td>
            <td nowrap="nowrap"><input name="contact_name" type="text" class="bordaForm" id="contact_name" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="30">
            <input name="contact_gender" type="radio" value="Male" checked="checked"> 
            Masculino
            <input name="contact_gender" type="radio" value="Female"> 
            Feminino
            
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="address-text">Endereço</strong>: </td>
            <td><input name="address" type="text" class="bordaForm" id="address" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="50">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="city-text">Cidade</strong>:</td>
            <td><input name="city" type="text" class="bordaForm" id="city" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="30">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="state-text">Estado/Província</strong>: </td>
            <td><input name="state" type="text" class="bordaForm" id="state" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="30">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="zip_code-text">Código postal</strong>: </td>
            <td><input name="zip_code" type="text" class="bordaForm" id="zip_code" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="20">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="country-text">País</strong>:</td>
            <td><select name="country" id="country" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" class="bordaForm">
            <option value="" selected="selected">-- selecione --</option>
            <option value="Aden">Aden</option>
<option value="Afganistan">Afganistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua">Antigua</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Azores">Azores</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrein">Bahrein</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia">Bosnia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil" selected="">Brazil</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="British West Indies">British West Indies</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burma">Burma</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Colombia">Colombia</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Rep">Czech Rep</option>
<option value="Czechoslavakia">Czechoslavakia</option>
<option value="Denmark">Denmark</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Dutch West Indies">Dutch West Indies</option>
<option value="East Timore">East Timore</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="England">England</option>
<option value="Eq Guinea">Eq Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Faeroe Islands">Faeroe Islands</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Fiji Islands">Fiji Islands</option>
<option value="Finland">Finland</option>
<option value="Formosa">Formosa</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadloupe">Guadloupe</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle Of Man">Isle Of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kampuchea">Kampuchea</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kirabati">Kirabati</option>
<option value="Korea">Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Leeward Islands">Leeward Islands</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Lichtenstein">Lichtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxemborg">Luxemborg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Maderia Islands">Maderia Islands</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Martinique">Martinique</option>
<option value="Mauritius">Mauritius</option>
<option value="Mauritnia">Mauritnia</option>
<option value="Mayanmar">Mayanmar</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="N Korea">N Korea</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caladonia">New Caladonia</option>
<option value="New Guinea">New Guinea</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Northern Ireland">Northern Ireland</option>
<option value="Norway">Norway</option>
<option value="Oceania">Oceania</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Panama">Panama</option>
<option value="Paraguay">Paraguay</option>
<option value="Persian Guinea">Persian Guinea</option>
<option value="Persian Gulf">Persian Gulf</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcaran Island">Pitcaran Island</option>
<option value="Poland">Poland</option>
<option value="Polinésia Francesa">Polinésia Francesa</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Rhodesia">Rhodesia</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Samoa">Samoa</option>
<option value="San Cruz Island">San Cruz Island</option>
<option value="San Marin">San Marin</option>
<option value="Sao Tome e Principe">Sao Tome e Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Scotland">Scotland</option>
<option value="Scychells">Scychells</option>
<option value="Senegal">Senegal</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somolia">Somolia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Helen Islands">St. Helen Islands</option>
<option value="St. Lucia">St. Lucia</option>
<option value="St. Pierre-Miquelon">St. Pierre-Miquelon</option>
<option value="St. Vincent">St. Vincent</option>
<option value="Sudan">Sudan</option>
<option value="Surinam">Surinam</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Trucl Sta">Trucl Sta</option>
<option value="Tunisia">Tunisia</option>
<option value="Turk Islands">Turk Islands</option>
<option value="Turkey">Turkey</option>
<option value="Turks &amp; Caicos">Turks &amp; Caicos</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United States">United States</option>
<option value="Upper Volta">Upper Volta</option>
<option value="Uruguai">Uruguai</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanatu">Vanatu</option>
<option value="Vaticano">Vaticano</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wales">Wales</option>
<option value="West Indies">West Indies</option>
<option value="West Sahara">West Sahara</option>
<option value="West Samoa">West Samoa</option>
<option value="Winward Islands">Winward Islands</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
            </select>
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="fone-text">Fone</strong>:</td>
            <td><input name="fone" type="text" class="bordaForm" id="fone" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="20">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong>Fax</strong>:</td>
            <td><input name="fax" type="text" class="bordaForm" id="fax" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="20"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="email-text">E-mail</strong>:</td>
            <td><input name="email" type="text" class="bordaForm" id="email" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="50">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            
     
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong id="site_url-text">URL do website</strong>: </td>
            <td><input name="site_url" type="text" class="bordaForm" id="site_url" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="50">
            <img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong>Classificação da empresa/site</strong>: </td>
            <td><input name="type_company" type="text" class="bordaForm" id="type_company" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" size="30"></td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong>Acesso por dia esperado </strong>: </td>
            <td><select name="expected_volume" id="expected_volume" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" class="bordaForm">
             <option value="0" selected="">-- selecione --</option> 
             <option>0-50</option> <option>51-250</option> <option>251-500</option> 
             <option>501-1000</option> 
            <option>Over 1000</option></select>&nbsp;</td>
            </tr>
            <tr>
            <td colspan="2" nowrap="nowrap" height="3"></td>
            </tr>
            <tr>
            <td><strong>Como você ouviu falar de nós?</strong></td>
            <td><select id="how_about" name="how_about" onfocus="this.className='inputfocus';" onblur="this.className='bordaForm';" class="bordaForm">
            <option value="0" selected="">-- selecione --</option> <option>Affiliate 
                          Directory</option> <option>Current Affiliate</option> 
                          <option>E-Mail</option>  <option>Newspapper,Radio, 
                          Television</option> <option>Press Release</option> 
                          <option>Search Engine</option> <option>Surfing 
            the Web</option> <option>Other</option></select>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            </tbody></table>
            <div class="padding4"><strong>TERMOS E CONDIÇÕES</strong></div>
            <div id="lTerms">
            
<p align="JUSTIFY">
<b>Programa Afiliados - Termos e Condições</b></p>
<p align="JUSTIFY">
O
presente acordo contém os temos e condições
completos que se aplicam à sua participação como
Afiliado de Bella Entretenimento Ltda. (Bella da Semana) e o
estabelecimento de links de seu site para o nosso, localizado em
"Belladasemana.com.br". Ao submeter um formulário
candidatando-se ao Programa, você confirma ter lido o presente
instrumento e estar submetido a seus termos e condições.</p>
<p align="JUSTIFY">
Condições:</p>
<p align="JUSTIFY">
<u><b>1.
Submissão e adesão ao Programa de Afiliados de Bella da
Semana</b></u></p>
<p align="JUSTIFY">
Para
tornar-se um Afiliado Bella da Semana, você deve submeter um
formulário preenchido a nossa apreciação. Nós
avaliaremos sua candidatura e o notificaremos a respeito de sua
aceitação ou rejeição em tempo hábil.
Nós nos reservamos o direito de rejeitar sua candidatura caso
determinemos (por nossa própria discrição) que
seu site não seja desejável como afiliado. Sites
indesejáveis incluem, mas não se limitam a, sites que
promovam violência, discriminação, atividades
ilegais, tenham nome que se pareça com o nome "Bella"
ou de qualquer maneira viole direitos de propriedade intelectual ou
de patentes.&nbsp;</p>
<p align="JUSTIFY">
Caso
rejeitemos sua candidatura, você pode tentar novamente quando
quiser, num futuro próximo. Ademais, nós nos reservamos
o direito de terminar este Acordo caso determinemos que seu site ou o
uso de qualquer referência seja inapropriado ou seja de
qualquer maneira impróprio para o Programa de Afiliados de
Bella.&nbsp;&nbsp;</p>
<p><u><b>2.
Promoção&nbsp;</b></u><br><br><br>
</p>
<p align="JUSTIFY">
A
chave para operar um Afiliado de sucesso é estabelecer link
gráficos e textuais proeminentes (cada um desses links às
vezes referido aqui como “links” ou individualmente como
“link”), de seu site para o nosso site em
www.belladasemana.com.br . Os links servirão para identificar
seu site como um membro de nosso Programa de Afiliados e estabelecerá
um link de seu site para o nosso. Nós disponibilizaremos para
você um ou mais do seguinte tipo de links:</p>
<ul>
    <li><p align="JUSTIFY">
    Link
    para belladasemana.com.br: você pode colocar um link geral em
    seu site para a nossa homepage em www.belladasemana.com.br. Nós
    fornecemos guidelines e a arte gráfica para linkar seu site
    ao nosso, incluindo banners e buttons.</p>
    </li><li><p align="JUSTIFY">
    Você
    pode escolher de 5 a 6 fotos da sessão aberta para promover o
    conteúdo Bella da Semana em seu Site.</p>
    </li><li><p align="JUSTIFY">
    Você
    pode também ter vídeo teasers Bella, mediante pedido
    ao seu contato no site. &nbsp;&nbsp;</p>
</li></ul>
<p align="JUSTIFY">
Ao
utilizar os links, você concorda em cooperar completamente
conosco a fim de estabelecer e manter tais links. Você também
concorda em exibir em seu site tais elementos gráficos e
textuais (indicando um link) fornecidos por nós e você
substituirá tais imagens por qualquer outra fornecida pelo
Bella de tempos e tempos durante a duração deste.<br>Você
não poderá, a qualquer tempo, exibir ou divulgar
produtos do Bella, de qualquer maneira ou em qualquer meio de
comunicação, sem identificá-los como
pertencentes ao Bella.<br>Você não poderá, a
qualquer tempo, descrever seu site como o “oficial”,
“exclusivo”, “preferido”, ou qualquer termo
semelhante, de Bella; nem criar um design que seja tão similar
ao de Bella, criando qualquer tipo de confusão, incerteza ou
mal entendido.&nbsp;<br>Você não poderá, a
qualquer tempo, alegar propriedade sobre qualquer produto ou marca
pertencente ao Bella ou renomeá-los de qualquer maneira.</p>
<p align="JUSTIFY">
O
uso de correspondência não solicitada ou spam com a
finalidade de promoção de Bella da Semana é
estritamente proibido. Se você se utilizar de spam para
promover nossos serviços, será notificado de que não
é mais parte do nosso Programa e todas as comissões
pendentes serão retidas.</p>
<p align="JUSTIFY">
Todos
os Sites Afiliados devem exibir imagens gráficas ou textuais
proeminentemente em sessões relevantes de seu site. Todos os
links devem ser modificados e/ou expandidos de tempo em tempos
durante a participação no Programa. Cada link que
conecte usuários do seu site para a área pertinente&nbsp;
do nosso site não vai alterar de maneira alguma a aparência
ou funcionalidade de nosso site.<br>Nós seremos responsáveis
pelo fornecimento de links de seu site para o nosso. Nós
seremos os únicos responsáveis pelo processamento de
cada assinatura seguindo um links especial de seu site, rastreando o
volume de assinaturas geradas através de seu link e pelo
fornecimento de informações a respeito de estatísticas
de assinaturas. Nós seremos responsáveis por todo o
processo de assinatura, incluindo pagamentos, cancelamentos e
serviços relacionados ao cliente.</p>
<p align="JUSTIFY">
<u><b>3.
Conteúdo Customizado</b></u></p>
<p align="JUSTIFY">
"Conteúdo
Customizado" significa todo o conteúdo textual, pictórico
e/ou gráfico criado por ou em nome do representante afiliado,
descrevendo ou referindo-se aos produtos Bella da Semana e
autorizados por escrito pelo Bella da Semana.</p>
<p align="JUSTIFY">
Antes
do Afiliado usar qualquer conteúdo customizado, deve fornecer
amostras em formato eletrônico deste conteúdo ao Bella
da Semana ao mesmo tempo que submeter um pedido de autorização
por escrito. Bella da Semana reserva-se o direito de negar o
consentimento de uso a sua própria discrição por
qualquer eventual razão. Se a Bella da Semana não
aprovar o conteúdo customizado por escrito em 10 (dez) dias
úteis depois da submissão do pedido, este deve ser
considerado rejeitado. O afiliado pode submeter pedidos revisados
para aprovação depois de tê-los rejeitados por
Bella da Semana. O Bella da Semana pode rever seu posicionamento e
aprovar ou rejeitar submissões a qualquer tempo sem
necessidade de justificar-se. Você concorda em não usar
o conteúdo Customizado de outros Afiliados ou parceiros de
Bella da Semana sem sua respectiva aprovação por
escrito, além da aprovação de Bella da Semana.&nbsp;</p>
<p align="JUSTIFY">
<u><b>4.
Outras Oportunidades e Responsabilidades dos Sites Afiliados</b></u></p>
<ul>
    <li><p align="JUSTIFY">
    Exibição
    Proeminente de Links: se você garante e concorda em participar
    de nosso Programa de Afiliados, você deve exibir Links,
    fornecidos pelo Bella, pelo seu site – de acordo com o que
    achar conveniente e com nossa aprovação.</p>
    </li><li><p align="JUSTIFY">
    Concursos
    e promoções: Bella irá, de tempos em tempos,
    fornecer material promocional para seus usuários, membros ou
    visitantes. Nós o notificaremos com antecedência para
    que possa fazer as adequações necessárias.
    Bella da semana também faz promoções próprias
    periódicas. Será considerada quebra deste acordo
    utilizar-se de qualquer promoção, material promocional
    ou código promocional que não seja explicitamente
    autorizada por Bella da Semana para o Programa de Afiliados e nós
    nos reservamos o direito de reter ou desautorizar pagamentos por
    violações diante disto.</p>
    </li><li><p align="JUSTIFY">
    Conformidade
    com o Acordo: o Bella da Semana tem o direito, de acordo com nossa
    própria discrição, de monitorar qualquer site
    Afiliado e, de tempos em tempos, determinar se o referido site está
    em conformidade com os termos deste acordo. Se, a qualquer tempo, o
    seu site afiliado não estiver em conformidade com os termos
    deste acordo, o Bella da Semana se reserva o direito de terminar sua
    participação no Programa, cancelando o contrato
    imediatamente. &nbsp;</p>
</li></ul>
<p align="JUSTIFY">
<u><b>5.
Propaganda Predatória</b></u></p>
<p align="JUSTIFY"><a name="_GoBack"></a>
Propaganda
predatória é definida como qualquer método que
crie ou sobreponha links ou banners em sites, janelas de spawns ou
qualquer método inventado para gerar tráfego de um site
sem a permissão expressa e por escrito do dono do referido
site.</p>
<p align="JUSTIFY">
Bella
da semana concorda em não usar métodos de propaganda
predatória desenhados para gerar tráfego que não
tenham sido contratados para a promoção online de
nossos produtos, serviços e Programa de afiliados.</p>
<p align="JUSTIFY">
Os
Afiliados concordam em não usar qualquer método de
propaganda predatória na promoção de produtos
Bella da Semana ou de seu Programa de Afiliados.</p>
<p align="JUSTIFY">
Exemplos
incluem, mas não se limitam as, keyword parsing browser
plug-ins como TOText e Surf+, tecnologia de substituição
de banner como Gator e tecnologia de browser spawning que não
seja dependente do site.</p>
<p align="JUSTIFY">
Participação
em programas de propaganda predatória causarão o
imediato desligamento do afiliado de nosso Programa e quaisquer
comissões não pagas serão retidas,
desautorizadas e/ou extornadas.</p>
<p align="JUSTIFY">
<u><b>6.
Colocação em Mecanismos de Busca</b></u></p>
<p align="JUSTIFY">
Bella
da Semana reconhece a necessidade de Afiliados em promover o Programa
de Afiliados através de mecanismos de busca. Contudo, Bella da
Semana se reserva o direito exclusivo de divulgação de
nossas marcas em qualquer pay-for-placement e em toda e qualquer
mecanismo de busca. As marcas incluem Bella Club, bellaclub.com,
bellaclub.co.uk, Bella da Semana, belladasemana.com.br,
belladasemana.com.com.pt, Bella Entretenimento, Bella Entertainment e
qualquer outra variação de nossos nomes. Além
disso, você não pode alegar ser o próprio Bella
da Semana ou seu representante em qualquer mecanismo de busca,
pay-for placement ou não. Violações serão
causa para a terminação imediata do Acordo de Afiliado
e quaisquer comissões não pagas serão retidas,
desautorizadas e/ou estornadas.&nbsp; &nbsp;</p>
<p align="JUSTIFY">
<u><b>7.
Relação Corporativa</b></u></p>
<p align="JUSTIFY">
Você
concorda que sua relação de Afiliado com Bella da
Semana não será utilizada como uma relação
corporativa de qualquer tipo. A qualquer tempo, sua relação
conosco será a de Afiliado como se é comumente definido
pelo mercado. Se, a qualquer tempo, o Bella da Semana descobrir que
você vem usando sua relação de afiliado para
qualquer outro propósito que não o de afiliado, sua
relação conosco será imediatamente terminada e
as comissões obtidas através destas transações
serão imediatamente retidas, desautorizadas ou estornadas. &nbsp;&nbsp;</p>
<p align="JUSTIFY">
<u><b>8.
Determinação de Comissão</b></u></p>
<p align="JUSTIFY">
O
preço da assinatura ao Bella da Semana variará de
acordo com o número de meses escolhido pelo cliente. Apenas
assinaturas confirmadas e para as quais nós tenhamos recolhido
os pagamentos darão direito a comissão. 
</p>
<p align="JUSTIFY">
Sujeitas
à Sessão 9(b) deste, taxas de Comissão serão
de (i) cinquenta por cento (50%) por assinatura de usuários de
seu site que acessem belladasemana.com utilizando o link provido por
Bella da Semana, durante o primeiro ano de permanência do
usuário no site, excluídos os montantes recolhidos por
nós por taxas, impostos e cobranças similares,
montantes devidos de fraude em cartão de crédito e mau
débito e créditos por pagamentos suspensos. Comissões
serão suspensas ou estornadas em caso de fraude de cartão
de crédito, qualquer outro tipo de fraude, mau débito,
crédito por pagamento suspenso ou violação deste
Acordo. &nbsp;&nbsp;</p>
<p align="JUSTIFY">
<u><b>9.
Pagamento de Comissões</b></u></p>
<p align="JUSTIFY">
Você
receberá comissões baseado no número de
assinaturas recebido por nós provenientes de seu site da forma
a seguir:<br>50%
do valor por assinaturas contratadas por seus usuários
(descontadas as taxas citadas na cláusula 8) através de
link fornecido por Bella da Semana, durante o primeiro ano de
permanência do usuário no site. Os pagamentos são
efetuados até o 15<sup>o</sup>
dia do mês subsequente ao mês sendo pago, via Pagseguro.</p>
<ol type="a">
    <li><p align="JUSTIFY">
    Sujeito
    à cláusula (b) abaixo, baseado no número de
    assinaturas recebidas por nós em conexão com os
    produtos comprados por seus usuários através de link
    provido por Bella da Semana, nós mandaremos a comissão
    correspondente, deduzidas de quaisquer taxas exigidas por lei.
    Diferentemente de outros Programas, você receberá as
    comissões aplicáveis de todas as novas assinaturas
    provenientes do link colocado em seu site fornecido por Bella da
    Semana pelo primeiro ano de permanência do usuário.</p>
</li></ol>
<ol type="a" start="2">
    <li><p align="JUSTIFY">
    Se
    durante o primeiro mês de vigência deste acordo ou
    durante qualquer mês subsequente ao pagamento de comissões
    a você, suas comissões não excedam o montante de
    R$ 100,00 (Cem Reais) então você não receberá
    as referidas comissões durante o referido mês. Assim,
    você receberá comissões ao final do mês
    durante o qual suas comissões agregadas nos sucessivos
    períodos excedam o valor de R$ 100,00 (Cem Reais).</p>
</li></ol>
<p align="JUSTIFY">
<u><b>10.
Suas responsabilidades</b></u></p>
<p align="JUSTIFY">
Você
é responsável por assegurar que as descrições
e artigos em seu site estejam de acordo com as leis internacionais de
direitos autorais e outras leis. Você deve ter permissão
expressa para usar material de outrem (caso use) ou autorização
expressa para utilizar qualquer tipo de material. O Bella da Semana
não será solidariamente responsável por
quaisquer violações desta natureza.</p>
<p align="JUSTIFY">
<u><b>11.
Políticas e Preços</b></u></p>
<p align="JUSTIFY">
Clientes
que assinem Bella da Semana através do Programa de Afiliados
Bella da Semana serão clientes Bella Entretenimento como
qualquer outro. Conseqüentemente, todas as regras, políticas
e procedimentos operacionais referentes a pedidos do consumidor,
serviços ao consumidor ou vendas se aplicam igualmente a todos
clientes. Nós podemos modificar nossas políticas e
procedimentos operacionais a qualquer tempo, de acordo com nossa
discrição. Por exemplo, nós determinaremos os
preços dos produtos Bella da Semana de acordo com nossa
própria política de preços e estes podem variar
de tempos e tempos. Por esta razão, você não deve
incluir informações sobre preço regularmente,
exceto em casos específicos - e temporários - de
promoção.</p>
<p align="JUSTIFY">
<u><b>12.
Publicidade</b></u></p>
<p align="JUSTIFY">
Você
não deve criar, publicar, distribuir ou permitir qualquer
material escrito que faça referência a Bella da Semana
sem antes submeter tal material a aprovação por
consentimento escrito de Bella da Semana, que nós podemos ou
não fornecer, de acordo com nossos próprios critérios.</p>
<p align="JUSTIFY">
<u><b>13.
Direito de Propriedade Intelectual</b></u></p>
<p align="JUSTIFY">
Licenças
e usos de Logos e Marcas Bella:<br>Nós garantimos a você
o direito não-exclusivo, intransferível e revogável
a (i) acessar o site Bella da Semana através dos links de
acordo com os termos deste Acordo e (ii) unicamente em relação
a estes links e sob as condições estabelecidas aqui,
usar nossas logos, nomes comerciais, marcas e qualquer outra material
identificador que se relacione a Bella da Semana (aqui denominado
coletivamente como “material licenciado”), para o
exclusivo propósito de venda de produtos Bella da Semana em
seu site. Você não pode alterar, modificar ou mudar os
materiais licenciados de maneira alguma sem o consentimento prévio
e expresso de Bella. O uso de tais materiais somente é
permitido enquanto durar sua permanência no Programa de
Afiliados Bella da Semana.</p>
<ol type="a">
    <li><p align="JUSTIFY">
    Você
    não deverá fazer uso específico de qualquer
    material licenciado para outros propósitos que não a
    venda de produtos Bella da Semana em seu site, sem antes submeter
    uma amostra para aprovação e obter prévio e
    escrito consentimento. Nós nos reservamos o direito sobre
    referidos materiais e quaisquer outros direitos de propriedade.
    Reservamo-nos também o direito de revogar sua licença
    a qualquer tempo.</p>
    </li><li><p align="JUSTIFY">
    Você
    nos assegura o direito não-exclusivo de utilizar seus nomes,
    títulos e logos para fins promocionais, de marketing,
    promoção ou publicidade de qualquer forma –
    sabendo-se que o Bella da Semana não tem a obrigação
    de fazê-lo sob qualquer circunstância. O direito de
    licença expira juntamente com a terminação
    deste Acordo.</p>
    </li><li><p align="JUSTIFY">
    Você
    também concorda e entende plenamente as seguintes regras para
    uso das marcas Bella:&nbsp;&nbsp;</p>
    <ol type="i">
        <li><p align="JUSTIFY">
        Você
        pode usar as marcas apenas com autorização de Bella
        da Semana.</p>
        </li><li><p align="JUSTIFY">
        Você
        não pode alterar as marcas de maneira alguma. Por exemplo,
        você não pode modificar a proporção, cor
        ou fonte das marcas e logos.</p>
        </li><li><p align="JUSTIFY">
        Você
        não pode exibir as marcas de maneira que sugira patrocínio,
        endosso ou qualquer tipo de envolvimento de Bella da Semana que não
        seja parte do Programa de afiliados.</p>
        </li><li><p align="JUSTIFY">
        Você
        não é autorizado a utilizar as Marcas para divulgar
        Bella da Semana, qualquer de seus produtos ou serviços e
        ainda outros afiliados de modo pejorativo ou que os diminua de
        qualquer maneira, prejudicando a imagem de qualquer dos
        supracitados.</p>
        </li><li><p align="JUSTIFY">
        As
        marcas devem aparecer sós, com espaço razoável
        (pelo menos a altura da Marca) entre elementos gráficos e
        textuais.</p>
        </li><li><p align="JUSTIFY">
        Você
        reconhece que todos os direitos sobre as Marcas são de
        propriedade exclusiva de Bella e qualquer benefício delas
        proveniente será de Bella da Semana.&nbsp;&nbsp;&nbsp;</p>
    </li></ol>
</li></ol>
<p align="JUSTIFY">
<u><b>14.
Obrigações Referentes a Seu Site</b></u></p>
<p align="JUSTIFY">
Você
será o único responsável pelo desenvolvimento,
operação e manutenção de seu site e por
todo e qualquer material que apareça ali. Tais
responsabilidades incluem, mas não se limitam a, operações
técnicas em seu site e todo o equipamento relacionado; criação
de gifs, descrições e referências em seu site que
estejam ligadas ao nosso; correção e propriedade de
materiais postados em seu site – incluindo, mas não
limitado aos materiais relacionados direta ou indiretamente com Bella
da Semana); assegurar que materiais postados em seu site não
violem ou infrinjam nenhum direito de terceiro e não seja de
maneira alguma ilegal.</p>
<p align="JUSTIFY">
A
Bella da Semana se isenta de toda e qualquer responsabilidade a
respeito de tais ações. Você garantirá a
proteção de Bella contra quaisquer tipos de ações
de danos ou indenizatórias – (incluindo, mas não
se limitando a custos advocatícios) relacionados ao
desenvolvimento, operação, manutenção e
conteúdos de seu site.&nbsp;</p>
<p align="JUSTIFY">
<u><b>15.
Termo do Acordo</b></u></p>
<p align="JUSTIFY">
O
termo deste Acordo terá início mediante o aceite da sua
participação no Programa de Afiliados por Bella da
Semana e findará quando qualquer uma das partes manifeste sua
vontade em fazê-lo. Tanto o Afiliado quanto o Bella da Semana
podem terminar o Acordo a qualquer tempo, independente de causa ou
justificativa, a partir do momento que notifique a outra parte por
escrito. O afiliado só tem direito às comissões
de vendas durante o termo deste Acordo. Comissões sobre vendas
que ocorram durante o processo de rescisão apenas serão
pagas se os pedidos não forem cancelados. Nós nos
reservamos o direito de reter o último pagamento por um tempo
razoável para garantir que o montante correto seja pago de
acordo com os termos e condições deste Acordo.</p>
<p align="JUSTIFY">
<u><b>16.
Alterações</b></u></p>
<p align="JUSTIFY">
É
permitido a Bella da Semana que modifique quaisquer dos termos e
condições contidos neste Acordo, a qualquer tempo, sem
justificação. Você será notificado por
e-mail e uma nota sobre a mudança será colocada em
nosso site. Modificações podem incluir, mas não
estão limitadas à mudanças no escopo de
disponibilidade de comissões, dia de recebimento de comissões,
procedimentos de pagamento e regras sobre o Programa de afiliados de
Bella da Semana. Se qualquer modificação lhe for
inaceitável, seu único e qualquer recurso é
terminar o presente Acordo. Sua participação continuada
no Programa após postarmos avisos de modificação
constitui sua aceitação tácita quanto às
referidas mudanças.</p>
<p align="JUSTIFY">
<u><b>17.
Relação entre as Partes</b></u></p>
<p align="JUSTIFY">
O
afiliado e Bella da Semana são partes independentes e nada
neste acordo cria nenhum tipo de parceria, joint venture, agência,
franquia, representação de vendas ou vínculo
empregatício entre as partes. O afiliado não tem
autoridade para fazer ou aceitar oferta alguma em nome de Bella da
Semana.</p>
<p align="JUSTIFY">
<u><b>18.
Representação e Garantias</b></u></p>
<p align="JUSTIFY">
Você
representa e garante o seguinte:</p>
<ul>
    <li><p align="JUSTIFY">
    Este
    Acordo foi devida e validamente executado e entregue por você
    e constitui sua obrigação legal e válida de
    acordo com estes termos;</p>
    </li><li><p align="JUSTIFY">
    A
    execução deste Acordo pela parte do Afiliado e a
    consumação das transações discutidas
    neste, independente de notificação ou tempo entrem em
    conflito com (i) qualquer legislação ou regulamentação
    a que o Afiliado esteja sujeito, (ii) qualquer ordem, sentença
    ou decreto aplicável ao Afiliado ou a seus bens ou
    propriedades, (iii) qualquer legislação ou certificado
    de incorporação ou (iv) qualquer acordo ou outro
    instrumento a que esteja vinculado o Afiliado ou qualquer um de seus
    bens.</p>
    </li><li><p align="JUSTIFY">
    Você
    é o único e exclusivo detentor de suas marcas e tem o
    direito de nos conceder a licença de uso como estabelecida
    neste Acordo e tal licença não&nbsp; (i) quebra,
    conflita com ou constitui falta perante qualquer outro acordo ou
    instrumento aplicável a você, seus bens ou propriedades
    ou (ii) infringe qualquer marca, nome, serviço, direito ou
    outra propriedade de qualquer outra pessoa, empresa ou entidade.&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;</p>
</li></ul>
<p align="JUSTIFY">
<u><b>19.
Confidencialidade.</b></u></p>
<p align="JUSTIFY">
Exceto
pelo já mencionado neste Acordo ou pelo consentimento escrito
da outra parte neste envolvida, cada uma das partes concorda que toda
a informação, incluindo os termos do acordo,
informações sobre o negócio ou financeira, lista
de clientes, informações sobre preços ou vendas
de qualquer uma das partes devem permanecer estritamente
confidenciais e sigilosas e não devem ser utilizadas, direta
ou indiretamente, por nenhuma das partes para propósitos de
seus negócios ou qualquer outro propósito exceto e
somente até a extensão em que a informação
seja de conhecimento geral ou disponível para o público
através de uma fonte ou fontes que não a outra parte ou
seus afiliados.</p>
<p align="JUSTIFY">
<u><b>20.
Limitação de Responsabilidade</b></u></p>
<p align="JUSTIFY">
O
BELLA DA SEMANA NÃO SERÁ RESPONSABILIZADO POR DANOS
INDIRETOS, ESPECIAIS OU CONSEQÜENCIAIS OU QUALQUER PERDA OU
DIMINUIÇÃO DE RECEITA, LUCROS OU DADOS EM CONEXÃO
COM ESTE ACORDO OU O PROGRAMA DE AFILIADOS DO BELLA, AINDA QUE
SEJAMOS AVISADOS DA POSSIBILIDADE DE DANO. ADEMAIS, A
RESPONSABILIDADE AGREGADA RELACIONADA A ESTE ACORDO E O PROGRAMA DE
AFILIADOS DO BELLA NÃO EXCEDERÁ O MONTANTE DE COMISSÕES
PAGAS AO AFILIADO AO LONGO DO TERMO.</p>
<p align="JUSTIFY">
<u><b>21.
Investigação Independente</b></u></p>
<p align="JUSTIFY">
O
AFILIADO RECONHECE TER LIDO TODO O CONTEÚDO DESTE ACORDO E
CONCORDA COM TODOS OS SEUS TERMOS E CONDIÇÕES. O
AFILIADO AVALIOU INDEPENDENTEMENTE O DESEJO DE PARTICIPAR DO PROGRAMA
DE AFILIADOS DO BELLA DA SEMANA E NÃO DEPENDE DE NENHUMA
REPRESENTAÇÃO, GARANTIA OU DECLARAÇÃO
EXTERNA A ESTE ACORDO. ESTE ACORDO COMPREENDE TODO O ACORDO ENTRE E
ENTENDIMENTO ENTRE AS PARTES RELACIONADAS AO ASSUNTO AQUI DISCORRIDO
E REÚNE TODOS OS ACORDOS, DISCUSSÕES E ENTENDIMENTOS
PRÉVIOS A ESTE.</p>
<p align="JUSTIFY">
<u><b>22.
Foro</b></u></p>
<p align="JUSTIFY">
Este
Acordo está submetido à legislação
brasileira e, mais especificamente, às leis do Estado de Santa
Catarina, sem quaisquer referências a outras leis ou foro.
Qualquer ação relacionada a este Acordo deve ser
trazida às cortes locais de Florianópolis, Santa
Catarina, e o afiliado consente a jurisdição de tais
leis e cortes.</p>
<p align="JUSTIFY">
<u><b>23.
Notificações</b></u></p>
<p align="JUSTIFY">
Notificações
são consideradas válidas quando enviadas de forma
escrita para endereço postal ou eletrônico preenchidos
no formulário ou se colocados em nosso site. Notificações
ao Bella da semana serão consideradas se endereçadas ao
endereço postal R. Jerônimo Coelho, 383 – 506 –
Centro – Florianópolis – SC – 88025-000, aos
cuidados ou através da página de contato do site.</p>
<p align="JUSTIFY">
<u><b>24.
Resolução de Disputas</b></u></p>
<p align="JUSTIFY">
As
partes tentarão dirimir de boa fé através de
negociações, quaisquer disputas ou controvérsias
que emerjam deste Acordo. Caso a disputa não seja resolvida
pelas cortes de justiça em Florianópolis, Santa
Catarina.</p>            </div>
            <div class="padding4"><strong>
            <input name="accep_terms" type="radio" value="1" onclick="afl_terms_accepted=1;">
            Eu aceito &nbsp; &nbsp; 
            <input name="accep_terms" type="radio" value="0" onclick="afl_terms_accepted=0;"> 
            Eu não aceito </strong> &nbsp; <em><img src="../storage/imagens/bullet_bella.gif" width="15" height="18" align="middle"></em></div>
            
             <style> #recaptcha_table { width:478px; } </style>
    
             <div class="padding4"> 
            <div class="g-recaptcha" data-sitekey="6Ld8ZxYTAAAAAM1R1jmecEw-DDLnRqd_aK3-T0Zt"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6Ld8ZxYTAAAAAM1R1jmecEw-DDLnRqd_aK3-T0Zt&amp;co=aHR0cHM6Ly93d3cuYmVsbGFkYXNlbWFuYS5jb20uYnI6NDQz&amp;hl=en&amp;v=r20170223111436&amp;size=normal&amp;cb=4ope8hjbzy8m" title="recaptcha widget" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div></div>
              
            
            <div id="lBTafl"><button class="enviar" onclick="aflFormNext();">Enviar</button></div>
            
            <div id="lAguardeafl" style="display:none">
            <p align="center" class="titulo"><strong>Aguarde ! Enviando... </strong></p>
            </div>
            <div><em><img src="../storage/imagens/bullet_bella.gif" width="15" height="18" alt="bullet" align="middle"> campos requeridos</em></div>
            <p>&nbsp;</p>
            </form></div>
            <div id="lAfEnviado" style="display:none">
            <p>&nbsp;</p>
            <p align="center" class="titulo"><b> Seu cadastro foi enviado com sucesso.</b></p>
            <p align="center" class="titulo"><strong>Nossa equipe em breve entrará em contato.</strong></p> 
            <p></p>
            </div>
            
            <div id="lAfJS" style="display:none"></div>        
        </div></div>
        <!--endform-->
        
        <!--startfaq-->
        <div id="div-affiliate-faq" style="display: none;">
            <div style="padding:20px 40px;min-height:500px">
            <ul>
            <li onclick="$('lfaq1').toggle();" class="hand"><strong>O que é um Afiliado?</strong></li>
            </ul>
            <blockquote id="lfaq1" style="display:none">
            <p>Nosso <strong>Programa de Afiliados</strong> 
                permite que você coloque um link do seu website para o nosso. A cada vez que um usuário clica no link e assina o Bella da Semana, você recebe uma comissão de 50% do valor da assinatura e das renovações, durante 12 meses. 
<br><br>Fica bem fácil de obter ganhos rápidos e sem custos, incrementando o lucro de seu site. </p>
            <p>&nbsp;</p></blockquote>
            <ul>
            <li onclick="$('lfaq2').toggle();" class="hand"><strong>Por que eu deveria me cadastrar?</strong></li>
            </ul>
            <blockquote id="lfaq2" style="display:none">
            <p> Nós permitimos que você tenha receitas adicionais para o seu site com mínimo esforço. Nós cuidamos de todas as ´complicações´: processar as assinaturas, contratos e atendimento ao cliente. Tudo o que você tem a fazer é colocar nosso banner no seu site - como você provavelmente já faz - criando uma nova fonte de renda a mais. </p>
            <p>&nbsp;</p></blockquote>
            <ul>
            <li onclick="$('lfaq3').toggle();" class="hand"><strong>De quanto é a minha comissão?</strong></li>
            </ul>
            <blockquote id="lfaq3" style="display:none">
            <p> Nós temos a melhor comissão do mercado! Como parceiro Bella da Semana, você recebe 50% do valor de cada nova assinatura gerada pelo seu site, que pode ser de um, três, seis ou 12 meses. Além disso, diferente de outros Programas de Afiliados, você é pago mensalmente.
            </p>
            <p>&nbsp;</p></blockquote>
            <ul>
            <li onclick="$('lfaq4').toggle();" class="hand"><strong>Como posso ter controle sobre quanto em comissões estou ganhando?</strong></li>
            </ul>
            <blockquote id="lfaq4" style="display:none">
            <p>Nós desenvolvemos um sistema para lhe garantir toda a segurança possível. Através de um site especial localizado em www.belladasemana.com.br/afiliado você poderá rastrear o desempenho de seu link, incluindo: impressões, cliques, taxa de conversão, produtos mais vendidos, assinaturas e comissões. Tudo atualizado diariamente!</p>
            <p>&nbsp;</p>
            </blockquote>
            <ul>
            <li onclick="$('lfaq5').toggle();" class="hand"><strong>Meu website está fora Brasil, ainda posso participar?</strong></li>
            </ul>
            <blockquote id="lfaq5" style="display:none">
            <p>Bella da Semana é um site internacional, assim como nosso Programa de Afiliados. Nós estamos perfeitamente preparados para afiliados estrangeiros.</p>
            <p>&nbsp;</p>
            </blockquote>
            <ul>
            <li onclick="$('lfaq6').toggle();" class="hand"><strong>Como é feito o pós venda?</strong></li>
            </ul>
            <blockquote id="lfaq6" style="display:none">
            <p> Todas as assinaturas são processadas pelo Bella da Semana e nós cuidamos de todo o pós venda e quaisquer assuntos sobre atendimento ao cliente - você não precisa se preocupar com nada.</p>
            <p>&nbsp;</p>
            </blockquote>        
        </div></div>  
        <!--endfaq-->
    
</div>
<div class="bbox-end bbox-end-line"> </div>
<script type="text/javascript" defer="defer">
BellaClub.guiasClickNew('li-g-1');
</script>    

    </div>     

</div>

@stop
