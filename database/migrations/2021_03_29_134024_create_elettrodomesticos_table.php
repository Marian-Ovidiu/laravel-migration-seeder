<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElettrodomesticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elettrodomesticos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('marchio', 100);
            $table->float('prezzo', 6,2);
            $table->tinyInteger('pezzi_disponibili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elettrodomesticos');
    }
}
