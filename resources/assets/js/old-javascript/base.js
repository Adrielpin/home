/* BELLACLUB */
var BellaClub = new Object();
var pagType = 0;
var pageExtraTracker = false;
var pageExtraTracker2 = false;
var isAM=0; var iUpSf=1; 
BellaClub.getURL = function(obj_dom_id_, param_, metodo_, url_, hFF) {  
    if (URL_http == undefined) {
        URL_http = location.protocol+"//"+location.host;
    }
    if (!hFF) { hFF = Prototype.emptyFunction; }
    if (!$(obj_dom_id_)) { 
        try { console.log("JS: BellaClub.getURL -> obj_dom_id_ : '"+obj_dom_id_+"' nao encontrado no HTML."); } catch(e) {} 
    } 
    if (!param_) { try { console.log("JS: BellaClub.getURL -> param_ nao informado."); } catch(e) {} }            
    if (!metodo_) {metodo_="GET";}        
    if (url_ == null) {   url_ = URL_http + "/index.php"; }  
    
    new Ajax.Updater(obj_dom_id_, url_, {       
        method: metodo_,        
        parameters: param_,
        onFailure: hFF,
        evalScripts: true});
};

BellaClub.guiasClickNew = function(objId) {    
    try {        $$('div.guias li').each(function(obj_){$(obj_).removeClassName('on');});        
        $(objId).addClassName('on');    
    } catch(e) { }};

BellaClub.guiasClick = function(obj_id,pos_,total_,posClass) {    
    if (posClass==null) {posClass="";}    
    for (x_=1;x_<=total_;x_++) {            
        try {                    
            if ($(obj_id+x_)) {                            
                $(obj_id+x_).removeClassName('guiaOn'+posClass);                            
                $(obj_id+x_).addClassName('guiaOff'+posClass);                    }            
        } catch(e) { }    }    
    try {           
        $(obj_id + pos_).removeClassName('guiaOff' + posClass);          
        $(obj_id + pos_).addClassName('guiaOn' + posClass);   
    } catch(e) { }};

var tmpmenuf=false;var tmphtmlmenu = "";    


BellaClub.assayShow = function(div_) {     BellaClub.fixMenu('models'); };


BellaClub.showAlphaBox = function( hide_ , function_) {    
    if (!$('div-alphabox')) {         
        $('div-ups').insert({after: '<div id="div-alphabox"></div>'});    }
    $("div-alphabox").stopObserving("click");
    $("div-alphabox").style.width = (document.body.scrollWidth)+"px";   
    $("div-alphabox").style.height = (document.body.scrollHeight)+"px";    
    $("div-alphabox").setOpacity(0.6);   
    $("div-alphabox").show();   
    $("div-alphabox").observe("click", BellaClub.hideAlphaBox);
    if ( hide_ != null ) {        
        $("div-alphabox").observe("click", function() {$(hide_).hide();});    }    
    if (function_ != null) {
        $("div-alphabox").observe("click", function_ );
    }};
BellaClub.hideAlphaBox = function() { 
        $("div-alphabox").hide(); if (tmpTimeOutCentralizar) {window.clearTimeout(tmpTimeOutCentralizar);} 
};

var is18anos = false;

BellaClub.clickAviso18 = function() {    
    is18anos = true;    
    var exdate=new Date(); exdate.setDate(exdate.getDate() + 30);
    document.cookie = 'bellaLN18=1; path=/; expires='+exdate.toUTCString();
    try {        
        $('div-aviso18').fade();        
        $('div-alphabox').fade();
    } catch(e) {}
};
BellaClub.showAviso18 = function() {      
    if (!$('div-aviso18')) {               
        $('div-ups').insert({after: '<div id="div-aviso18" class="'+SUnitFolder+'"></div>'});      
        BellaClub.getURL('div-aviso18','action=htmlAviso18');       
        return;    
    }    
    BellaClub.showAlphaBox('div-aviso18', BellaClub.goHome );
    Centralizar('div-aviso18', isAM); 
    $('div-aviso18').appear({duration:0.5}); 
}; 
BellaClub.goHome = function() { location.href="/"; };
BellaClub.promptLogin = function(act_) {    
    document.body.style.cursor="default";    
    if ($('div-aviso18')) {  if ( $('div-aviso18').getStyle('display')!='none' ) { return; } }   
        
        if (!$('div-box-login')) {               
        $('div-ups').insert({after: '<div id="div-box-login" class="'+SUnitFolder+'"></div>'});      
        BellaClub.getURL('div-box-login','action=htmlLogin&postact='+act_);       return;    }    
        BellaClub.showAlphaBox('div-box-login');
        Centralizar('div-box-login', isAM);    
        $('div-box-login').appear({duration:0.5});  
        if (isAM==0) { $('fLogin').login.focus(); }
        if (act_ != null) { $('fLogin').action.value = act_; }
};                                
BellaClub.checkLogin = function(form_) {
    var msg_ = null;    
    var focus_ = null;
    if (form_==null) {form_="";}
    if ($('fLogin'+form_).pws.value=="") {
        msg_ = aErros['senha'];focus_="pws";
    }   
    if ($('fLogin'+form_).login.value=="") {
        msg_ = aErros['login'];focus_="login";
    }       
    if (msg_) {     
        alert(msg_);        
        $('fLogin'+form_)[focus_].focus();      
        return false;   
    }   
    document.body.style.cursor="wait";  
    BellaClub.getURL('div-login-act'+form_, $('fLogin'+form_).serialize(),'POST');  
    return false;
};
BellaClub.checkLogin2 = function(form_) {    
    var msg_ = null;    var focus_ = null;    if (form_==null) {form_="";}    
    if ($('fLogin'+form_).pws.value=="") {
        msg_ = aErros['senha'];focus_="pws";}    
    if ($('fLogin'+form_).login.value=="") {msg_ = aErros['login'];focus_="login";}    
    if (msg_) {            alert(msg_);            
        $('fLogin'+form_)[focus_].focus();            
        return false;    }    
    document.body.style.cursor="wait";    
    return true;};
                                
