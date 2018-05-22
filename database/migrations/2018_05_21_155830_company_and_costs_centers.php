<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyAndCostsCenters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // Table for "cost_centers_state" Module
      Schema::create('cost_centers_state', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 200);
      });

      // Table for "cost_centers" Module
      Schema::create('cost_centers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_center', 100);
          $table->string('adress_center', 250);
          $table->unsignedInteger('id_company');
          $table->unsignedInteger('id_cost_center_states');
          $table->unsignedInteger('id_municipality');
          $table->unsignedInteger('id_contact_entity');
          $table->foreign('id_company')->references('id')->on('companies');
          $table->foreign('id_cost_center_states')->references('id')->on('cost_center_states');
          $table->foreign('id_municipality')->references('id')->on('municipalities');
          $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
      });

      // Table for "companies_states" Module
      Schema::create('company_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 200);
      });

      // Table for "companies_types" Module
      Schema::create('company_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_type', 100);
          $table->string('description_type', 200);
      });

      // Table for "companies" Module
      Schema::create('companies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nit_company', 17);
          $table->string('name_company', 250);
          $table->string('adress_company', 250);
          $table->string('nrc_company', 45);
          $table->string('giro_company', 250);
          $table->string('no_patronal_ISSS', 50);
          $table->string('no_patronal_AFP', 50);
          $table->unsignedInteger('id_contact_entity');
          $table->unsignedInteger('id_company_state');
          $table->unsignedInteger('id_company_type');
          $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
          $table->foreign('id_company_state')->references('id')->on('company_states');
          $table->foreign('id_company_type')->references('id')->on('company_types');
      });

      // Table for "provider_states" Module
      Schema::create('provider_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 200);
      });

      // Table for "providers" Module
      Schema::create('providers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_provider', 100);
          $table->string('adress_provider', 200);
          $table->string('nrc_provider', 45);
          $table->string('nit_provider', 45);
          $table->string('giro_provider', 200);
          $table->integer('exento_provider');
          $table->integer('exterior_provider');
          $table->integer('credito_activo_provider');
          $table->decimal('limite_provider', 10,2);
          $table->integer('excede_provider');
          $table->decimal('retencion_provider', 10, 2);
          $table->decimal('percepcion_provider', 10, 2);
          $table->string('cuenta_conta_CXP', 45);
          $table->string('cuenta_conta_AC', 45);
          $table->string('dias_credito', 5);
          $table->unsignedInteger('id_contact_entity');
          $table->unsignedInteger('id_provider_state');
          $table->unsignedInteger('id_municipality');
          $table->unsignedInteger('id_company');
          $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
          $table->foreign('id_provider_state')->references('id')->on('provider_states');
          $table->foreign('id_municipality')->references('id')->on('municipalities');
          $table->foreign('id_company')->references('id')->on('companies');
      });

       // Table for "bank_account_types" Module
      Schema::create('bank_account_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_type', 100);
          $table->string('description_type', 200);
      });

       // Table for "bank_accounts" Module
      Schema::create('bank_accounts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('number_account', 100);
          $table->unsignedInteger('account_type');
          $table->unsignedInteger('id_company');
          $table->unsignedInteger('id_bank');
          $table->foreign('account_type')->references('id')->on('bank_account_types');
          $table->foreign('id_company')->references('id')->on('companies');
          $table->foreign('id_bank')->references('id')->on('banks');
      });

      // Table for "bank_states" Module
      Schema::create('bank_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 200);
      });

       // Table for "bank" Module
      Schema::create('bank', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_bank', 100);
          $table->unsignedInteger('id_bank_state');
          $table->unsignedInteger('id_company');
          $table->foreign('id_bank_state')->references('id')->on('bank_states');
          $table->foreign('id_company')->references('id')->on('companies');
      });

        // Table for "remittances" Module
      Schema::create('remittances', function (Blueprint $table) {
          $table->increments('id');
          $table->decimal('amount_remittance', 10, 2);
          $table->string('reference_remittance',250);
          $table->date('date_remittance');
          $table->string('cuenta', 50);
          $table->unsignedInteger('id_bank_state');
          $table->unsignedInteger('id_corte_caja');
          $table->foreign('id_bank_state')->references('id')->on('bank_states');
          $table->foreign('id_corte_caja')->references('id')->on('corte_cajas');
      });

      // Table for "legal_representatives" Module
      Schema::create('legal_representatives', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_lrepr',100);
          $table->string('surname_lrepr',100);
          $table->string('nit_lrepr',17);
          $table->string('dui_lrepr',10);
          $table->date('birthdate_lrepr');
          $table->string('email_lrepr',100);
          $table->string('phone_lrepr',100);
      });

      // Table for "client_states" Module
      Schema::create('client_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 200);
      });

       // Table for "clients" Module
      Schema::create('clients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_client', 100);
          $table->string('adress_client', 200);
          $table->string('nrc_client', 45);
          $table->string('nit_client', 45);
          $table->string('giro_client', 200);
          $table->integer('exento_client');
          $table->integer('exterior_client');
          $table->integer('cliente_activo_client');
          $table->integer('credito_activo_client');
          $table->decimal('limite_credito_client', 10,2);
          $table->integer('excede_client');
          $table->decimal('retencion_client', 10, 2);
          $table->decimal('percepcion_client', 10, 2);
          $table->string('cuenta_conta_CXP', 45);
          $table->string('cuenta_conta_AC', 45);
          $table->string('dias_credito', 5);
          $table->string('codigo_client', 45);
          $table->unsignedInteger('id_contact_entity');
          $table->unsignedInteger('id_client_state');
          $table->unsignedInteger('id_municipality');
          $table->unsignedInteger('id_company');
          $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
          $table->foreign('id_client_state')->references('id')->on('client_states');
          $table->foreign('id_municipality')->references('id')->on('municipalities');
          $table->foreign('id_company')->references('id')->on('companies');
      });

      // Table for "repxcomp" Module
      Schema::create('repxcomp', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_legal_representative');
          $table->unsignedInteger('id_company');
          $table->foreign('id_legal_representative')->references('id')->on('legal_representatives');
          $table->foreign('id_company')->references('id')->on('companies');
      });


      Schema::table('employees', function (Blueprint $table) {
          $table->unsignedInteger('id_cost_center');
          $table->foreign('id_cost_center')->references('id')->on('cost_centers');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repxcomp');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('client_states');
        Schema::dropIfExists('legal_representatives');
        Schema::dropIfExists('remittances');
        Schema::dropIfExists('bank');
        Schema::dropIfExists('providers');
        Schema::dropIfExists('provider_states');
        Schema::dropIfExists('bank_accounts');
        Schema::dropIfExists('bank_states');
        Schema::dropIfExists('bank_account_types');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_types');
        Schema::dropIfExists('company_states');
        Schema::dropIfExists('cost_centers');
        Schema::dropIfExists('cost_centers_state');

    }

}