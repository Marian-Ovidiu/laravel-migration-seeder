<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPezziVendutiToElettrodomesticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elettrodomesticos', function (Blueprint $table) {
            $table->tinyInteger('pezzi_venduti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elettrodomesticos', function (Blueprint $table) {
            $table->dropColumn('pezzi_venduti');
        });
    }
}
