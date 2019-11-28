<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageAgahisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_agahis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameTable',20)->nullable();
            $table->integer('recordId')->nullable();
            $table->String('nameImage1',60)->nullable();
            $table->String('nameImage2',60)->nullable();
            $table->String('nameImage3',60)->nullable();
            $table->String('nameImage4',60)->nullable();
            $table->String('nameImage5',60)->nullable();
            $table->String('nameImage6',60)->nullable();
            $table->String('Imageshow',60)->nullable();
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
        Schema::dropIfExists('image_agahis');
    }
}
