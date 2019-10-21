<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgahisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agahis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city',20);
            $table->string('map',50)->nullable();
            $table->integer('price');
            $table->tinyInteger('moaveze')->nullable()->comment('معاوضه');
            $table->boolean('typeagahi');
            $table->boolean('agahidahande');
            $table->string('meter',15);
            $table->integer('vadie');
            $table->integer('ejare');
            $table->tinyInteger('tedadotagh');
            $table->smallInteger('salesakht');
            $table->string('mobile',13);
            $table->string('onvanagahi',50);
            $table->string('tozihat',150);
            $table->tinyInteger('menu');
            $table->integer('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agahis');
    }
}
