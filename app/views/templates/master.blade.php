<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cia Brasileira de Reabilitação</title>

	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="assets/dist/css/bootstrap-ciabrar.css">
	<link rel="stylesheet" href="assets/css/styles.css">
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
				<a class="navbar-brand" href="#"><img src="assets/images/cbr-50.png"  height="20" alt=""></a>
			</div>
			<!-- MENU TO COLLAPSE -->
			<div class="collapse navbar-collapse" id="navbar-collapse-top">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#" class="element">Equipe</a></li>
					<li><a href="#" class="element">Cursos</a></li>
					<li><a href="#" class="element">Tratamentos</a></li>
					<li><a href="#" class="element">Consultórios</a></li>
					<li><a href="#" class="element">Localização</a></li>
					<li><a href="#" class="element">Fale conosco</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- CAROUSEL -->
	<div id="carousel-wrapper">
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
	<div class="row">&nbsp;</div><!-- GAP ROW -->

	<!-- MAIN CONTENT -->
	<div class="container" id="conteudo">
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
	</div>
	<div class="row">&nbsp;</div><!-- GAP ROW -->

	</div><!-- END WRAPPER ALL -->

	<footer id="rodape" class="container">
		<div class="col-lg-2">
			<img src="assets/images/logo-CBR-full.png" alt="logotipo companhia brasileira de reabilitação" class="img-responsive">
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

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/dist/js/bootstrap.min.js"></script>

</body>
</html>