BellaClub.cadNews = function() {        
    if ($('input-email-news').value.length<2) {            
        alert(aErros['todos_campos']);            
        return false;    
    }       
    document.body.style.cursor="default";   
    if (!$('div-box-fnews')) {               
        $('div-ups').insert({after: '<div id="div-box-fnews" class="div-box-gnr"></div>'});           
    }
    BellaClub.getURL('div-box-fnews', "action=sdnews2&email="+$('input-email-news').getValue(),'POST');    
    return false;
};
BellaClub.showForgotPass = function() {    document.body.style.cursor="default";    if (!$('div-box-forgotpass')) {               $('div-ups').insert({after: '<div id="div-box-forgotpass" class="'+SUnitFolder+' div-box-gnr"></div>'});       BellaClub.getURL('div-box-forgotpass','action=forgotpass');       return;    }    BellaClub.showAlphaBox('div-box-forgotpass');    Centralizar('div-box-forgotpass');    $('div-box-forgotpass').show();};
                                
                                                                    

                                
                                var dmedia = {'effect_clock' : null,  'showned' : 1 , 'interval1' : null , 'interval2' : null};                                
                                BellaClub.dmedia_show = function(elem_n, onoff, noact_) {       
                                    if (onoff==0) {                                 
                                        if (noact_ != 1) {BellaClub.dmedia_start();}    
                                        else {$('a-tv-t-'+elem_n).removeClassName('tvon');} } 
                                    else {                         
                                        if (noact_ != 1) {BellaClub.dmedia_stop();}                                   
                                        if (dmedia.showned != elem_n) {                                               
                                            if (dmedia.showned > 0 ) {                     
                                                $('a-tv-t-'+ dmedia.showned).removeClassName('tvon');                    
                                                $('a-tv-'+ dmedia.showned ).hide();                }                
                                            var img_ = $$('#a-tv-'+elem_n+' img')[0];                
                                            img_.setOpacity(0.1);                
                                            $('a-tv-'+ elem_n ).show();                
                                            if (img_) {Effect.Appear( img_, {duration: 1});}                
                                            $('a-tv-t-'+elem_n).addClassName('tvon');               
                                            dmedia.showned = elem_n;            }   }};
                                
                                
                                BellaClub.dmedia_rotator = function() {     
                                    try {        if ($('a-tv-1')) {            
                                            var nextshow = dmedia.showned+1;                       
                                    if (nextshow>4) {nextshow=1;}            
                                        BellaClub.dmedia_show(nextshow,1,1);        }     } catch(e) { }};
                            BellaClub.dmedia_stop = function() {    if (dmedia.interval1) {window.clearInterval(dmedia.interval1);}};
                            BellaClub.dmedia_start = function() {   BellaClub.dmedia_stop();    
                                dmedia.interval1 = window.setInterval('BellaClub.dmedia_rotator()',6000);};
                            
                            BellaClub.AnimaBG = {};BellaClub.AnimaBG.Set = function(hash_) {    this.vars = {}; this.time = 2000;   this.start = -200;  this.end = 0;    this.target_id = 'table-img-main'; if (hash_!=null) {      this.time = (hash_.time!=null?hash_.time:this.time);        this.start = (hash_.start!=null?hash_.start:this.start);        this.end = (hash_.end!=null?hash_.end:this.end);        this.target_id = (hash_.target_id!=null?hash_.target_id:this.target_id);    }       this.counter = 0;       this.curpos = this.start;       if (!this.delay) {this.delay = ((this.time/1000) * 20);}    if (!this.steps) {this.steps = this.time / this.delay;}     if (!this.delay_new) {this.delay_new = parseInt(this.delay - (this.delay/4));}  if (!this.move) {this.move = parseInt((this.end  - this.start) / this.steps);}      };BellaClub.AnimaBG.Anima = function() {    if ($(this.target_id)) {        this.counter++;     if (parseInt(this.counter * 100 / this.steps) == 80) {          this.delay_new = parseInt(this.delay + (this.delay*0.2));       }       this.curpos += this.move;                       if (this.curpos >=  this.end) {             $(this.target_id).setStyle({backgroundPosition: 0});        } else {            $(this.target_id).setStyle({backgroundPosition: this.curpos+'px'});         window.setTimeout('BellaClub.AnimaBG.Anima()', this.delay_new);     }   }};


