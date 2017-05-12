@extends('web.layouts.menu')

@section ('page_title','Assine')

@section('content')

</script>

<div class="box-central">

    <div id="div-conteudo">


        <script type="text/javascript">
        
            pagType = "CreditCard";  pagPlan = true;   pagPayPal = false;   BellaClub.fixMenu('subscribe');  document.body.style.cursor="default";
            __cc_show_parcanual = function(bAct) {  try { $('tr-cc-parc').hide(); if (bAct==1) { $('tr-cc-parc').show(); } } catch(e) {}     };
            loginNextAction = function() {  location.href = "https://www.belladasemana.com.br/assine/?refresh=1"; };
            __rollnewuser = function() { $('img-cartoes1').hide(); $('form-cad-fast').show(); $('form-subscribe-plans').scrollTo(); }; 
            __rollpayment = function() { ($('cad-termos-1').is('cheched')) ? $('form-subscribe-fast').show() : alert('É nessessario ler termos') };

        </script>

        <div id="div-all-subscribe">

            <!-- cabecalho -->
            <div id="div-assine-topo">
                <div class="top-txt"><a href="/clube-bella" target="_blank"></a></div>
            </div>

            <div class="assine-linegray"></div>

            <div class="assine-fs">
                ASSINATURA SIGILOSA <span>O nome do Bella não aparece na fatura do seu cartão de <br>crédito, nem em sua conta bancária</span>
            </div>
            <div class="assine-fs afs2">
                SEGURANÇA DE DADOS <span> Nosso sistema de criptografia garante segurança total das <br>informações de pagamento no momento de sua assinatura</span>
            </div>
            <div class="assine-fs afs3">
                POLÍTICA DE PRIVACIDADE <span><a href="/politica-de-privacidade" target="_blank">Clique aqui</a> e saiba mais a sobre a nossa política de privacidade</span>
            </div>

            <!-- alert box -->
            <div id="div-alert-box" class="assine-box1" style="display:none">
                <div class="atencao"></div>
                <div class="red" id="div-alert-msg">&nbsp;</div>
                <div>Por favor, verifique seus dados e tente novamente.</div>
                <div>
                    Se o problema persistir, 
                    <a href="https://www.belladasemana.com.br/Contato/?fs=1">clique aqui</a> 
                    para falar com nosso suporte ou entre em contato com a operadora do seu cartão de crédito ou seu banco        </div>
                </div>


                <!-- planos -->

                {{ Form::open(['class' => 'assine-box1', 'id' => 'form-subscribe-plans']) }}
                
                    <h2>Escolha seu plano</h2>


                    <table border="0" cellspacing="0" cellpadding="0">

                        <tbody>

                            @foreach($plans as $plan)

                            <tr>

                                <td align="right" nowrap="nowrap">
                                    <input id="{{$plan->id}}" name="plan" type="radio" value="{{$plan->id}}">
                                </td>

                                <td nowrap="nowrap">{{ $plan->name }}</td>
                                <td nowrap="nowrap" class="padding-left plan-value"> somente {{$plan->currency .' '. $plan->value }}</td>

                                <td class="padding-left plan-day1 hide-mobile" nowrap="nowrap">
                                    <span class="pdN">(apenas <strong>{{ str_replace(".", ",", $round = round($plan->value/($plan->period*30),2)) }}/dia</strong>)</span>{{($plan->name != 'Mensal') ? round(((($mensalValue*$plan->period)-$plan->value)/($mensalValue*$plan->period))*100,0) .'% de desconto' : '' }}</td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                    <br>

                    <div class="info">Para sua conveniência, sua assinatura será automaticamente renovada por períodos equivalentes. Para cancelar, solicite pelo menu Contato.</div>


                {{ Form::close() }}

                <div class="assine-btl" style="padding: 10px 0 20px;">
                    <a onclick="BellaClub.promptLogin('loginsubscribefast')">Já é sócio? clique aqui Faça seu login</a>
                    <a onclick="__rollnewuser()">Ainda não é sócio?  Faça seu cadastro</a>

                </div>

                <div class="assine-imgcc" id="img-cartoes1"></div> 
                <script type="text/javascript">
                    window.setTimeout("subscribeFast.initializeCad();",3000);
                </script>

                {{ Form::open(['class' => 'assine-box2 assine-form1', 'id' => 'form-cad-fast', 'onsubmit' => 'return false;', 'style' => 'display:none']) }}

                    <h2>Ainda não é sócio? Faça seu cadastro</h2>

                    <div class="bg">

                        <div>
                            <span>Nome:</span> 
                            <div id="alert-cad-nome" style="display:none"></div>
                            <label>
                                <input type="text" id="cad-nome" name="cad-nome" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div>
                            <span>Sobrenome:</span>
                            <div id="alert-cad-sobrenome" style="display:none"></div>
                            <label>
                                <input type="text" id="cad-sobrenome" name="cad-sobrenome" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div>
                            <span>E-mail:</span>
                            <div id="alert-cad-email" style="display:none"></div>
                            <label>
                                <input type="text" id="cad-email" name="cad-email" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div>
                            <span>Confirme seu e-mail:</span> 
                            <div id="alert-cad-email-c" style="display:none"></div>
                            <label>
                                <input type="text" id="cad-email-c" name="cad-email-c" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div>
                            <span>E-mail alternativo:</span> 
                            <div id="alert-cad-email_alternativo" style="display:none"></div>
                            <label>
                                <input type="text" id="cad-email_alternativo" name="cad-email_alternativo" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div>
                            <span>Senha:</span> 
                            <div id="alert-cad-senha" style="display:none"></div>
                            <label>
                                <input type="password" size="12" id="cad-senha" name="cad-senha" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>

                        <div><span>Redigite sua senha:</span> 
                            <div id="alert-cad-senha-c" style="display:none"></div>
                            <label>
                                <input type="password" size="12" id="cad-senha-c" name="cad-senha-c" value="" class="" onfocus="$(this).addClassName('inputfocus');" onblur="$(this).removeClassName('inputfocus');">
                            </label>
                        </div>    

                        <div>
                            <span>País:</span> 
                            <div id="alert-cad-pais" style="display:none"></div>
                            {{ Form::select('cad-pais', $countries, 29, ['id' => 'cad-pais','onfocus' => "$(this).addClassName('inputfocus')", 'onblur' => "$(this).removeClassName('inputfocus')"])}}
                        </div>    
                    </div>

                    <h2>Termos e condições</h2>

                    <div class="termos" id="div-assine-termos">

                        @include('web.widgets.texts')

                    </div>

                    <div>
                        <div id="alert-cad-termos" style="display:none"></div>
                        <label>
                            <input type="checkbox" id="cad-termos-1" name="cad-termos[]" value="1">Li e aceito os TERMOS E CONDIÇÕES
                        </label>
                        <br> 
                    </div>

                    <div class="assine-btl" style="padding: 10px 0 20px;"">
                        <a onclick="subscribeFast.continue();" style="width:100%">Continuar</a>
                    </div>

                {{ Form::close()}}

                <script type="text/javascript">
                    window.setTimeout("$('form-subscribe-fast').hide()",600);
                </script>

                <!-- opcs pagamento -->
                {{ Form::open(['class' => 'assine-box2 opcs', 'id' => 'form-subscribe-fast', 'onsubmit' => 'return false;', 'style' => 'display:none']) }}

                    <h2>ESCOLHA SUA FORMA DE PAGAMENTO</h2>

                    @include('web.widgets.cartao-de-credito')
                    @include('web.widgets.itau')
                    @include('web.widgets.boleto')
                    @include('web.widgets.pagseguro')

                    <div id="div-assine-aguarde" style="display:none">Por favor aguarde um instante! Processando o pagamento</div>
                    <input type="hidden" id="actsubscribefast" name="action" value="sdassinarfast">

                {{ Form::close() }}

            </div>
            
            <div id="div-ajax-subscribe" style="display:none"></div>    

        </div>

    </div>

    @stop

