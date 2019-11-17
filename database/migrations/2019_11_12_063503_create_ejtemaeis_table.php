<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjtemaeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejtemaeis', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('city',20);
          $table->string('map',50)->nullable();
          $table->string('typeagahi',10);
          $table->string('mobile',13);
          $table->tinyInteger('chat')->nullable()->comment('چت');
          $table->tinyInteger('numbertel')->nullable();
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
        Schema::dropIfExists('ejtemaeis');
    }
}
