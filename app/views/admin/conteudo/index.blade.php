@extends('templates.admin-master')

@section('conteudo')

<div class="col-lg-12">
    <h2 class="sub-header">Categorias</h2>
    <p class="text-muted">Lista todas categorias cadastradas no sistema</p>
    <div class="table-responsive">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Categoria</th>
                    <th>Última atualização</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conteudos as $conteudo)
                <tr>
                    <td>{{ HTML::link('/admin/conteudo/atualiza/'.$conteudo->id, $conteudo->id) }}</td>
                    <td>{{ HTML::link('/admin/conteudo/atualiza/'.$conteudo->id, $conteudo->titulo) }}</td>
                    <td>{{ $categorias[$conteudo->categoria_id] }}</td>
                    <td>{{ $conteudo->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="small text-info"><i class="glyphicon glyphicon-info-sign"></i> Clique no <b>nome</b> ou <b>ID</b> para editar/atualizar a categoria.</p>
    </div>
</div>

@stop
