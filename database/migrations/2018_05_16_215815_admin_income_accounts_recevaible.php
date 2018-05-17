<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminIncomeAccountsRecevaible extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Table for "Corte de caja" Module
      Schema::create('corte_caja', function (Blueprint $table) {
          $table->increments('id_corte_caja');
          $table->year('ref_ano');
          $table->integer('ref_corr');
          $table->dateTime('fecha_hecho');
          $table->double('observacion', 600);
          $table->double('ing_efectivo', 12, 2);
          $table->double('ing_credito', 12, 2);
          $table->double('ing_tarjCredito', 12, 2);
          $table->double('abonos', 12, 2);
          $table->double('anticipos', 12, 2);
          $table->double('ing_otros', 12, 2);
          $table->string('num_doc', 30);
          $table->foreign('num_doc')->references('num_doc')->on('employees');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corte_caja');
    }
}
