<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesAndPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /* The table "employees_types_levels" is used to distinguish the
      permissions that have the types of employees*/
      Schema::create('permits', function (Blueprint $table) {
          $table->increments('id');
          $table->string('permit_name', 10);
          $table->string('permit_description', 100);
      });

      /* The table "employees_types_levels" is used to distinguish the
      permissions that have the types of employees*/
      Schema::create('employees_types_levels', function (Blueprint $table) {
          $table->increments('id');
          $table->string('level_employee', 10);
          $table->string('description_level', 100);
      });

      /* The table "employees_types" used for grant access levels to a
         employee in a differente modules*/
      Schema::create('employees_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_employee_type', 100);
          $table->string('description_employee_type', 250);
      });

      /* The table "employees_types" used for grant access levels to a
         employee in a differente modules*/
      Schema::create('documents_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_document_type', 100);
          $table->string('description_document_type', 250);
      });

      /* The table "genres" is used to have a catalog of genres and
         that you can not add erroneous data*/
      Schema::create('genres', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_genre', 20);
      });

      /* The table "marital_state" is used to have a catalog of all the marital states and
         that you can not add erroneous data*/
      Schema::create('marital_state', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_mstate', 50);
      });

      /* The table "rrhh_charges_states" is used to have a catalog of all the states for the charges of the human resources
      department and that you can not add erroneous data*/
      Schema::create('rrhh_charge_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 250);
      });

      /* The table "rrhh_charges" is used to have a catalog of all the charges of the human resources
      department and that you can not add erroneous data*/
      Schema::create('rrhh_charges', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_charge', 100);
          $table->string('description_charge', 250);
          $table->unsignedInteger('id_rrhh_charge_state');
          $table->foreign('id_rrhh_charge_state')->references('id')->on('rrhh_charge_states');
      });

       /* The table "rrhh_departments_states" is used to have a catalog of all the states for the human resources
          departments and that you can not add erroneous data*/
      Schema::create('rrhh_departments_states', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_state', 100);
          $table->string('description_state', 250);
      });

      /* The table "rrhh_deparment_contacts" is used to have a catalog of all the contacts for the human resources
          department and that you can not add erroneous data*/
      Schema::create('rrhh_deparment_contacts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_contact', 100);
          $table->string('description_contact', 250);
      });

      /* The table "rrhh_charges" is used to have a catalog of all the human resources
      department and that you can not add erroneous data*/
      Schema::create('rrhh_departments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_departments', 100);
          $table->string('description_departments', 250);
          $table->unsignedInteger('id_rrhh_departments_state');
          $table->unsignedInteger('id_contact_department');
          $table->foreign('id_rrhh_departments_state')->references('id')->on('rrhh_departments_states');
          $table->foreign('id_contact_department')->references('id')->on('rrhh_deparment_contacts');
      });

      // Table for "employees" Module
      Schema::create('employees', function (Blueprint $table) {
            $table->string('num_doc', 30);
            $table->string('password_empleado', 250);
            $table->tinyInteger('activo_empleado');
            $table->string('nup_empleado', 45)->nullable();
            $table->string('institucion_previsional', 250)->nullable();
            $table->string('primer_nombre', 50);
            $table->string('segundo_nomgre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->string('apellido_casada', 50)->nullable();
            $table->string('conocido_por', 50)->nullable();
            $table->string('nit_empleado', 14);
            $table->string('numero_isss', 50)->nullable();
            $table->string('numero_inpep', 50)->nullable();
            $table->decimal('salario_nominal', 10, 0);
            $table->date('fecha_nacimiento');
            $table->string('direccion_empleado', 250)->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_retiro')->nullable();
            $table->string('role', 250)->nullable();
            $table->string('image', 250)->nullable();
            $table->unsignedInteger('id_genre');
            $table->unsignedInteger('id_marital_state');
            $table->unsignedInteger('id_municipality');
            $table->unsignedInteger('id_employee_type');
            $table->unsignedInteger('id_document_type');
            $table->unsignedInteger('id_rrhh_charge');
            $table->unsignedInteger('id_contact_entity');
            // $table->unsignedInteger('id_cost_center');
            $table->foreign('id_genre')->references('id_genre')->on('genres');
            $table->foreign('id_marital_state')->references('id')->on('marital_state');
            $table->foreign('id_municipality')->references('id')->on('municipalities');
            $table->foreign('id_employee_type')->references('id')->on('employees_types');
            $table->foreign('id_document_type')->references('id')->on('documents_types');
            $table->foreign('id_rrhh_charge')->references('id')->on('rrhh_charges');
            $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
            // $table->foreign('id_cost_center')->references('id')->on('costs_centers');
            $table->primary('num_doc');
        });

      /*The table "Employees_Logs" is used to register to record all actions made
        by the employees*/
      Schema::create('employees_logs', function (Blueprint $table) {
          $table->increments('id_log');
          $table->string('action_log', 200);
          $table->date('date_log');
          $table->string('num_doc', 30);
          $table->foreign('num_doc')->references('num_doc')->on('employees');
      });

      /*The table "typxlev" is used to related the table "employees_types_levels"
      and the table employees_types*/
      Schema::create('chaxdep', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_rrhh_charge');
          $table->unsignedInteger('id_rrhh_department');
          $table->foreign('id_rrhh_charge')->references('id')->on('rrhh_charges');
          $table->foreign('id_rrhh_department')->references('id')->on('rrhh_departments');
      });

      /*The table "typxlev" is used to related the table "employees_types_levels"
      and the table employees_types*/
      Schema::create('typxlev', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_employee_type');
          $table->unsignedInteger('id_employee_level');
          $table->foreign('id_employee_type')->references('id')->on('employees_types');
          $table->foreign('id_employee_level')->references('id_employee_level')->on('employees_types_levels');
      });

      /*The table "levxperm" is used to related the table "employees_types_levels"
      and the table permits*/
      Schema::create('levxperm', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_employee_level');
          $table->unsignedInteger('id_permit');
          $table->foreign('id_employee_level')->references('id')->on('employees_types_levels');
          $table->foreign('id_permit')->references('id')->on('permits');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('chaxdep');
        Schema::dropIfExists('typxlev');
        Schema::dropIfExists('levxperm');
        Schema::dropIfExists('employees_logs');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('permits');
        Schema::dropIfExists('employees_types_levels');
        Schema::dropIfExists('employees_types');
        Schema::dropIfExists('documents_types');
        Schema::dropIfExists('rrhh_departments');
        Schema::dropIfExists('rrhh_charges');
        Schema::dropIfExists('rrhh_charge_states');
        Schema::dropIfExists('rrhh_departments_states');
        Schema::dropIfExists('rrhh_deparment_contacts');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('marital_state');
    }
}
