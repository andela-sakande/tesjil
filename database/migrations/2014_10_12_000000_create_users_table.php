<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable;
            $table->string('username')->unique();
            $table->string('fullname')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('avatar');
            $table->string('provider')->nullable();
            $table->bigInteger('uid')->nullable();
            $table->string('town')->nullable();
            $table->string('state')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
