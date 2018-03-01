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
			$table->date('naissance');
			$table->string('genre');
			$table->string('pays');
			$table->string('niveau');
			$table->string('etablissement');
			$table->integer('admin')->default(0);
			$table->integer('confirmed')->default(0);
			$table->string('confirm_code')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down() {
	    Schema::dropIfExists('users');
	}
}
