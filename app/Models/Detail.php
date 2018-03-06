<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
    	'id',
    	'service_id',
    	'order_id',
    ];

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function service($value='')
    {
    	return $this->belongsTo(Service::class);
    }

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }
}
