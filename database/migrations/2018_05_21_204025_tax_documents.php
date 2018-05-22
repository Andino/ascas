<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaxDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table for "iva_documents_states" Module
        Schema::create('iva_documents_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

       // Table for "iva_documents" Module
        Schema::create('iva_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_document', 100);
            $table->string('description_document', 250);
            $table->unsignedInteger('id_document_state');
            $table->unsignedInteger('id_company');
            $table->foreign('id_document_state')->references('id')->on('iva_documents_states');
            $table->foreign('id_company')->references('id')->on('companies');
        });

        // Table for "doc_lib_iva_states" Module
        Schema::create('doc_lib_iva_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "doc_util_lib_iva" Module
        Schema::create('doc_util_lib_iva', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_libro_iva');
            $table->unsignedInteger('id_iva_document');
            $table->unsignedInteger('id_doc_lib_iva_state');
            $table->foreign('id_libro_iva')->references('id')->on('iva_documents');
            $table->foreign('id_iva_document')->references('id')->on('iva_purchases');
            $table->foreign('id_doc_lib_iva_state')->references('id')->on('doc_lib_iva_states');
        });

        // Table for "iva_document_types" Module
        Schema::create('iva_document_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_type', 100);
            $table->string('description_type', 250);
        });

        // Table for "income_type_states" Module
        Schema::create('iva_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_purchase', 45);
            $table->string('serie_document', 45);
            $table->string('com_grav_local', 45);
            $table->string('com_grav_imp', 45);
            $table->string('com_grav_inter', 45);
            $table->string('com_exent_local', 45);
            $table->string('com_exent_imp', 45);
            $table->string('com_exent_inter', 45);
            $table->string('credito_fiscal', 45);
            $table->string('ant_cta', 45);
            $table->string('referido_compra', 45);
            $table->string('percibido_compra', 45);
            $table->string('ret_terc', 45);
            $table->string('comp_excluido', 45);
            $table->string('reby_Dev', 45);
            $table->string('periodo', 45);
            $table->string('anio', 45);
            $table->unsignedInteger('id_iva_document_type');
            $table->unsignedInteger('id_provider');
            $table->foreign('id_iva_document_type')->references('id')->on('iva_document_types');
            $table->foreign('id_provider')->references('id')->on('providers');
        });

        // Table for "correlative_states" Module
        Schema::create('correlative_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "correlatives" Module
        Schema::create('correlatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_number', 45);
            $table->date('date');
            $table->unsignedInteger('id_correlative_states');
            $table->unsignedInteger('id_purch_corr_auth');
            $table->foreign('id_correlative_states')->references('id')->on('correlatives_states');
            $table->foreign('id_purch_corr_auth')->references('id')->on('purch_corr_auth');
        });

        // Table for "purch_corr_auth_states" Module
        Schema::create('purch_corr_auth_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_state', 100);
            $table->string('description_state', 250);
        });

        // Table for "purch_corr_auth" Module
        Schema::create('purch_corr_auth', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resolution_number', 100);
            $table->string('serie', 45);
            $table->integer('from');
            $table->integer('to');
            $table->date('date');
            $table->unsignedInteger('id_purch_corr_auth_states');
            $table->unsignedInteger('id_iva_document_type');
            $table->foreign('id_purch_corr_auth_states')->references('id')->on('purch_corr_auth_states');
            $table->foreign('id_iva_document_type')->references('id')->on('iva_document_types');
        });

        // Table for "correlatives" Module
        Schema::create('printers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_printer', 250);
            $table->string('nit_printer', 45);
            $table->string('nrc_printer', 45);
            $table->unsignedInteger('id_purch_corr_auth');
            $table->foreign('id_purch_corr_auth')->references('id')->on('purch_corr_auth');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iva_documents_states');
        Schema::dropIfExists('iva_documents');
        Schema::dropIfExists('doc_lib_iva_states');
        Schema::dropIfExists('doc_util_lib_iva');
        Schema::dropIfExists('iva_document_types');
        Schema::dropIfExists('iva_purchases');
        Schema::dropIfExists('correlative_states');
        Schema::dropIfExists('correlatives');
        Schema::dropIfExists('purch_corr_auth_states');
        Schema::dropIfExists('purch_corr_auth');
        Schema::dropIfExists('printers');
    }
}
