<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre");
            $table->integer("cedula");
            $table->string("genero");
            $table->integer("edad");
            $table->string("tipo_edad");
            $table->string("eps");
            $table->string("sintoma")->nullable();
            $table->float("glicemia")->nullable();
            $table->float("hemoglobina")->nullable();
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
        Schema::dropIfExists('patients');
    }
}
