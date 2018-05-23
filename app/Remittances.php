<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remittances extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'remittances';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['amount_remittance', 'reference_remittance', 'date_remittance', 'cuenta'];
}
