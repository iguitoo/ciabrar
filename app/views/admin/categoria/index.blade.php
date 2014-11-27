@extends('templates.admin-master')

@section('conteudo')

<div class="col-lg-12">
   <h2 class="sub-header">Categorias</h2>
   <p class="text-muted">Lista todas categorias cadastradas no sistema</p>
   <div class="table-responsive">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th width="5%">Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td><a href="{{ URL::to('/admin/categoria/atualiza', ['id'=>$categoria->id]) }}"> {{{ $categoria->id }}}</a></td>
                    <td><a href="{{ URL::to('/admin/categoria/atualiza', ['id'=>$categoria->id]) }}">{{{ $categoria->nome }}}</a></td>
                    <td>{{{ $categoria->descricao }}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="small text-info"><i class="glyphicon glyphicon-info-sign"></i> Clique no <b>nome</b> ou <b>ID</b> para editar/atualizar a categoria.</p>
   </div>
</div>

@stop