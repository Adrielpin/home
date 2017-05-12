@extends('web.layouts.menu')

@section ('page_title','Assine')

@section('content')

<div class="box-central">
    <div id="div-conteudo">

        <script> var _freetourImgPath = '/layout/2015/freetour/';  </script>
        <div class="bbox-c-clean">

            <a href="/assine" class="freetour-txt1"></a>

            <div class="freetour-plan">
                <div class="linha">
                    <span class="titulo-desc"></span>
                    <div class="planline">       
                        <span class="plan-txt1">Mensal</span>
                        <span class="plan-txt2">R$ 24.99</span>
                        <span class="plan-txt3"><span class="pdN">(apenas <strong>0,83/dia</strong>)</span></span>
                    </div>
                    <div class="planline">       
                        <span class="plan-txt1">Trimestral</span>
                        <span class="plan-txt2">R$ 63.99</span>
                        <span class="plan-txt3"><span class="pdN">(apenas <strong>0,71/dia</strong>)</span> 16%OFF</span>
                    </div>
                    <div class="planline">       
                        <span class="plan-txt1">Semestral</span>
                        <span class="plan-txt2">R$ 99.99</span>
                        <span class="plan-txt3"><span class="pdN">(apenas <strong>0,55/dia</strong>)</span> 33%OFF</span>
                    </div>
                    <div class="planline">       
                        <span class="plan-txt1">Anual</span>
                        <span class="plan-txt2">R$ 149.99</span>
                        <span class="plan-txt3"><span class="pdN">(apenas <strong>0,41/dia</strong>)</span> 50%OFF</span>
                    </div>

                    <a class="bt-assinar" href="/assine">Assinar agora</a>
                </div>
            </div>



            <a class="freetour-banner-vv" href="http://pages.belladasemana.com.br/vanessa-vailatti" rel="no-follow"></a> 


            <div id="div-freetour-zoom" style="display:none"></div>
            <map id="mfreetour_tablet" name="mfreetour_tablet">
                <area shape="rect" coords="4,2,385,255" href="javascript:_freeTourImgZoom(1)">
                <area shape="rect" coords="5,267,383,517" href="javascript:_freeTourImgZoom(2)">
                <area shape="rect" coords="1,529,384,782" href="javascript:_freeTourImgZoom(3">
                <area shape="rect" coords="396,2,562,254" href="javascript:_freeTourImgZoom(4)">
                <area shape="rect" coords="394,266,561,519" href="javascript:_freeTourImgZoom(5)">
                <area shape="rect" coords="395,528,561,781" href="javascript:_freeTourImgZoom(6)">
                <area shape="rect" coords="574,3,740,255" href="javascript:_freeTourImgZoom(7)">
                <area shape="rect" coords="573,265,738,517" href="javascript:_freeTourImgZoom(8)">
                <area shape="rect" coords="574,529,739,782" href="javascript:_freeTourImgZoom(9)">
                <area shape="rect" coords="753,3,919,252" href="javascript:_freeTourImgZoom(10)">
                <area shape="rect" coords="752,264,918,519" href="javascript:_freeTourImgZoom(11)">
                <area shape="rect" coords="750,528,920,781" href="javascript:_freeTourImgZoom(12)">
            </map>
            <map id="mfreetour" name="mfreetour">
                <area shape="rect" coords="1,1,429,285" href="javascript:_freeTourImgZoom(1)">
                <area shape="rect" coords="3,299,428,582" href="javascript:_freeTourImgZoom(2)">
                <area shape="rect" coords="1,594,430,874" href="javascript:_freeTourImgZoom(3)">
                <area shape="rect" coords="442,3,631,286" href="javascript:_freeTourImgZoom(4)">
                <area shape="rect" coords="443,299,624,579" href="javascript:_freeTourImgZoom(5)">
                <area shape="rect" coords="441,595,628,873" href="javascript:_freeTourImgZoom(6)">
                <area shape="rect" coords="643,2,831,284" href="javascript:_freeTourImgZoom(7)">
                <area shape="rect" coords="642,298,829,580" href="javascript:_freeTourImgZoom(8)">
                <area shape="rect" coords="641,594,830,873" href="javascript:_freeTourImgZoom(9)">
                <area shape="rect" coords="843,3,1027,284" href="javascript:_freeTourImgZoom(10)">
                <area shape="rect" coords="844,298,1029,580" href="javascript:_freeTourImgZoom(11)">
                <area shape="rect" coords="843,593,1031,874" href="javascript:_freeTourImgZoom(12)">
                <area shape="rect" coords="1043,3,1228,286" href="javascript:_freeTourImgZoom(13)">
                <area shape="rect" coords="1043,297,1229,584" href="javascript:_freeTourImgZoom(14)">
                <area shape="rect" coords="1041,594,1230,874" href="javascript:_freeTourImgZoom(15)">
            </map>
            <img usemap="#mfreetour" src="/layout/imagens/spacer.gif" class="freetour-imgs only-desktop">
            <img usemap="#mfreetour_tablet" src="/layout/imagens/spacer.gif" class="freetour-imgs only-tablet">
            <img usemap="#mfreetour" src="/layout/imagens/spacer.gif" class="freetour-imgs only-mobile">
            <div class="freetour-box-video">
                <div id="div-freetourVideoPlayer" onclick="_freeTourVideoPlayer('https://videos.bella.com.br/streaming/IG584B2Jtuhnws5jubHG0w==/1488391774/freetour/fretour-fullhd.mp4');"></div>
                <div id="div-ftVp-ct" style="display:none"></div>

                <div class="only-desktop freetour-plan freetour-plan2">
                    <span class="titulo-desc"></span>
                    <div class="planline">       
                        <span class="plan-txt1">Mensal</span>
                        <span class="plan-txt2">R$ 24.99</span>
                    </div>
                    <div class="planline">       
                        <span class="plan-txt1">Trimestral</span>
                        <span class="plan-txt2">R$ 63.99</span>
                        <span class="plan-txt3"><span class="pdN">(apenas <strong>0,71/dia</strong>)</span> 16%OFF</span>            </div>
                        <div class="planline">       
                            <span class="plan-txt1">Semestral</span>
                            <span class="plan-txt2">R$ 99.99</span>
                            <span class="plan-txt3"><span class="pdN">(apenas <strong>0,55/dia</strong>)</span> 33%OFF</span>            </div>
                            <div class="planline">       
                                <span class="plan-txt1">Anual</span>
                                <span class="plan-txt2">R$ 149.99</span>
                                <span class="plan-txt3"><span class="pdN">(apenas <strong>0,41/dia</strong>)</span> 50%OFF</span>            </div>

                                <a class="bt-assinar" href="/assine">Assinar agora</a>
                            </div>

                        </div>


                    </div>
                    <div class="bbox-end-line"></div><script type="text/javascript">
                    BellaClub.fixMenu('freetour'); GetBannerTop(3);
                </script><div id="div-popup-news-rd" style="display:none">
                <a href="javascript:;" onclick="rd_remove_popup()" class="x"></a>
                <div class="rdFtH1">Tem certeza que não quer ver o ensaio<br>completo da Vanessa, de graça?</div>
                <div class="rdFtH2">Ela tem muito para te mostrar...</div>
                <form onsubmit="return _cadNewsRD();" action="/" id="form-pop-news-rd">
                    <input name="nome" type="text" maxlength="30" placeholder="Seu nome">
                    <input name="email" id="rd-input-news-email" type="text" maxlength="150" placeholder="Seu e-mail">
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
            <style>
                #div-popup-news-rd { position:absolute;top:100px;width:752px;height:260px;
                    border:1px solid #333;top:0px;left:0px;z-index:100;background-color: #FFF; }
                    #div-popup-news-rd div, #form-pop-news-rd { text-align: center; }
                    .rdHomeH1 { padding: 34px 0 20px 0; color:#b50000; }
                    .rdHomeH2 { font-size: 24px; }
                    .rdHomeH1, .rdFtH1, .rdFtH2 { font-size: 36px; font-weight: 700; }
                    .rdFtH1 {  padding-top:34px; }
                    .rdFtH2 { color:#b50000; }
                    #form-pop-news-rd { margin-top:30px; }    
                    #form-pop-news-rd input, #form-pop-news-rd button { 
                        vertical-align: middle; display:inline-block; border-radius: 6px; 
                    }
                    #form-pop-news-rd input {
                        background-color: #f2f2f2;
                        border: 1px solid #ccc;
                        color: #747474;
                        font-size: 14px;
                        margin:0 1px;
                        padding-left: 5px;
                        height: 34px;
                        width: 220px;
                    }
                    #form-pop-news-rd button {
                        background-color: #000;
                        color: #fff;
                        font-family: inherit;
                        font-size: 16px;
                        font-weight: 700;
                        letter-spacing: normal;
                        border: 0 none;
                        text-transform: uppercase;
                        height: 36px;    
                        width: 200px;
                    }
                </style>
                <script>
                    var _cadNewsRD = function() {       
                        if ($('rd-input-news-email').value.length<7) {        
                            alert(aErros['todos_campos']);            
                            return false;    
                        }            
                        document.body.style.cursor="default";
                        if (!$('div-box-fnews')) {    
                            $('div-ups').insert({after: '<div id="div-box-fnews" class="'+SUnitFolder+' div-box-gnr"></div>'});           
                        }
                        BellaClub.getURL('div-box-fnews', "action=sdnews2&rd=1&page=f&"+ $('form-pop-news-rd').serialize(),'POST');    
                        $('div-popup-news-rd').hide();
    //_avoidExitPopUp();
    return false;
};
var rd_exit_to_top_timeout = false;
var rd_exit_to_top = function() {
  rd_clear_top_timeout();
  rd_exit_to_top_timeout = window.setTimeout(rd_show_popnews, 300);  
};
var rd_clear_top_timeout = function() {
  if (rd_exit_to_top_timeout) { window.clearTimeout(rd_exit_to_top_timeout); }
};
var rd_show_popnews = function() { $('div-popup-news-rd').show(); Centralizar('div-popup-news-rd');  };
var rd_popnews_events = function() {
    $$('.barra-menu-top')[0].observe('mouseout', rd_exit_to_top );
    $$('.barra-menu-top')[0].observe('mouseover', rd_clear_top_timeout );
    $$('body')[0].observe('mouseover', rd_clear_top_timeout );
};
var rd_remove_popup = function() {
    $$('.barra-menu-top')[0].stopObserving('mouseout');
    $$('.barra-menu-top')[0].stopObserving('mouseover');
    $$('body')[0].stopObserving('mouseover');
    rd_clear_top_timeout(); $('div-popup-news-rd').remove();
};
window.setTimeout(rd_popnews_events, 600);
</script>    

</div>     


@stop