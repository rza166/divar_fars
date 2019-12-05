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
          $table->integer('mainagahi_id')->unique();
           $table->string('typeagahi',10);
          $table->string('websayt',100)->nullable();
          $table->tinyInteger('chat')->nullable()->comment('چت');
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
