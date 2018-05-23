<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'incomes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ing_fac', 'ing_ccf', 'ing_exp', 'imp_fac', 'imp_ccf', 'ext_fac', 'ext_ccf', 'ext_exp', 'retencion', 'percibido', 'subtotal'];
}
