
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
    {{ HTML::style('/assets/dist/css/bootstrap.min.css') }}
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

            @include('templates.admin-sidebar-menu')

        </div>

        {{-- ******************************************************************
            CONTEUDO PRINCIPAL
            ******************************************************************* --}}
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Painel de Administração</h1>

            {{--MESSAGES--}}
            @if(Session::has('message'))
                <div class="row" id="message">
                    <div class="alert alert-info alert-dismissable clearfix">
                        <button class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <table>
                            <tr>
                                <td width="60px"><i class="glyphicon glyphicon-info-sign bigger"></i></td>
                                <td>{{{ Session::get('message') }}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endif

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

    <script>
        $(document).ready(function(){

            loadMenuState();

            $('#panel-sidemenu .panel-collapse a').on('click', function(e){
                var link = $(this).closest('.panel-default').attr('id');
                setSessionStorageVar('clickedLinkName', link);
            });

            $('#panel-sidemenu').on('shown.bs.collapse', function(e){
                var active = $('#panel-sidemenu .in').attr('id');
                setSessionStorageVar('activeGroupMenuId', active);
            });

            $('#panel-home').on('click', function(){
                removeSessionStorageVar('activeGroupMenuId');
            })

            $('#panel-sidemenu').on('hidden.bs.collapse', function(e){
                removeSessionStorageVar('activeGroupMenuId')
            });

            //Deixa o menu collapse com o mesmo estado anterior
            function loadMenuState(){
                var activeGroupMenuId = getSessionStorageVar('activeGroupMenuId');
                var clickedLinkName = getSessionStorageVar('clickedLinkName');

                if(activeGroupMenuId !== null) {
                    $('#panel-sidemenu .panel-collapse').removeClass('in');
                    $('#' + activeGroupMenuId).addClass('in');

                    $('#' + clickedLinkName).find('.panel-heading').addClass('panel-color');
                }
            }

            //seta valor na session storage
            function setSessionStorageVar(name, value) {
                 sessionStorage.setItem(name, value);
            }
            //remove valor da session storage
            function removeSessionStorageVar(name) {
                sessionStorage.removeItem(name);
            }
            //recupera valor da session storage
            function getSessionStorageVar(name) {
                return sessionStorage.getItem(name);
            }

        });
    </script>

  </body>
</html>
