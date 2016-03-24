<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('service_name')->unique();
            $table->string('service_tagline')->nullable();
            $table->longText('service_description');
            $table->string('category');
            $table->string('tags')->nullable();
            $table->string('service_state');
            $table->string('service_location');
            $table->mediumText('service_image')->nullable();
            $table->longText('work_hours');
            $table->integer('service_phone');
            $table->string('website');
            $table->softDeletes();
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
        Schema::drop('services');
    }
}
