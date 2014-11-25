<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConteudosTable extends Migration {

	public function up()
	{
		Schema::create('conteudos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titulo');
			$table->string('apelido', 40)->unique();
			$table->longText('texto');
			$table->boolean('publicado');
			$table->integer('categoria_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('conteudos');
	}
}