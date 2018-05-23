<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostCenterStates extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cost_centers_state';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_state', 'description_state'];
}
