<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMashinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mashins', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('mainagahi_id')->unique();
          $table->integer('price')->nullable();
          $table->tinyInteger('moaveze')->nullable()->comment('معاوضه');
          $table->string('typeagahi',10);
          $table->string('girbox',15)->nullable();
          $table->string('badane',15)->nullable();
          $table->integer('barand')->nullable();
          $table->integer('karkard')->nullable();
          $table->string('rang,15')->nullable();
          $table->smallInteger('salesakht')->nullable();
          $table->string('sanad')->nullable()->comment('سند اداری');
          $table->string('nahveforoush');
          $table->string('codemeli',10)->nullable();
          $table->tinyInteger('chat')->nullable()->comment('چت');
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
        Schema::dropIfExists('mashins');
    }
}
