<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Fillable fields for People.
     *
     * @var array
     */
    protected $fillable = [
        'people_id',
        'link',
    ];

    /**
     * A link belongs to a people.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function people()
    {
        return $this->belongsTo('App\People');
    }
}
