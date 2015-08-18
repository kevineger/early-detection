<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Fillable fields for Project.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
