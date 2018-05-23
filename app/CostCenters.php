<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostCenters extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cost_centers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_center', 'adress_center'];
}
