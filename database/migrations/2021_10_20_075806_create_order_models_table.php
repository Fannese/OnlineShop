<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_models', function (Blueprint $table) {
            $table->id();
            $table->string('vorname');
            $table->string('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('straße');
            $table->string('plz');
            $table->string('stadt');
            $table->string('land');
            $table->string('telephon_nummer');
            $table->string('sendung_nr');
            $table->string('totalpreis');
            $table->string('zalung_methode');
            $table->string('zalung_id')->nullable();
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
        Schema::dropIfExists('order_models');
    }
}
