<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twiter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('text_wa');
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
        Schema::dropIfExists('social');
    }
}
