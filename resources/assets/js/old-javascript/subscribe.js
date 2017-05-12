/* BELLACLUB SSL SUBSCRIBE  */
var pagType = 0;
_clickOpcDbtBB = function() {
	pagType='BB'; $$('.msg-deb-bradesco').invoke('hide'); $$('.msg-deb-bb').invoke('show');
	__opcsPagHide(); $('msg-deb-ag','div-opc-deb').invoke('show');
};
_clickOpcDbtBradesco = function() {
	pagType='BRADESCO';$$('.msg-deb-bb').invoke('hide'); $$('.msg-deb-bradesco').invoke('show');
	__opcsPagHide(); $('msg-deb-ag','div-opc-deb').invoke('show');
};
_clickOpcDbtItau = function() {
    $('pay_with4').checked = "checked";
    pagType='ITAUDC'; $$('.msg-deb-bradesco').invoke('hide'); $$('.msg-deb-bb').invoke('show');
    $('msg-deb-ag2').show('show');
    __opcsPagHide(); $('div-opc-deb').show();
};
_clickOpcItauSL = function() { $('pay_with2').checked = "checked"; pagType='Itau'; __opcsPagHide(); $('div-opc-itau').show(); };
_clickOpcPagSeguroSL = function() { $('pay_with6').checked = "checked"; pagType='pagseguro'; __opcsPagHide(); $('div-opc-pagseguro').show(); };
_clickOpcBoleto = function() { $('pay_with5').checked = "checked"; pagType='Boleto';  __opcsPagHide(); $('div-opc-boleto').show();  };
_clickOpcCC = function(noSetCk) { if (noSetCk==1) { $('pay_with-cc').checked = "checked"; } pagType='CreditCard'; __opcsPagHide(); $('div-opc-cc').show();  };
__opcsPagHide = function() { $$('#form-subscribe-fast .opc-container').invoke('hide'); };
__buttonsDisable = function() {
    $$('#form-subscribe-fast input[type=submit]').each(function(button_){ $(button_).disable(); });
    document.body.style.cursor="wait";
};
__buttonsEnable = function() {
    $$('#form-subscribe-fast button').each(function(button_){ $(button_).enable(); });
    document.body.style.cursor="default";
};
_show_ccc_help = function() { 
    var oSpan  = $('spanHelpCCC').positionedOffset();
    $('div-help-ccc').setStyle({top:oSpan.top,left:oSpan.left});
    $('div-help-ccc').toggle();
};
mark_length = function(obj_id,l_) { document.getElementById(obj_id).attributes['maxlength'].value = l_; document.getElementById(obj_id).value=''; };

var a9 = new Object();
a9.msg = function(msg_,status_) {
    try {
        $('div-alert-msg').update(msg_); $('div-alert-box').show(); $('div-alert-box').scrollTo();
        
    } catch(e) {
        alert(msg_);
    }
};
a9.ajax = function(id_window,url_,param_,metodo_) {
	url_ = URL_http + url_;
	
	new Ajax.Updater(id_window, url_, 
	{
		method: 'get', parameters: param_,	evalScripts: true
	});	
};
a9.mascara_numero = function(e) {
	if (!e) {e = window.event;}var tecla_ = (e.keyCode ?  e.keyCode : e.which);
	if (tecla_==8 || tecla_==27 || (tecla_>34 && tecla_<41) || (tecla_>47 && tecla_<58)) {return true;}
	e.returnValue = false;return false;
};

subscribeFast = {};
subscribeFast.bbPopUpContinue = 0;
subscribeFast.initializeCad = function() {
    $('cad-nome').observe('blur', function(){subscribeFast.verifyCad('nome')});
    $('cad-sobrenome').observe('blur', function(){subscribeFast.verifyCad('sobrenome')});
    $('cad-email').observe('blur', function(){subscribeFast.verifyEmail()});
    $('cad-email-c').observe('blur', function(){subscribeFast.verifyCad('email-c')});
    $('cad-senha').observe('blur', function(){subscribeFast.verifyCad('senha')});
    $('cad-senha-c').observe('blur', function(){subscribeFast.verifyCad('senha-c')});
};
var tmpemailv=false; 
subscribeFast.verifyEmail = function() {
    if (subscribeFast.verifyCad('email')) {
     var email_ = $('cad-email').getValue();
     if (tmpemailv != email_) {
        tmpemailv = email_;
        BellaClub.getURL('div-ajax-subscribe', $('cad-email').serialize()+"&action=sdcadckmail" ,'POST');
    }
}
};

