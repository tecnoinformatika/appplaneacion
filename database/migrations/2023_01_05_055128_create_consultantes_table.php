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
        Schema::create('consultantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->integer('comuna_id')->nullable();
            $table->integer('barrio_id')->nullable();
            $table->string('nombresE')->nullable();
            $table->string('apellidosE')->nullable();
            $table->string('edad')->nullable();
            $table->integer('grado')->nullable();
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
        Schema::dropIfExists('consultantes');
    }
};
