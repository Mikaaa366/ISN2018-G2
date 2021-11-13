<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klient', function (Blueprint $table) {
            $table->bigIncrements('id_klienta');
            $table->string('imie', 20)->nullable(false);
            $table->string('nazwisko', 50)->nullable(false);
            $table->date('data_urodzenia')->nullable(false);
            $table->integer('id_ulicy')->nullable(false);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klient');
    }
}
