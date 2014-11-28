@extends('templates.master')

@section('header')
    @include('templates.header')
@stop

@section('conteudo')
    <div class="col-lg-8">
        <h2>{{{ $conteudo->titulo }}}</h2>
        <div class="boxed">
            {{ $conteudo->texto }}
        </div>
    </div>

    <div class="row hidden-lg">&nbsp;</div><!-- GAP ROW -->

    <div class="col-lg-4">
        {{ HTML::image('/assets/images/Logo-CBR-full-horizontal.png', 'Logo CBR', ['class'=>'img-responsive img-rounded']) }}
    </div>

@stop