<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IvaDocumentTypes extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'iva_document_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_type', 'description_type'];
}
