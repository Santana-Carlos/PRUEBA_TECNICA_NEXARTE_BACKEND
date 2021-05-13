<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionsTable extends Migration
{
    // - id               (int) PK
    // - modelo           (string)
    // - precio           (string)
    // - nombre_cotizante (string)
    // - email_cotizante  (string)
    // - numero_cotizante (int)
    // - fecha_creacion   (date)
    // - departamento_id  (int) FK
    // - ciudad_id        (int) FK
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->string("modelo", 100);
            $table->string("precio", 100);
            $table->string("nombre_cotizante", 200);
            $table->string("email_cotizante", 200);
            $table->bigInteger("numero_cotizante");
            $table->date("fecha_creacion");
            $table->integer("departamento_id");
            $table->integer("ciudad_id");
            $table->foreign("departamento_id")->references("id")->on("departamentos");
            $table->foreign("ciudad_id")->references("id")->on("ciudads");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacions');
    }
}
