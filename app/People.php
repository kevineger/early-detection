<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    /**
     * Fillable fields for People.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'position',
        'education',
        'description',
    ];

    /**
     * A person belongsToMany projects.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //~~~HELPER~METHODS~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    /**
     * Get the people position (user text-friendly)
     *
     * @return string
     */
    public function getTextType()
    {
        switch($this->type) {
            case ('current_student'):
                return 'Current Student';
            break;
            case ('past_student'):
                return 'Past Student';
            break;
            case ('current_staff'):
                return 'Current Staff';
            break;
            case ('past_staff'):
                return 'Past Staff';
            break;
            case ('partner'):
                return 'Partner';
            break;
            default:
                return 'Not applicable';
        }
    }

    /**
     * Get the list of current students.
     *
     * @return mixed
     */
    public static function getPeopleType($type)
    {
        return People::where('type', '=', $type)->get();
    }

    /**
     * A people hasMany links
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links()
    {
        return $this->hasMany('App\Link');
    }

}
