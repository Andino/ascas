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
        // Table for "CxC" Module
        Schema::create('CxC', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->decimal('charge_amount', 10, 2);
            $table->decimal('abono', 10, 2);
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('correlative_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('correlative_id')->references('id')->on('correlatives');
        });

        // Table for "payment_type" Module
        Schema::create('payment_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_type', 100);
            $table->string('description_type', 250);
            $table->unsignedInteger('CXC_exchange');
            $table->unsignedInteger('bank_id');
            $table->unsignedInteger('company_id');
            $table->foreign('CXC_exchange')->references('id')->on('CxC');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('company_id')->references('id')->on('companies');
        });

        // Table for "payment_references" Module
        Schema::create('payment_references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_reference', 100);
            $table->string('payment_observation', 250);
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
        });

        // Table for "cxp_states" Module
        Schema::create('cxp_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "CxP" Module
        Schema::create('CxP', function (Blueprint $table) {
            $table->increments('id');
            $table->date('debt_date');
            $table->date('payment_date');
            $table->date('due_date');
            $table->decimal('charge_amount', 10, 2);
            $table->decimal('abono', 10, 2);
            $table->integer('document_number');
            $table->string('serial_number', 45);
            $table->string('ref_quedan', 45);
            $table->string('observation', 250);
            $table->unsignedInteger('id_payment_reference');
            $table->unsignedInteger('id_iva_purchase');
            $table->unsignedInteger('id_cxp_state');
            $table->foreign('id_payment_reference')->references('id')->on('payment_references');
            $table->foreign('id_iva_purchase')->references('id')->on('iva_purchases');
            $table->foreign('id_cxp_state')->references('id')->on('cxp_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CxP');
        Schema::dropIfExists('cxp_states');
        Schema::dropIfExists('payment_references');
        Schema::dropIfExists('payment_type');
        Schema::dropIfExists('CxC');
    }
}
