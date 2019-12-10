<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khanes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('mainagahi_id')->unique();
          $table->string('onvanagahi',50);
          $table->string('mobile',13);
          $table->string('ostan');
          $table->string('city',20);
          $table->string('map',50)->nullable();
          $table->string('tozihat',240);
          $table->integer('price')->nullable();
          $table->tinyInteger('moaveze')->nullable()->comment('معاوضه');
          $table->string('typeagahi',10);
          $table->tinyInteger('chat')->nullable()->comment('چت');
          $table->string('menu');
          $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khanes');
    }
}
