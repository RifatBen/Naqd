<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	public function up() {
		Schema::dropIfExists('users');
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('email')->unique();
			$table->string('password');
			$table->date('date_naissance');
			$table->string('genre');
			$table->string('pays');
			$table->string('niveau');
			$table->string('etablissement');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down() {
	    Schema::dropIfExists('users');
	}
}
