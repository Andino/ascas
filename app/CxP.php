<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CxP extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cxp';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['debt_date', 'payment_date', 'due_date', 'charge_amount', 'abono', 'document_number', 'serial_number', 'ref_quedan', 'observation'];
}
