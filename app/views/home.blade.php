@extends('templates.master')

@section('header')
<!-- CAROUSEL -->
<div id="header-wrapper">
    <div class="carousel slide container" data-ride="carousel" id="carousel-main">
        <!--INDICADORES-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-main" data-slide-to="1"></li>
            <li data-target="#carousel-main" data-slide-to="2"></li>
        </ol>
        <!--WRAPER dos SLIDES-->
        <div class="carousel-inner" data-role="listbox">
            <div class="item active">
                <img src="assets/images/destaque01.jpg" alt="...">
                <div class="carousel-caption">
                    <p>Equipe - Profissionais treinados e especializados</p>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/destaque02.jpg" alt="...">
                <div class="carousel-caption">
                    <p>Atendimento especial e individual</p>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/destaque03.jpg" alt="...">
                <div class="carousel-caption">
                    <p>Massagem-Terapia - Técnicas de massagens terapêuticas exclusivas</p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@stop

@section('conteudo')
<!-- MAIN CONTENT -->
<div id="destaques-front">
    <div class="row">
        <div class="col-lg-4">
            <img src="assets/images/aprimoramento.jpg" class="img-responsive img-circle" alt="">
            <h3>Cursos de Aprimoramento</h3>
            <p>Cursos de aprimoramento e extensão em constante atualização, com técnicas modernas e professores experientes</p>
        </div>
        <div class="col-lg-4">
            <img src="assets/images/especializacao.jpg" class="img-responsive img-circle" alt="">
            <h3>Cursos de Especialização</h3>
            <p>Cursos de aprimoramento e extensão em constante atualização, com técnicas modernas e professores experientes</p>
        </div>
        <div class="col-lg-4">
            <img src="assets/images/tratamentos.jpg" class="img-responsive img-circle" alt="">
            <h3>Tratamentos</h3>
            <p>Cursos de aprimoramento e extensão em constante atualização, com técnicas modernas e professores experientes</p>
        </div>
    </div>
</div>
@stop