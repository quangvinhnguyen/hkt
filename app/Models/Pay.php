<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $fillable = [
    	'id',
    	'role_id',
    	'pay',
    ];

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }
}
