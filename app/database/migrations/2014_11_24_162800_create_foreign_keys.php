<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('conteudos', function(Blueprint $table) {
			$table->foreign('categoria_id')->references('id')->on('categoria')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('conteudos', function(Blueprint $table) {
			$table->dropForeign('conteudos_categoria_id_foreign');
		});
	}
}