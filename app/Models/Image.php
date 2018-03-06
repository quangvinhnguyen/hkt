<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'room_id',
    ];

    public function room()
    {
    	return $this->belongsTo(Room::class);
    }

    public function getPathAttribute()
    {
    	if (empty($this->attributes['name'])) {
            return null;
        }

        $image = $this->attributes['name'];

        return asset(config('settings.path_image_room') . $image);
    }
}
