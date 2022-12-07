<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * @method static create(array $fields)
 */
class Project extends Model
{
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'url';
    }

}



