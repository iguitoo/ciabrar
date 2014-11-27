<?php

class Categoria extends Eloquent {

	protected $table = 'categorias';
	public $timestamps = true;
	protected $guarded = array('id');
	protected $fillable = array('nome', 'descricao');

    public static $rules = array(
        'nome' => 'required|min:4|unique:categorias,nome,{ignore_id}',
        'descricao' => 'between:10, 60'
    );

}