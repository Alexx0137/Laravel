<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $fields)
 */
class Project extends Model
{
    use  HasFactory;
    use SoftDeletes;

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