subscribeFast.verifyCad  = function(field_) {
    var return_ = true;

    switch (field_) {

        case 'nome':
        if (!$('cad-nome').present()) {
            $('alert-cad-nome').update(aErros['nome']).addClassName('campoRequerido');
            $('form-cad-fast').scrollTo();
            new Effect.Appear('alert-cad-nome');
            $('cad-nome').onkeypress = function() { $('alert-cad-nome').hide(); };
            return_ = false;
        }
        break;

        case 'sobrenome':
        if (!$('cad-sobrenome').present()) {
            $('form-cad-fast').scrollTo();
            $('alert-cad-sobrenome').update(aErros['sobrenome']).addClassName('campoRequerido');
            new Effect.Appear('alert-cad-sobrenome');
            $('cad-sobrenome').onkeypress = function() { $('alert-cad-sobrenome').hide();};
            return_ = false;
        }
        break;

        case 'email':
        if (!$('cad-email').present()) {
            $('form-cad-fast').scrollTo();
            $('alert-cad-email').update(aSubscribe['emailbella']).addClassName('campoRequerido');
            new Effect.Appear('alert-cad-email');
            $('cad-email').onkeypress = function() { $('alert-cad-email').hide();};
            return_ = false;
        }
        break;

        case 'email-c':
        if (!$('cad-email-c').present() || $('cad-email-c').getValue() != $('cad-email').getValue()) {
            $('form-cad-fast').scrollTo();
            $('alert-cad-email-c').update(aSubscribe['email2']).addClassName('campoRequerido');
            new Effect.Appear('alert-cad-email-c');
            $('cad-email-c').onkeypress = function() { $('alert-cad-email-c').hide();};
            return_ = false;
        }
        break;

        case 'senha':
        if (!$('cad-senha').present() || $('cad-senha').getValue().length<6) {
            $('form-cad-fast').scrollTo();
            $('alert-cad-senha').update(aSubscribe['senha_len']).addClassName('campoRequerido');
            new Effect.Appear('alert-cad-senha');
            $('cad-senha').onkeypress = function() { $('alert-cad-senha').hide();};
            return_ = false;
        }
        break;

        case 'senha-c':
        if (!$('cad-senha-c').present() || $('cad-senha-c').getValue() != $('cad-senha').getValue()) {
            $('form-cad-fast').scrollTo();
            $('alert-cad-senha-c').update('* Redigite corretamente a senha ').addClassName('campoRequerido');
            new Effect.Appear('alert-cad-senha-c');
            $('cad-senha-c').onkeypress = function() { $('alert-cad-senha-c').hide();};
            return_ = false;
        }
        break;
    }
    
    return return_;
};

subscribeFast.continue = function () {

    try {

        if (!subscribeFast.verifyCad('nome')) {return;}
        if (!subscribeFast.verifyCad('sobrenome')) {return;}
        if (!subscribeFast.verifyCad('email')) {return;}
        if (!subscribeFast.verifyCad('email-c')) {return;}
        if (!subscribeFast.verifyCad('senha')) {return;}
        if (!subscribeFast.verifyCad('senha-c')) {return;}
        if ($('cad-termos-1')) {
            if ($('cad-termos-1').getValue()==null) {
                $('div-assine-termos').scrollTo();
                $('alert-cad-termos').update(aSubscribe['termos']).addClassName('campoRequerido');
                new Effect.Appear('alert-cad-termos');$('cad-termos-1').activate();
                $('cad-termos-1').onclick = function() {new Effect.Fade('alert-cad-termos');};
                return;
            }
        }

        $('form-subscribe-fast').show();
    } 
    catch(e) { }
};

