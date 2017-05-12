@extends('web.layouts.menu')

@section ('page_title','')

@section('content')

<div class="box-central">


    <div id="div-conteudo">

        @include('web.colunas.sub-menu')


        <div class="bbox-c-clean" id="div-colunas-content">

            @foreach ($articles as $article)

            {{-- {!! $article->tag !!} --}}

            <a class="boxc " href="{{ route('colunas.post', [strtolower(str_replace(' ', '-', $article->tag->name)), $article->url] ) }}" style="background-image:url('{{ Storage::url("columns/".$article->photos[0]->name) }}'); image-rendering: crisp-edges; background-position: top">     
                <span class="label">Personal Trainer</span><!--tag-->
                <span class="text">
                    <strong>{!! $article->title !!}</strong> <!--title-->
                    <p>{!! str_limit( strip_tags($article->text),250) !!}</p>
                </span>
            </a>

            @endforeach    

            <br class="clearfloat">
            
        </div>

        <div class="bbox-end-line"></div>

    </div>

</div>

@stop