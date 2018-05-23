<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_client', 'adress_client', 'nrc_client', 'nit_client', 'giro_client', 'exento_client', 'exterior_client', 'cliente_activo_client', 'credito_activo_client', 'limite_credito_client', 'excede_client', 'retencion_client', 'percepcion_client', 'cuenta_conta_CXP', 'cuenta_conta_AC', 'dias_credito', 'codigo_client'];

}
