<?php

namespace App\Models;


use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static create(array $fields)
 */
class Project extends Model
{
    use  HasFactory;

    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'url';
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}




