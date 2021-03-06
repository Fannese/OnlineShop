<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeschirrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geschirrs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bild');
            $table->longText('beschreibung');
            $table->string('preis');
            $table->string('anzahl');
            $table->string('kategorie');
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
        Schema::dropIfExists('geschirrs');
    }
}
