<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortownieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortownie', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa_sortowni', 50);
            $table->string('miasto', 30);
            $table->string('ulica', 50);
            $table->string('numer',20);
            $table->string('województwo', 50);
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
        Schema::dropIfExists('sortownie');
    }
}
