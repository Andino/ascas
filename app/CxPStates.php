<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CxPStates extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cxp_states';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_state', 'description_state', 'password'];

}
