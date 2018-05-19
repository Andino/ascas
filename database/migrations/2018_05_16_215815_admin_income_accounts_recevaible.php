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
          $table->increments('id');
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

      // Table for "income_types" Module
      Schema::create('income_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_type', 80);
          $table->string('description_type', 200);
          $table->string('description_type', 50);
      });

      // Table for "incomes" Module
      Schema::create('incomes', function (Blueprint $table) {
          $table->increments('id');
          $table->decimal('ing_fac', 10, 2);
          $table->decimal('ing_ccf', 10, 2);
          $table->decimal('ing_exp', 10, 2);
          $table->decimal('imp_fac', 10, 2);
          $table->decimal('imp_ccf', 10, 2);
          $table->decimal('ext_fac', 10, 2);
          $table->decimal('ext_ccf', 10, 2);
          $table->decimal('ext_exp', 10, 2);
          $table->decimal('retencion', 10, 2);
          $table->decimal('percibido', 10, 2);
          $table->decimal('ext_exp', 10, 2);
          $table->decimal('subtotal', 10, 2);
          $table->unsignedInteger('id_income_type');
          $table->unsignedInteger('id_corte_caja');
          $table->foreign('id_income_type')->references('id')->on('income_types');
          $table->foreign('id_corte_caja')->references('id')->on('corte_caja');
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
