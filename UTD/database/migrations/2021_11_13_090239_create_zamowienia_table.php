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
            $table->bigIncrements(id_zamowienia);
            $table->integer(id_nadawca, 11, );
            $table->integer(id_odbiorca, 11);
            $table->integer(Ilosc_sztuk);
            $table->integer(Kwota);
            $table->integer(id_towaru);
            $table->integer(id_opakowania);
            $table->integer(id_paczka);
            $table->integer(id_pojazd);
            $table->integer(id_listu);
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
