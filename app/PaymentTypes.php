<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTypes extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_type';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_type', 'description_type', 'CXC_exchange'];
}
