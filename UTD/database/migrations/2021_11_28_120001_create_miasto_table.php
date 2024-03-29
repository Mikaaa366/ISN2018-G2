<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiastoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miasto', function (Blueprint $table) {
            $table->id();
            $table->string('Nazwa_miasta', 50)->nullable(true)->default(null);
            $table->string('Kod_pocztowy', 6)->nullable(true)->default(null);
            $table->string('Wojewodztwo', 30)->nullable(true)->default(null);
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
        Schema::dropIfExists('miasto');
    }
}
