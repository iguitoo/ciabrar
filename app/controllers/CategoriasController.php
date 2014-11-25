<?php

class CategoriasController extends BaseController
{
    //Redireciona para a pagina inicial das categorias
    public function getIndex()
    {
        return View::make('admin.categorias.index')
            ->with('title', 'Lista categorias');
    }

    /**
     * Redireciona para o form de cadastro de categorias
     */
    public function getNova()
    {
        return View::make('admin.categorias.nova')
            ->with('title', 'Nova categoria');
    }

    public function postNova()
    {
        return Redirect::to('/admin')
            ->with('message', 'Categoria cadastrada com sucesso');
    }


}