BellaClub.assaySlideShowInteval = 8000;
        



BellaClub.colunas_contato_checkSend = function(form_,article_id) {  
    var msg_ = false;   
    $(form_+'ErB').hide();  
    if ($(form_).name.value=="") {
        msg_ = true;}
    if ($(form_).email.value=="") {
        msg_ = true;}   
    if ($(form_).subject.value=="") {
        msg_ = true;}   
    if ($(form_).message.value=="") {
        msg_ = true;}   
    if (msg_) {     
        alert(aSubscribe['preencha_corretamente']);
      return false; 
    }   
    var param_ = "to=writer&article_id="+article_id+"&"+Form.serialize(form_);  
    BellaClub.getURL('lJsSd'+form_, param_, 'POST');return false;};tmpTimeOutCentralizar = false;


Centralizar = function(obj_,nofix_) {    
    var oVp = document.viewport.getDimensions();   
    var aSf = document.viewport.getScrollOffsets();    
    var posX = parseInt(aSf[0] + ((oVp.width - $(obj_).getWidth()) / 2));    
    var posY = parseInt(aSf[1] + ((oVp.height - $(obj_).getHeight()) / 2));    
    if (posY<0) {posY=1;}if (posX<0) {posX=1;}    
    $(obj_).style.left = posX+"px"; 
    if (nofix_==2) {
        if ($(obj_).getHeight() < oVp.height) { $(obj_).style.top = posY+"px";  }
    } else {
        $(obj_).style.top = posY+"px";
    }   
    if (nofix_==1) { return; }
    if (tmpTimeOutCentralizar) {window.clearTimeout(tmpTimeOutCentralizar);}    
    tmpTimeOutCentralizar = window.setTimeout( Centralizar, 500, obj_, 2);    
};                                 
 
readCookie = function(name) {    var nameEQ = name + "=";    var ca = document.cookie.split(';');    for(var i=0;i < ca.length;i++) {            var c = ca[i];            while (c.charAt(0)==' ') {c = c.substring(1,c.length);}            if (c.indexOf(nameEQ) == 0) {return c.substring(nameEQ.length,c.length);}    }    return 0;};

GetBannerTop = function(secao_) {    
    if ($('div-banner-jsr')) {      
        BellaClub.getURL('div-banner-jsr','action=ads&bsec='+secao_);
    } else {
        window.setTimeout('GetBannerTop('+secao_+');', 500);
    }
};
                                    
linkForgotPass = function() {   BellaClub.showForgotPass(); };
                                    
rolaTela = function() {window.scrollTo(0,0);};var a9 = new Object();
a9.msg = function(msg_,status_) {    try {        $('lMsgText').update(msg_);$('lMsgBox').show();$('lMsgBox').scrollTo();    } catch(e) {        alert(msg_);    }};

