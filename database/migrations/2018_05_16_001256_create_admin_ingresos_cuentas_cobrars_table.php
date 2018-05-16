<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminIngresosCuentasCobrarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table for "Empleado" Module
        Schema::create('corte_caja', function (Blueprint $table) {
            $table->increments('num_doc');
            $table->string('tipo_doc', 100);
            $table->string('tipo_doc', 100);
            `IdCargo` int(11) NOT NULL,
            `password` varchar(250) NOT NULL,
            `activo` tinyint(4) NOT NULL DEFAULT '1',
            `Nup` varchar(45) DEFAULT NULL,
            `InstitucionPrevisional` varchar(45) DEFAULT NULL,
            `PrimerNombre` varchar(45) NOT NULL,
            `SegundoNombre` varchar(45) DEFAULT NULL,
            `PrimerApellido` varchar(45) NOT NULL,
            `SegundoApellido` varchar(45) DEFAULT NULL,
            `ApellidoCasada` varchar(45) DEFAULT NULL,
            `ConocidoPor` varchar(45) DEFAULT NULL,
            `Nit` varchar(14) NOT NULL,
            `NumeroIsss` varchar(45) DEFAULT NULL,
            `NumeroInpep` varchar(45) DEFAULT NULL,
            `Genero` varchar(10) NOT NULL,
            `Nacionalidad` varchar(45) DEFAULT NULL,
            `SalarioNominal` decimal(10,0) NOT NULL,
            `FechaNacimiento` date NOT NULL,
            `EstadoCivil` varchar(45) DEFAULT NULL,
            `Direccion` varchar(250) DEFAULT NULL,
            `idDepartamento` varchar(10) NOT NULL,
            `idMunicipio` varchar(10) NOT NULL,
            `NumeroTelelefonico` varchar(45) DEFAULT NULL,
            `CorreoElectronico` varchar(100) DEFAULT NULL,
            `TipoEmpleado` varchar(45) NOT NULL DEFAULT 'P',
            `FechaIngreso` date NOT NULL,
            `FechaRetiro` date DEFAULT NULL,
            `role` varchar(250) DEFAULT NULL,
            `image` varchar(250) DEFAULT NULL,
            PRIMARY KEY (`Num_Doc`),
            KEY `Cargo_Empleado_idx` (`IdCargo`),
            KEY `fk_Empleado_idCod_Departamento1_idx` (`idDepartamento`),
            KEY `fk_Empleado_cod_municipio1_idx` (`idMunicipio`)
            // $table->timestamps();
        });
        // Table for "Corte de caja" Module
        Schema::create('corte_caja', function (Blueprint $table) {
            $table->increments('idCorteCaja');
            $table->year('ref_ano');
            $table->integer('ref_corr');
            $table->dateTime('fecha_hecho');
            $table->double('observacion', 2000);
            $table->double('ing_efectivo', 12, 2);
            $table->double('ing_credito', 12, 2);
            $table->double('ing_tarjCredito', 12, 2);
            $table->double('abonos', 12, 2);
            $table->double('anticipos', 12, 2);
            $table->double('ing_otros', 12, 2);
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado')->references('id_empleado')->on('employee');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_ingresos_cuentas_cobrars');
    }
}
