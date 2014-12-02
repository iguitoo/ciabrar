@extends('templates.admin-master')

@section('conteudo')

    <div class="col-lg-12">
        <h2 class="sub-header">Novo conteúdo</h2>
        @include('templates.errorPanel')

        {{ Form::model($conteudo, array('url'=>array('/admin/conteudo/atualiza', $conteudo->id), 'method'=>'put')) }}
            <div class="form-group col-lg-12">
                {{ Form::label('titulo', 'Título:', ['class'=>'control-label']) }}
                {{ Form::text('titulo', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('apelido', 'Apelido:', ['class'=>'control-label']) }}
                {{ Form::text('apelido', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('categoria_id', 'Categoria:', ['class'=>'control-label']) }}
                {{ Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group col-lg-12">
                {{ Form::label('texto', 'Texto:', ['class'=>'control-label']) }}
                {{ Form::textarea('texto', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group col-lg-12">
                {{ Form::button('Atualizar conteúdo', ['class'=>'btn btn-primary pull-right', 'type'=>'submit']) }}
            </div>
        {{ Form::close() }}
    </div>

@stop

@section('script')
<script>
    CKEDITOR.replace('texto');
</script>
@stop