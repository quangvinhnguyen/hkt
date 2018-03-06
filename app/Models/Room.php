<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
    	'id',
    	'category_id',
    	'price',
    	'sale',
    	'status',
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
