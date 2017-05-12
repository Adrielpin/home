<div id="dvoBoleto">
        
        <div class="pag-titulo" onclick="_clickOpcBoleto()">Boleto Bancário</div>

        <div style="display: none" id="div-opc-boleto" class="opc-container">
            
            <div>
                <label>
                <input type="radio" name="pay_with" id="pay_with5" value="Boleto" onclick="_clickOpcBoleto()">
                <img src="../storage/br/assine-boleto.png" alt="Boleto bancário" width="102" height="32" border="0" align="middle">
                </label>
            </div>
            
            <div class="info">
                <table class="cc" align="center">
                    <tbody><tr><td> <strong>CPF: </strong></td> 
                        <td><input name="boleto-cpf" type="text" id="boleto-cpf" size="20" maxlength="14" onkeypress="return a9.mascara_numero(event)">                </td>
                    </tr>
                </tbody></table>
            </div>

            <div class="info">Escolhendo esta opção, será aberta em nova janela o boleto bancário. <br>Imprima e pague o boleto em qualquer agência bancária até a data do vencimento.<br>
                Será cobrado o valor do plano de assinatura escolhido acrescido <br>do custo do boleto, no valor de R$ 2,40.                  </div>
                <div class="info">Seu acesso somente será liberado  após a compensação do pagamento,<br> que ocorrem em <strong class="red">1 dia útil após o pagamento</strong>.</div>
                
                  <div class="selo-ssl"><!-- Begin DigiCert site seal HTML and JavaScript -->
<div id="DigiCertClickIDeJ_YICf_3" data-language="en_US"><div id="DigiCertClickIDeJ_YICfSeal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default;"><img src="//seal.digicert.com/seals/cascade/?s=_eJ_YICf,13,s,www.belladasemana.com.br" alt="DigiCert Seal" tabindex="0" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer;"></div><span style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default; color: black;">
	<a href="http://www.digicert.com/ssl-certificate.htm" style="text-decoration: none; text-align: center; display: inline; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer; color: black;">SSL Certificate</a>
</span></div>
<script type="text/javascript">
var __dcid = __dcid || [];__dcid.push(["DigiCertClickIDeJ_YICf", "13", "s", "black", "_eJ_YICf"]);(function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
</script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script>
<!-- End DigiCert site seal HTML and JavaScript --></div>

                <button type="button" onclick="subscribeFast.send();">CONCLUIR COMPRA</button>
            
        </div>

    </div>