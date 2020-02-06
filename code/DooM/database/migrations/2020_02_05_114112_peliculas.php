<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('title', 100);
            $table->string('director', 100);
            $table->string('year', 4);
            $table->boolean('rented')->default(false);
            $table->string('poster', 200);
            $table->text('synopsis');
            $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
