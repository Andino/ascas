<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientStates extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client_states';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_state', 'description_state'];
}
