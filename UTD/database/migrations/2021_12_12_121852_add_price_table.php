<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zamowienia', function (Blueprint $table) {
            $table->dropColumn('id_towaru');
            $table->dropColumn('id_paczka');
            $table->dropColumn('id_pojazd');
            $table->dropColumn('id_listu');
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
        Schema::table('zamowienia', function (Blueprint $table) {
            $table->integer('id_towaru')->nullable(false);
            $table->integer('id_paczka')->nullable(false)->default(0);
            $table->integer('id_pojazd')->nullable(false);
            $table->integer('id_listu')->nullable(false);
            $table->dropTimestamps();
        });
    }
}
