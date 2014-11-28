<div class="panel-group" role="tablist" id="panel-sidemenu">

    <div class="panel panel-default" id="panel-home">
        <div class="panel-heading">
            <h4 class="panel-title"><a class="active" href="{{ URL::to('/admin/') }}">Home</a></h4>
        </div>
    </div>
    {{--PANEL CATEGORIAS--}}
    <div class="panel panel-default" id="panel-categorias">
        <div class="panel-heading">
            <h4 class="panel-title"><a data-parent="#panel-sidemenu" data-toggle="collapse" data-target="#menu-categoria" href="#">Categorias</a></h4>
        </div>
        <div class="panel-collapse collapse" id="menu-categoria">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ URL::to('/admin/categoria/nova') }}">Nova</a></li>
                <li class="list-group-item"><a href="{{ URL::to('/admin/categoria/') }}">Lista todas</a></li>
            </ul>
        </div>
    </div>
    {{--PANEL CONTEUDOS--}}
    <div class="panel panel-default"  id="panel-conteudos">
        <div class="panel-heading">
            <h4 class="panel-title"><a data-parent="#panel-sidemenu" data-toggle="collapse" data-target="#menu-conteudos" href="#">Conteúdos</a></h4>
        </div>
        <div class="panel-collapse collapse" id="menu-conteudos">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ URL::to('/admin/conteudo/novo') }}">Novo conteúdo</a></li>
                <li class="list-group-item"><a href="{{ URL::to('/admin/conteudo') }}">Lista todos</a></li>
            </ul>
        </div>
    </div>

</div>