subscribeFast.send = function() {


    if (!pagPlan) {
      alert(aSubscribe['plano']);
      $('form-subscribe-fast').scrollTo();
      return;
  }
  if (pagType=="") {
      alert(aSubscribe['forma_pagamento']);
      $('form-subscribe-fast').scrollTo();
      return;
  }
  if (pagType=="CreditCard") {
      if ($('ccn').value=="") {
         alert(aSubscribe['credit_card_numero']);
         return;
     }
     if ($('sc').value=="") {
         alert(aSubscribe['credit_card_sc']);
         return;
     }
 } else if (pagType=="BB" || pagType=="BRADESCO" || pagType=="ITAUDC") {
  if ($('bb-cc').value=="") {alert("Preencha o numero da sua conta !");return;}
  if ($('bb-ccd').value=="") {alert("Preencha o digito da sua conta !");return;}
  if ($('bb-ag').value=="") {alert("Preencha o numero da agencia !");return;}
  if ($('bb-agd').value=="" && pagType!="ITAUDC") {alert("Preencha o digito da agencia !");return;}
  if ($('bb-t').value=="") {alert("Preencha o nome do titular da conta !");return;}
  if ($('bb-cpf').value=="") {alert("Preencha o CPF do titula da conta !");return;}

  if (pagType === "BB" && subscribeFast.bbPopUpContinue===0) {
    subscribeFast.BBpopupAviso();
    return;
}
if (pagType === "ITAUDC" && subscribeFast.bbPopUpContinue===0) {
    subscribeFast.ITAUpopupAviso();
    return;
}

} else if (pagType=="Boleto") {
    if ($('boleto-cpf').value=="") {alert("Preencha o seu CPF para emitir o boleto !");return;}
}

__buttonsDisable(); 
$('div-assine-aguarde').show();

BellaClub.getURL('div-ajax-subscribe', $('form-cad-fast').serialize()+"&"+$('form-subscribe-fast').serialize()+"&"+$('form-subscribe-plans').serialize() , 
    'POST', null, function() { subscribeFast.postFail( aSubscribe['erro_generico'] ); } );

subscribeFast.bbPopUpContinue = 0;
};
subscribeFast.postFail = function(msg_) {
    if (msg_) { a9.msg( msg_ ,'alert'); }
    $('div-assine-aguarde').hide();
    __buttonsEnable();
};
subscribeFast.BBpopupAviso = function() {    
    if (!$('div-popbb-aviso')) {
        $('div-ups').insert({after: '<div id="div-popbb-aviso" style="position:absolute;width:483px;height:526px;z-index:410;background-image:url(/layout/br/2015/popup-debito-bb.png)">'
            + '<a class="x" style="background:none !important" onclick="$(\'div-popbb-aviso\',\'div-alphabox\').invoke(\'hide\');"></a>'
            + '<a style="display: block; height: 40px; width: 245px; margin: 383px auto 0px;" onclick="subscribeFast.BBpopupClickContinue();"></a>'
            + '<a style="display: block; height: 40px; width: 245px; margin: 41px auto 0px;" onclick="$(\'div-popbb-aviso\',\'div-alphabox\').invoke(\'hide\');"></a>'
            + '</div>'});      
    }
    $('div-popbb-aviso').appear({duration:0.4});  
    BellaClub.showAlphaBox('div-popbb-aviso');
    Centralizar('div-popbb-aviso', isAM);    
};
subscribeFast.ITAUpopupClickContinue = function() { 
    $('div-popITAU-aviso','div-alphabox').invoke('hide');
    subscribeFast.bbPopUpContinue = 1; 
    subscribeFast.send(); 
};
subscribeFast.ITAUpopupAviso = function() {    
    if (!$('div-popITAU-aviso')) {
        $('div-ups').insert({after: '<div id="div-popITAU-aviso" style="position:absolute;width:659px;height:436px;z-index:410;background-image:url(/layout/br/2015/desktop/popup-itau-debito-automatico.png)">'
            + '<a class="x" style="background:none !important" onclick="$(\'div-popITAU-aviso\',\'div-alphabox\').invoke(\'hide\');"></a>'
            + '<a style="display: inline-block; height: 44px; width: 245px; margin: 144px 0 0 65px" onclick="subscribeFast.ITAUpopupClickContinue();"></a>'
            + '<a style="display: inline-block; height: 44px; width: 245px; margin: 144px 0 0 40px" onclick="$(\'div-popITAU-aviso\',\'div-alphabox\').invoke(\'hide\');"></a>'
            + '</div>'});      
    }
    $('div-popITAU-aviso').appear({duration:0.4});  
    BellaClub.showAlphaBox('div-popITAU-aviso');
    Centralizar('div-popITAU-aviso', isAM);    
};
subscribeFast.BBpopupClickContinue = function() { 
    $('div-popbb-aviso','div-alphabox').invoke('hide');
    subscribeFast.bbPopUpContinue = 1;
    subscribeFast.send(); 
};
