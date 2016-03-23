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
            $table->string('avatar')->nullable();
            $table->string('provider')->nullable();
            $table->bigInteger('uid')->nullable();
            $table->string('town')->nullable();
            $table->string('state')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('bio')->nullable();
            $table->integer('role_id')->unsigned()->default(1);
            $table->string('website')->nullable();
            $table->string('job_description')->nullable();
            $table->string('favorite')->nullable();
            $table->integer('friends_count')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
