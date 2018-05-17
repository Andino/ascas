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
          $table->increments('id_permit');
          $table->string('permit_name', 10);
          $table->string('permit_description', 100);
      });

      /* The table "employees_types_levels" is used to distinguish the
      permissions that have the types of employees*/
      Schema::create('employees_types_levels', function (Blueprint $table) {
          $table->increments('id_employee_level');
          $table->string('level_employee', 10);
          $table->string('description_level', 100);
      });

      /* The table "employees_types" used for grant access levels to a
         employee in a differente modules*/
      Schema::create('employees_types', function (Blueprint $table) {
          $table->increments('id_employee_type');
          $table->string('name_employee_type', 100);
          $table->string('description_employee_type', 250);
      });

      /* The table "employees_types" used for grant access levels to a
         employee in a differente modules*/
      Schema::create('documents_types', function (Blueprint $table) {
          $table->increments('id_document_type');
          $table->string('name_document_type', 100);
          $table->string('description_document_type', 250);
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
            $table->string('genero_empleado', 10);
            $table->string('nacionalidad_empleado', 50)->nullable();
            $table->decimal('salario_nominal', 10, 0);
            $table->date('fecha_nacimiento');
            $table->string('estado_civil', 50)->nullable();
            $table->string('direccion_empleado', 250)->nullable();
            $table->string('tel_empleado', 100)->nullable();
            $table->string('email_empleado', 100)->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_retiro')->nullable();
            $table->string('role', 250)->nullable();
            $table->string('image', 250)->nullable();
            $table->unsignedInteger('id_municipality');
            $table->unsignedInteger('id_employee_type');
            $table->unsignedInteger('id_document_type');
            $table->foreign('id_employee_type')->references('id_employee_type')->on('employees_types');
            $table->foreign('id_municipality')->references('id_municipality')->on('municipalities');
            $table->foreign('id_document_type')->references('id_document_type')->on('documents_types');
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
      Schema::create('typxlev', function (Blueprint $table) {
          $table->increments('id_typxlev');
          $table->unsignedInteger('id_employee_type');
          $table->unsignedInteger('id_employee_level');
          $table->foreign('id_employee_type')->references('id_employee_type')->on('employees_types');
          $table->foreign('id_employee_level')->references('id_employee_level')->on('employees_types_levels');
      });

      /*The table "levxperm" is used to related the table "employees_types_levels"
      and the table permits*/
      Schema::create('levxperm', function (Blueprint $table) {
          $table->increments('id_levxperm');
          $table->unsignedInteger('id_employee_level');
          $table->unsignedInteger('id_permit');
          $table->foreign('id_employee_level')->references('id_employee_level')->on('employees_types_levels');
          $table->foreign('id_permit')->references('id_permit')->on('permits');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typxlev');
        Schema::dropIfExists('levxperm');
        Schema::dropIfExists('employees_logs');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('permits');
        Schema::dropIfExists('employees_types_levels');
        Schema::dropIfExists('employees_types');
        Schema::dropIfExists('documents_types');
    }
}
