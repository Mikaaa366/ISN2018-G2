<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpakowanieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opakowanie', function (Blueprint $table) {
            $table->id();
            $table->string('Rodzaj_opakowania', 20)->nullable(true)->default(null);
            $table->integer('Szerokosc')->nullable(true)->default(null);
            $table->integer('Dlugosc')->nullable(true)->default(null);
            $table->integer('Wysokosc')->nullable(true)->default(null);
            $table->double('Waga', 8, 2)->nullable(true)->default(null);
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
        Schema::dropIfExists('opakowanie');
    }
}
