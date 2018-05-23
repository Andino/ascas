<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorrelativeStates extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'correlative_states';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_state', 'description_state'];
}
