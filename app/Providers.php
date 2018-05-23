<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'providers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_provider', 'adress_provider', 'nrc_provider', 'nit_provider', 'giro_provider', 'exento_provider', 'exterior_provider', 'credito_activo_provider', 'limite_provider', 'excede_provider', 'retencion_provider', 'percepcion_provider', 'cuenta_conta_CXP', 'cuenta_conta_AC', 'dias_credito'];
}
