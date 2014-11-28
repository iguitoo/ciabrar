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
