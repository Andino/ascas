<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RrhhCharges extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rrhh_charges';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_charge', 'description_charge'];
}
