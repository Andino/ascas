<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IvaDocuments extends Model
{
  /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'iva_documents';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_document', 'description_document'];
}
