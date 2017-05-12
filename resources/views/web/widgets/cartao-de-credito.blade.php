
<div id="dvoCreditCard">

  <div class="pag-titulo" onclick="_clickOpcCC(1)">Cartão de Crédito</div>

  <div class="opc-container" id="div-opc-cc">

    <table cellpadding="0" cellspacing="0" align="center">

      <tbody>

        <tr>
          <td width="40" align="center" height="22" valign="top"> <label title="VISA"><input name="pay_with" type="radio" id="pay_with-cc" onclick="_clickOpcCC();mark_length('sc',3)" value="visa" checked="checked"></label></td>

          <td width="58" align="center" valign="top"><label title="MASTERCARD"><input name="pay_with" type="radio" id="pay_with-cc2" onclick="_clickOpcCC();mark_length('sc',3)" value="mastercard"></label></td>

          <td width="46" align="center" valign="top"><label title="AMEX"><input name="pay_with" type="radio" id="pay_with-cc3" onclick="_clickOpcCC();mark_length('sc',4)" value="amex"></label></td>

          <td width="44" align="center" valign="top"><label title="DINERS"><input name="pay_with" type="radio" id="pay_with-cc4" onclick="_clickOpcCC();mark_length('sc',3)" value="diners"></label></td>
          <td width="59" align="center" valign="top"><label title="ELO"><input name="pay_with" type="radio" id="pay_with-cc5" onclick="_clickOpcCC();mark_length('sc',3)" value="elo"></label></td>

          <td width="59" align="center" valign="top"><label title="HIPERCARD"><input name="pay_with" type="radio" id="pay_with-cc6" onclick="_clickOpcCC();mark_length('sc',3)" value="hipercard"></label></td>

        </tr>

        <tr>
          <td colspan="6">
            <img src="../storage/br/assine-cc-2.png" alt="VISA | MasterCard | Amex | Diners | ELO | HIPERCARD" width="304" height="26" border="0" align="middle" usemap="#MapCC">
            <map name="MapCC" id="MapCC">
              <area shape="rect" coords="52,2,93,24" href="javascript:;" onclick="$('pay_with-cc2').checked=true;_clickOpcCC();mark_length('sc',3)">
              <area shape="rect" coords="105,2,135,24" href="javascript:;" onclick="$('pay_with-cc3').checked=true;_clickOpcCC();mark_length('sc',4)">
              <area shape="rect" coords="150,1,182,25" href="javascript:;" onclick="$('pay_with-cc4').checked=true;_clickOpcCC();mark_length('sc',3)">
              <area shape="rect" coords="2,3,40,24" href="javascript:;" onclick="$('pay_with-cc').checked=true;_clickOpcCC();mark_length('sc',3)">
              <area shape="rect" coords="197,2,239,26" href="javascript:;" onclick="$('pay_with-cc5').checked=true;_clickOpcCC();mark_length('sc',3)">
              <area shape="rect" coords="245,2,302,26" href="javascript:;" onclick="$('pay_with-cc6').checked=true;_clickOpcCC();mark_length('sc',3)">
            </map>
          </td>
        </tr>

      </tbody>

    </table>

    <div class="info">
      Pague com cartão de crédito, é rápido e totalmente seguro.<br>Seu acesso é liberado <strong>imediatamente</strong> após o pagamento.<br>
      Para maior discrição,<br> 
      o débito aparecerá na fatura do seu cartão de crédito como BDS.</div>

      <table border="0" cellspacing="8" cellpadding="0" align="center" class="cc">
        <tbody>
          <tr>
            <td><strong>Nome do portador:</strong></td>
            <td><input name="chn" type="text" id="chn" size="25" maxlength="60"></td>
          </tr>

          <tr>
            <td><strong>Número do cartão:</strong></td>
            <td><input name="ccn" type="text" id="ccn" size="25" maxlength="20" onkeypress="return a9.mascara_numero(event)"></td>
          </tr>


          <tr>
            <td nowrap="nowrap"><strong>Validade mês / ano: </strong></td>
            <td>
              <select name="em" id="em">

                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

              </select>

              /

              <select name="ey" id="ey">

                @for ($i = date('Y'); $i <= date('Y')+10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor

              </select>

            </td>

          </tr>

          <tr>
            <td><strong>Código de segurança:</strong></td>
            <td><input name="sc" id="sc" type="text" size="4" maxlength="4" onkeypress="return a9.mascara_numero(event)"> 
              <span id="spanHelpCCC" onclick="_show_ccc_help()" onmouseover="_show_ccc_help()"></span>
              <div id="div-help-ccc" onclick="$(this).hide()" style="display: none"></div>
            </td>
          </tr>
        </tbody>

      </table>

      <div class="selo-ssl"><!-- Begin DigiCert site seal HTML and JavaScript -->
        <div id="DigiCertClickIDeJ_YICf_1" data-language="en_US"><div id="DigiCertClickIDeJ_YICfSeal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default;"><img src="//seal.digicert.com/seals/cascade/?s=_eJ_YICf,13,s,www.belladasemana.com.br" alt="DigiCert Seal" tabindex="0" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer;"></div><span style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: default; color: black;">
        <a href="http://www.digicert.com/ssl-certificate.htm" style="text-decoration: none; text-align: center; display: inline; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; clear: both; float: none; cursor: pointer; color: black;">SSL Certificate</a>
      </span></div>
      <script type="text/javascript">
        var __dcid = __dcid || [];__dcid.push(["DigiCertClickIDeJ_YICf", "13", "s", "black", "_eJ_YICf"]);(function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
      </script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script>
      <!-- End DigiCert site seal HTML and JavaScript -->
    </div>

    <button type="button" onclick="subscribeFast.send();"><span></span>CONCLUIR COMPRA</button>

  </div>
  
</div>

