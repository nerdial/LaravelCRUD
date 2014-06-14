<?php

use Illuminate\Database\Migrations\Migration;

class UserTableMigration extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user",function($table){

            $table->increments('id');
            $table->string('username', 21);
            $table->string('password', 31);
            $table->string('email', 100);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("user");
    }

}