<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city',20);
            $table->string('map',50)->nullable();
            $table->integer('price')->nullable();
            $table->tinyInteger('moaveze')->nullable()->comment('معاوضه');
            $table->string('typeagahi',10);
            $table->tinyInteger('simkart')->nullable();
            $table->smallInteger('sazandeh')->nullable();
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
        Schema::dropIfExists('electricis');
    }
}
