<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentReferences extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_references';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['payment_reference', 'payment_observation'];
}
