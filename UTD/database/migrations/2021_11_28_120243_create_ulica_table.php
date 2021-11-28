<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulica', function (Blueprint $table) {
            $table->id();
            $table->string('Nazwa_ulicy', 50)->nullable(true)->default(null);
            $table->integer('Numer_domu')->nullable(true)->default(null);
            $table->integer('Numer_mieszkania')->nullable(true)->default(null);
            $table->foreignId('id_miasta')->constrained('miasto');
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
        Schema::dropIfExists('ulica');
    }
}
