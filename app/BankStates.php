<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankStates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bank_states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_state, description_state'];
}
