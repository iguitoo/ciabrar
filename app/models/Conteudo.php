<?php

class Conteudo extends Eloquent {

	protected $table = 'conteudos';
	public $timestamps = true;
	protected $guarded = array('id');
	protected $fillable = array('titulo', 'apelido', 'texto', 'publicado', 'categoria_id');

	public function categoria()
	{
		return $this->hasOne('Categoria', 'cateroria_id');
	}

    public static $rules = array(
        'titulo' => 'required',
        'apelido' => 'required|max:40|unique:conteudos',
        'texto' => 'required',
    );

}