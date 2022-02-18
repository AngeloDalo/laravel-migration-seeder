<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 150);
            $table->string('stazione_partenza', 150);
            $table->string('stazione_arrivo', 150);
            $table->date('giorno');
            $table->time('orario_partenza', $precision = 0);
            $table->time('orario_arrivo', $precision = 0);
            $table->string('codice_treno', 10);
            $table->string('numero_carrozze', 100);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
        Schema::dropIfExists('trains');
    }
}
