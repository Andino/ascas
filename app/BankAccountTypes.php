<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccountTypes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bank_account_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_type, description_type'];
}
