<?php

class CategoriaController extends BaseController
{
    //Redireciona para a pagina inicial das categorias
    public function getIndex()
    {
        $categorias = Categoria::all();

        return View::make('admin.categoria.index', compact('categorias'))
            ->with('title', 'Lista categorias');
    }

    /**
     * Redireciona para o form de cadastro de categorias
     */
    public function getNova()
    {
        return View::make('admin.categoria.nova')
            ->with('title', 'Nova categoria');
    }

    /**
     * cadastra de categoria no BD
     */
    public function postNova()
    {
        $validator = Validator::make(Input::all(), Categoria::$rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreu um erro ao efetuar o novo cadastro')
                ->withErrors($validator)
                ->withInput();
        }

        $categoria = new Categoria();
        $categoria->nome = Input::get('nome');
        $categoria->descricao = Input::get('descricao');

        if($categoria->save()) {
            return Redirect::to('/admin/categoria')
                ->with('message', 'Categoria cadastrada com sucesso');
        }

        return Redirect::to('/admin/categoria')
            ->with('message', 'Não foi possível efetuar o cadastro. Tente novamente.');

    }

    /**
     * Redireciona para o form de atualização de categorias
     */
    public function getAtualiza($id)
    {
        $categoria = Categoria::find($id);

        if($categoria) {
            return View::make('admin.categoria.atualiza', compact('categoria'))
                ->with('title', 'Atualiza categoria');
        }

        return Redirect::to('/admin/categoria')
            ->with('message', 'Categoria não encontrada. Tente novamente');
    }

    /**
     * atualiza de categoria no BD
     */
    public function putAtualiza($id)
    {
        $rules = Categoria::$rules;
        $rules['nome'] = str_replace('{ignore_id}', $id, $rules['nome']);

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreu um erro ao atualizar o cadastro')
                ->withErrors($validator)
                ->withInput();
        }

        $categoria = Categoria::find($id);
        $categoria->nome = Input::get('nome');
        $categoria->descricao = Input::get('descricao');

        if(count($categoria->getDirty()) > 0){
            if($categoria->save()) {
                return Redirect::to('/admin/categoria')
                    ->with('message', 'Categoria cadastrada com sucesso');
            }
            return Redirect::to('/admin/categoria')
                ->with('message', 'Não foi possível efetuar o cadastro. Tente novamente.');
        } else {
            return Redirect::to('/admin/categoria')
                ->with('message', 'Nenhuma alteração efetuada.');
        }


    }

}