<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nome', 80)->unique();
			$table->string('nomeDeUsuario', 20)->unique();
			$table->string('password', 80);
			$table->string('email')->unique();
			$table->string('telefone');
			$table->string('perfil');
			$table->boolean('ativo')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}