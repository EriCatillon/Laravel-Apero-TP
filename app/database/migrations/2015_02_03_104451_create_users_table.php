<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        //id
        //password
        //role
        //status

        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 128);
            $table->string('password', 100);
            $table->enum('role', ['visitor', 'admin'])->default('visitor');
            $table->enum('status', ['online', 'offline'])->default('offline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('users');
    }

}
