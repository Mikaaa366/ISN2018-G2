<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazynTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazyn', function (Blueprint $table) {
            $table->Increments('id_magazynu');
            $table->string('nazwa_magazynu', 40)->nullable(false);
            $table->integer('numer');
            $table->decimal('pojemnosc_magazynu', $precision = 8, $scale = 2);
            $table->integer('id_ulicy')->nullable(false);
            $table->integer('id_miasta')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazyn');
    }
}
