
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::to('/assets/images/favicon.ico') }}">

    <title>{{{ $title or 'Bem vindo'}}} - CBR Admin</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('/assets/dist/css/bootstrap-ciabrar.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('/assets/css/dashboard.css') }}

  </head>

  <body>
    {{--MENU TOP--}}
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin - CBR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        {{--SIDEBAR--}}
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{ URL::to('/admin') }}">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="{{ URL::to('/admin/categorias') }}">Categorias</a>
                <ul>
                    <li><a href="{{ URL::to('/admin/categorias/nova') }}">Nova</a></li>
                </ul>
            </li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>

        {{-- ******************************************************************
            CONTEUDO PRINCIPAL
            ******************************************************************* --}}
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Painel de Administração</h1>

            <div class="row">
                @yield('conteudo')
            </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('/assets/js/jquery.min.js') }}

    {{ HTML::script('/assets/dist/js/bootstrap.min.js') }}

  </body>
</html>
