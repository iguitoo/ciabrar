<?php

class Categoria extends Eloquent {

	protected $table = 'categorias';
	public $timestamps = true;
	protected $guarded = array('id');
	protected $fillable = array('nome', 'descricao');

}