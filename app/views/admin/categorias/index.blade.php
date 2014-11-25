@extends('templates.admin-master')

@section('conteudo')

<div class="col-lg-12">
   <h2 class="sub-header">Categorias</h2>
   <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Geral</td>
                    <td>Conteúdos estáticos do site</td>
                </tr>
            </tbody>
        </table>
   </div>
</div>

@stop