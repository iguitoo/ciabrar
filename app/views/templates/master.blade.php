<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{{ $title or 'Bem vindo'}}} - CBR</title>

	<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />
	{{ HTML::style('assets/dist/css/bootstrap-ciabrar.css') }}
	{{ HTML::style('assets/css/styles.css') }}
</head>
<body>
	<div id="wrapper-all">
	<!-- TOP MENU -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::to('/') }}"> {{ HTML::image('assets/images/cbr-50.png',null, ['height'=>'20']) }}</a>
			</div>
			<!-- MENU TO COLLAPSE -->
			<div class="collapse navbar-collapse" id="navbar-collapse-top">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ URL::to('/') }}">Home</a></li>
					<li><a href="{{ URL::to('/paginas/quem-somos') }}">Quem somos</a></li>
					<li><a href="{{ URL::to('/paginas/equipe') }}" class="element">Equipe</a></li>
					<li><a href="#" class="element">Cursos</a></li>
					<li><a href="#" class="element">Tratamentos</a></li>
					<li><a href="{{ URL::to('/paginas/consultorio') }}" class="element">Consultório</a></li>
					<li><a href="#" class="element">Localização</a></li>
					<li><a href="#" class="element">Fale conosco</a></li>
				</ul>
			</div>
		</div>
	</div>

    <div class="row" id="header-wrapper">
        @yield('header')
    </div>

    <div class="container" id="phone-box">
        <div class="col-lg-12">
            <div class="contatos clearfix">
                <span class="pull-right"><i class="glyphicon glyphicon-phone-alt"></i> (12) 3302-7489</span>
            </div>
        </div>
    </div>


    <div class="row">&nbsp;</div><!-- GAP ROW -->
    <section class="container" id="conteudo">
        <div class="row">
            @yield('conteudo')
        </div>
    </section>
    <div class="row">&nbsp;</div><!-- GAP ROW -->


	</div><!-- END WRAPPER ALL -->

	<footer id="rodape" class="container">
		<div class="col-lg-2">
			{{ HTML::image('assets/images/logo-CBR-full.png', 'logotipo companhia brasileira de reabilitação', ['class'=>'img-responsive']) }}
		</div>
		<div class="col-lg-4">
			<h4>Companhia Brasileira de Reabilitação</h6>
			<p class="small">Rua Ipiranga, 201 - Vila Ema <br>
    		S&atilde;o Jos&eacute; dos Campos / SP <br>
    		Tel: (12) 9187-5564<br>
    		(12) 81653007<br>
    		contato@ciabrar.com.br  </p>
		</div>
		<div class="col-lg-6">
			<div class="row">
				<div class="col-lg-6">
					<h5>CURSOS DE APRIMORAMENTO</h5>
					<ul class="small">
						<li>Auriculoterapia </li>
						<li>Treinamento Funcional </li>
						<li>Formação no Método Pilates - Aparelho e Solo </li>
						<li>Reeducação Postural Global - RPG </li>
						<li>Reabilitação do Joelho no Esporte - Treinamento e Atualização</li>
					</ul>
				</div>
				<div class="col-lg-6">
				<h5>TRATAMENTOS</h5>
					<ul class="small">
						<li>Osteopatia</li>
						<li>Pilates</li>
						<li>Programa de Tratamento da Coluna</li>
						<li>Treinamento Funcional</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/dist/js/bootstrap.min.js') }}

</body>
</html>