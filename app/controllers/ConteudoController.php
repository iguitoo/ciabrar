<?php

class ConteudoController extends BaseController
{

    /**
     * Redireciona para lista de conteudos
     */
    public function getIndex()
    {
        $conteudos = Conteudo::all();
        $categorias = DB::table('categorias')->orderBy('nome', 'asc')->lists('nome', 'id');

        return View::make('/admin/conteudo/index', compact('conteudos'))
            ->with('title', 'Conteúdos')
            ->with('categorias', $categorias);
    }

    /**
     * Redireciona para pagina de atualização de conteudos
     */
    public function getAtualiza($id)
    {
        $conteudo = Conteudo::find($id);
        $categorias = DB::table('categorias')->orderBy('nome', 'asc')->lists('nome', 'id');

        if(!$conteudo) {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteudo não encontrado. Tente novamente!');
        }

        return View::make('admin.conteudo.atualiza', compact('conteudo'))
            ->with('title', 'Atualiza conteúdo')
            ->with('categorias', $categorias);
    }

    /**
     * Redireciona para pagina de cadastro de conteudos
     */
    public function putAtualiza($id)
    {
        $rules = Conteudo::$rules;
        $rules['apelido'] = str_replace('{ignore_id}', $id, $rules['apelido']);
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreu um erro ao atualizar o conteúdo!')
                ->withErrors($validator)
                ->withInput();
        }

        $conteudo = Conteudo::find($id);
        $conteudo->titulo = Input::get('titulo');
        $conteudo->apelido = Input::get('apelido');
        $conteudo->categoria_id = Input::get('categoria_id');
        $conteudo->texto = Input::get('texto');

        if(count($conteudo->getDirty()) > 0) {
            if($conteudo->save()){
                return Redirect::to('/admin/conteudo')
                    ->with('message', 'Conteúdo atualizado com sucesso!');
            } else {
                return Redirect::to('/admin/conteudo')
                    ->with('message', 'Não foi possível efetuar a atualização. Tente novamente!');
            }
        } else {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Nenhuma alteração efetuada!');
        }

    }

    /**
     * Redireciona para pagina de cadastro de conteudos
     */
    public function getNovo() {
        $categorias = DB::table('categorias')->orderBy('nome', 'asc')->lists('nome', 'id');
        return View::make('/admin/conteudo/novo')
            ->with('title', 'Novo conteúdo')
            ->with('categorias', $categorias);
    }

    /**
     * Redireciona para pagina de cadastro de conteudos
     */
    public function postNovo()
    {

        $validator = Validator::make(Input::all(), Conteudo::$rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreu um erro ao efetuar um novo cadastro')
                ->withErrors($validator)
                ->withInput();
        }

        $conteudo = new Conteudo();
        $conteudo->titulo = Input::get('titulo');
        $conteudo->apelido = Input::get('apelido');
        $conteudo->categoria_id = Input::get('categoria_id');
        $conteudo->texto = Input::get('texto');

        if($conteudo->save()) {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteúdo gravado com sucesso');
        } else {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Ocorreu um erro ao gravar o novo conteúdo. Tente novamente!');
        }
    }

}
