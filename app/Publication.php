<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    /**
     * Fillable fields for Patient.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'reference',
        'url',
        'date'
    ];
}
