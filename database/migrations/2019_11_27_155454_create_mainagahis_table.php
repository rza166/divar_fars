<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainagahisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainagahis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('collection',20);
            $table->string('onvanagahi',50);
            $table->string('mobile',13);
            $table->string('ostan');
            $table->string('city',20);
            $table->string('map',50)->nullable();
            $table->string('tozihat',240);
            $table->integer('date');
           $table->boolean('show');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mainagahis');
    }
}
