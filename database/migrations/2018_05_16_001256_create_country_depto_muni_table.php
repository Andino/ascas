<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryDeptoMuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name_country", 150);

        });

        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name_department", 150);
            $table->unsignedInteger("id_country");
            $table->foreign('id_country')->references('id')->on('countries');

        });

        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('id_municipality');
            $table->string("name_municipality", 150);
            $table->unsignedInteger("id_department");
            $table->foreign('id_department')->references('id')->on('departments');
        });

        // Table for "income_type_states" Module
        Schema::create('entities_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_type', 100);
            $table->string('description_type', 200);
        });

        // Table for "income_type_states" Module
        Schema::create('contact_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_entity', 100);
            $table->unsignedInteger('type_entity');
            $table->foreign('type_entity')->references('id')->on('entities_types');
        });

        // Table for "income_type_states" Module
        Schema::create('method_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_type', 100);
            $table->string('description_type', 200);
        });

        // Table for "income_type_states" Module
        Schema::create('contact_method', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value', 100);
            $table->string('adress_center', 30);
            $table->unsignedInteger('id_contact_entity');
            $table->unsignedInteger('id_method_type');
            $table->foreign('id_contact_entity')->references('id')->on('contact_entities');
            $table->foreign('id_method_type')->references('id')->on('method_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('municipalities');
      Schema::dropIfExists('departments');
      Schema::dropIfExists('countries');
      Schema::dropIfExists('contact_method');
      Schema::dropIfExists('method_types');
      Schema::dropIfExists('contact_entities');
      Schema::dropIfExists('entities_types');
    }
}
