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
     * Get the people position (user text-friendly)
     *
     * @return string
     */
    public function getType()
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
}
