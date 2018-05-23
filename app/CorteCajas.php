<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorteCajas extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'corte_cajas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ref_ano',  'ref_corr',  'fecha_hecho', 'observacion', 'ing_efectivo',  'ing_credito', 'ing_tarjCredito', 'abonos',  'anticipos', 'ing_otros'];
}
