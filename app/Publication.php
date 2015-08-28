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

    /**
     * Get the people position (user text-friendly)
     *
     * @return string
     */
    public function getTextType()
    {
        switch($this->type) {
            case ('abstract_conference_commentary'):
                return 'Abstract, Conference and Commentary';
                break;
            case ('journal'):
                return 'Journal';
                break;
            case ('thesis'):
                return 'Thesis';
                break;
            default:
                return 'Not applicable';
        }
    }

    /**
     * Get the list of specified Publication type.
     *
     * @return mixed
     */
    public static function getPublicationType($type)
    {
        return Publication::where('type', '=', $type)->get();
    }
}
