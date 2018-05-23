<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccounts extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bank_accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['number_account'];
}
