<?php

class ConteudoController extends BaseController
{
    /**
     * Redireciona para lista de conteudos
     */
    public function getIndex()
    {
        return View::make('/admin/conteudo/index')
            ->with('title', 'Conteúdos');
    }
}