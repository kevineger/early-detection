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

    /**
     * A project belongs to many people.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->belongsToMany('App\People');
    }

    /**
     * A Project belongsTo ProjectCategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo('App\ProjectCategory', 'project_category_id');
    }
}
