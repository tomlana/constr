<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaisTable extends Migration
{
    
    public function up()
    {
        Schema::create('materiais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('desc');
            $table->string('marca');
            $table->integer('quant');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('materiais');
    }
}
