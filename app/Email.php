<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    /**
     * Fillable fields for People.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];
}
