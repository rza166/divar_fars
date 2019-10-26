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
            $table->string('agahidahande',10)->nullable();
            $table->string('meter',15)->nullable();
            $table->integer('vadie')->nullable();
            $table->integer('ejare')->nullable();
            $table->tinyInteger('tedadotagh')->nullable();
            $table->smallInteger('salesakht')->nullable();
            $table->tinyInteger('sanad')->nullable()->comment('سند اداری');
            $table->integer('ejareday');
            $table->string('mobile',13);
            $table->string('codemeli',10)->nullable();
            $table->tinyInteger('chat')->nullable()->comment('چت');
            $table->string('onvanagahi',50);
            $table->string('tozihat',150);
            $table->string('menu');
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
