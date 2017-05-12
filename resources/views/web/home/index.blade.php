@extends('web.layouts.menu')

@section ('page_title','Bella da semana')

@section('content')

<div class="box-central">

    @include('web.home.destaques')

    @include('web.home.conteudo')

    <div class="div-conteudo">
        <!-- News / Indique -->

        <div class="boxhome-newsletter">
            <form onsubmit="return BellaClub.cadNews();" action="/" class="gaNewsForm">
                <div class="label">CADASTRE SEU EMAIL E RECEBA A MAIS DELICIOSA NEWSLETTER DA INTERNET</div>
                <input name="email" type="text" id="input-email-news" maxlength="150" placeholder="Seu e-mail">
                <button>Cadastrar</button>
            </form>
        </div>

        <a class="boxhome-ecard" href="https://www.belladasemana.com.br/ecard"></a>

        <br class="clearfloat">

    </div>

    @include('web.home.enquete')

</div>



@stop
