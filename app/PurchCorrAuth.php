<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchCorrAuth extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purch_corr_auth';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['purch_corr_auth', 'serie', 'from', 'to', 'date'];
}
