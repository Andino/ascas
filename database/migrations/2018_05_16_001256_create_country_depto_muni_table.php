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
            $table->increments('id_country');
            $table->string("name_country", 150);

        });

        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id_department');
            $table->string("name_department", 150);
            $table->unsignedInteger("id_country");
            $table->foreign('id_country')->references('id_country')->on('countries');
        });

        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('id_municipality');
            $table->string("name_municipality", 150);
            $table->unsignedInteger("id_department");
            $table->foreign('id_department')->references('id_department')->on('departments');
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
    }
}
