<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IvaPurchases extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'iva_purchases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['date_purchase',  'serie_document', 'com_grav_local', 'com_grav_imp', 'com_grav_inter', 'com_exent_local', 'com_exent_imp', 'com_exent_inter', 'credito_fiscal', 'ant_cta', 'referido_compra', 'percibido_compra', 'ret_terc', 'comp_excluido', 'reby_Dev', 'periodo', 'anio'];
}
