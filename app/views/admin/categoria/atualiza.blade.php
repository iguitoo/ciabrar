@extends('templates.admin-master')

@section('conteudo')

    <div class="col-lg-12">
       <h2 class="sub-header">Atualiza Categoria - {{{ $categoria->nome }}}</h2>
       @include('templates.errorPanel')
        <div class="col-lg-6">
           {{ Form::model($categoria, array('url'=>array('/admin/categoria/atualiza', $categoria->id), 'method'=>'put')) }}
                <div class="form-group">
                    {{ Form::label('nome', 'Nome:', ['class'=>'control-label']) }}
                    {{ Form::text('nome', null, ['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('descricao', 'Descrição:', ['class'=>'control-label']) }}
                    {{ Form::textarea('descricao', null, ['class'=>'form-control', 'rows'=>'3']) }}
                </div>
                <div class="form-group">
                    {{ Form::button('Atualizar', ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                </div>
           {{ Form::close() }}
        </div>
    </div>

@stop