<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

      /**
     * The custom primary key used by the model.
     *
     * @var UnsignedInteger
     */
    protected $primaryKey = 'num_doc';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['password_empleado', 'activo_empleado', 'nup_empleado', 'institucion_previsional', 'primer_nombre', 'segundo_nomgre', 'primer_apellido', 'segundo_apellido', 'apellido_casada', 'conocido_por', 'nit_empleado', 'numero_isss', 'numero_inpep', 'salario_nominal', 'fecha_nacimiento', 'direccion_empleado', 'fecha_ingreso', 'fecha_retiro', 'role', 'image,'];
}
