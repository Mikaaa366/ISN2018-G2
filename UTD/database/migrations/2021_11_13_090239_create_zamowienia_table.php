<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZamowieniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienia', function (Blueprint $table) {
            $table->bigIncrements('id_zamowienia');
            $table->integer('id_nadawca')->nullable(true)->default(null);
            $table->integer('id_odbiorca')->nullable(true)->default(null);
            $table->integer('Ilosc_sztuk')->default(0);
            $table->decimal('Kwota', $precision = 8, $scale = 2)->nullable(false);
            $table->integer('id_towaru')->nullable(false);
            $table->integer('id_opakowania')->nullable(false)->default(0);
            $table->integer('id_paczka')->nullable(false)->default(0);
            $table->integer('id_pojazd')->nullable(false);
            $table->integer('id_listu')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamowienia');
    }
}
