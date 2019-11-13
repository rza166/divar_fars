<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKHadamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_hadamats', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('city',20);
          $table->string('map',50)->nullable();
          $table->string('websayt',100)->nullable();
          $table->string('mobile',13);
          $table->tinyInteger('chat')->nullable()->comment('چت');
          $table->string('onvanagahi',50);
          $table->string('tozihat',150);
          $table->string('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_hadamats');
    }
}
