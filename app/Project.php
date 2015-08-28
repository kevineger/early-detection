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
        'description',
        'project_category_id',
    ];

    /**
     * A project belongs to many people.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peoples()
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
