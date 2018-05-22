<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentReferenceType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table for "iva_documents_states" Module
        Schema::create('CxC', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "iva_documents_states" Module
        Schema::create('tipo_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "iva_documents_states" Module
        Schema::create('ref_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "iva_documents_states" Module
        Schema::create('CxP', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "iva_documents_states" Module
        Schema::create('estados_correlativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
