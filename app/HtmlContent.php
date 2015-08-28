<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlContent extends Model {

    /**
     * Fillable fields for HtmlContent.
     *
     * @var array
     */
    protected $fillable = [
        'html',
        'page',
        'html_default',
    ];

    /**
     * Get the specified Page.
     *
     * @param $page
     * @return mixed
     */
    public static function getPage($page)
    {
        return HtmlContent::where('page', '=', $page)->firstOrFail();
    }
}
