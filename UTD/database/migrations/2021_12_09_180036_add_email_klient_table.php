<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailKlientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('klient', function (Blueprint $table) {
            $table->string('email');
            $table->integer('phonenumber');
            $table->dropColumn('data_urodzenia');
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
        Schema::table('klient', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('phonenumber');
            $table->date('data_urodzenia');
            $table->dropTimestamps();
        });
    }
}