a9.ajax = function(id_window,url_,param_,metodo_) { url_ = URL_http + url_;     new Ajax.Updater(id_window, url_,   {       method: 'get', parameters: param_,  evalScripts: true,  onSuccess: rolaTela()   }); };a9.mascara_numero = function(e) { if (!e) {e = window.event;}var tecla_ = (e.keyCode ?  e.keyCode : e.which); if (tecla_==8 || tecla_==27 || (tecla_>34 && tecla_<41) || (tecla_>47 && tecla_<58)) {return true;} e.returnValue = false;return false;};


                                    
                                    BellaClub.contato_checkSend = function(formId_, isAtendimento, intAtendimento, intKeyAtendimento) {    
                                        var msg_ = null;    var focus_ = null;    
                                        if (isAtendimento=="") {            
                                            if ($(formId_).name.value=="") {
                                                msg_ = "\n - "+aErros['fill-name'];focus_="name";}            
                                            if ($(formId_).email.value=="") {
                                                msg_ += "\n - "+aErros['fill-email'];focus_="email";}    }    
                                        if ($(formId_).subject.value=="") {msg_ += "\n - "+aErros['fill-subject'];focus_="subject";}    
                                        if ($(formId_).message.value=="") {msg_ += "\n - "+aErros['fill-message'];focus_="message";}    
                                        if (msg_) {        alert(aSubscribe['preencha_corretamente']+msg_);        
                                            $(formId_)[focus_].focus();        return false;    }    
                                        var param_ = $(formId_).serialize() + "&formId="+formId_;    
                                        if (isAtendimento!=="") {param_ = param_+"&at="+intAtendimento+"&k1="+intKeyAtendimento;}    
                                        BellaClub.getURL('div-send-'+formId_, param_, 'POST');    document.body.style.cursor="wait";    return false;};
BellaClub.deployMessageIE6 = function() {  
    var rv = -1;  
    if (navigator.appName == 'Microsoft Internet Explorer') {   
        var ua = navigator.userAgent;    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");    
        if (re.exec(ua) !== null) {rv = parseFloat( RegExp.$1 );}  }  if ( rv > -1 ) {    
        if ( rv < 7.0 ) {       $('div-ups').insert({after: "<div id='div-msg-ie6'></div>"});       
            BellaClub.getURL('div-msg-ie6','action=msgie6');    }  }};

eCardSend = function() {        if ($('r-nome').value.length<2 ||   $('r-email').value.length<2 ||  $('d-nome').value.length<2  ||  $('d-email').value.length<2) {              alert(aErros['todos_campos']);              return false;   }   BellaClub.getURL('div-form-ecard-js', $('form-ecard').serialize(), 'POST'); return false;};eCardSent = function() { $('form-ecard').hide();$('div-form-ecard-sent').show();};

BellaClub.autoSessionUpdate = function(id_window,url_,param_,tempo_) {      
    if (param_==null) {param_ = "";}    if (tempo_==null) {tempo_ = 120;}    
    new Ajax.PeriodicalUpdater(id_window, "/"+url_,    {            
        method: 'get', frequency: tempo_, parameters: param_, evalScripts: true    });
};
BellaClub.startSessionUpdate = function() {
    try { BellaClub.autoSessionUpdate('div-ups','index.php','action=upsession&from='+sPage+'&ts='+iUpSf,120);} 
    catch(e) {window.setTimeout("BellaClub.startSessionUpdate()", 1500);}
};
/* @todo remover uso, utilizar mmkbox e mhide */
BellaClub.mttgl=function(o_){ 
    var bStatus = $(o_).getStyle('display');
    if (bStatus=='none') { BellaClub.mmkbox(); }
    $(o_).setStyle({display: (bStatus=='none' ? 'block' : 'none') }); 
};
BellaClub.mmkbox = function() {    
    if (!$('div-mhide')) {  $('div-ups').insert({after: '<div id="div-mhide"></div>'});  }
    $("div-mhide").stopObserving("click");
    $("div-mhide").setStyle({ width:(document.body.scrollWidth)+"px",
                              height:(document.body.scrollHeight)+"px",
                              zIndex: 15, position:'absolute', left:0, top:0 });    
    $("div-mhide").observe("click", BellaClub.mhide);
    $("div-mhide").show();
};
BellaClub.mhide = function() { 
    try { $('div-mhide').hide(); } catch(e) {}  $$('.mPop').each(function(o){ $(o).setStyle({display:''});  }); 
};
BellaClub.mmrt = function() { 
    BellaClub.mhide();
    try { $('div-alphabox').click();  } catch(e) { } 
    try { BellaClub.assayVideoPlayer(0); } catch(e) { } 
    try { _freeTourVideoClose(); } catch(e) { } 
};
BellaClub.popmtoptgl=function(o_) { $(o_).setStyle({top:'-'+$(o_).getHeight()+'px'}); $(o_).toggle(); };
BellaClub.fixMenu = function(id_,lap_) {
     if (lap_== null) { lap_=0; }
     lap_++;
     if (lap_>10) { return; }
     try {                
         $$('#div-menu .focus').each(function(obj) {            
             $(obj).removeClassName('focus');        
         });        
         if (id_) {  $('a-'+id_).addClassName('focus'); }  
     } catch(e) {
         window.setTimeout(BellaClub.fixMenu, 1000, id_, lap_);
     }
};