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
            $table->integer('price')->nullable();
            $table->tinyInteger('moaveze')->nullable()->comment('معاوضه');
            $table->string('typeagahi',10);
            $table->string('agahidahande',10);
            $table->string('meter',15);
            $table->integer('vadie');
            $table->integer('ejare');
            $table->tinyInteger('tedadotagh');
            $table->smallInteger('salesakht');
            $table->tinyInteger('sanad')->nullable()->comment('سند اداری');
            $table->integer('ejareday');
            $table->string('mobile',13);
            $table->string('codemeli',10);
            $table->tinyInteger('chat')->nullable()->comment('چت');
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
