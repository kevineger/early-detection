<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    /**
     * Fillable fields for Project.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
    ];

    /**
     * A ProjectCategory hasMany Project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
