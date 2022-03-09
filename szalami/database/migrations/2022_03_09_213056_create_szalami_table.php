<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szalamik', function (Blueprint $table) {
            $table->id();
            $table->string("Termek neve");
            $table->string("Termek ara/kg");
            $table->string("termek alapanyaga");
            $table->string("termek gyartasi ideje");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('szalamik');
    }
};
