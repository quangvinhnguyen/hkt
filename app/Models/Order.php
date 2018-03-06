<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Orders extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
    	'name',
    	'room_id',
    	'status',
    	'time_in',
    	'time_out',
    	'time',
    	'quantity',
    	'total',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function room()
    {
    	return $this->belongsTo(Room::class);
    }

    public function setTimeInAttribute($value)
    {
    	$this->attributes['time_in'] = $value ?: Carbon::now();
    }

    public function setTimeOutAttribute($value)
    {
    	$this->attributes['time_out'] = $value ?: Carbon::now();
    }

    public function getTimeInAttribute()
    {
    	return $ = $value ?: Carbon::parse($this->attributes['time_in'])->format('d-m-Y H:i');
    }

    public function getTimeOutAttribute()
    {
    	return $ = $value ?: Carbon::parse($this->attributes['time_out'])->format('d-m-Y H:i');
    }

    public function time($type = 'hours')
    {
    	$timeIn = Carbon::parse($this->attributes['time_in'])->format('d-m-Y H:i');
    	$timeOut = Carbon::parse($this->attributes['time_out'])->format('d-m-Y H:i');
    	$time = 0;

    	if ($type == 'hours') {
    		$time = $timeOut->diffInHours($timeIn);
    	} elseif ($type == 'dates') {
    		$time = $timeOut->diffInDays($timeIn);
    	} elseif ($type == 'moths') {
    		$time = $timeOut->diffInMonths($timeIn);
    	} elseif ($type == 'years') {
    		$time = $timeOut->diffInYears($timeIn);
    	}

    	return ($time != 0) ? $time : 1;
    }

    // public function scopeOfTime($value = '')
    // {
    // 	# code...
    // }
}


// subMinute
// diffInMinutes()
// diffInHours()
// diffInDays()
// diffInYears()
// diffInMonths()
// diffInWeeks()
// diffInWeekdays()
// diffInWeekendDays()
// diffInDaysFiltered()
// diffInHoursFiltered()
// diffFiltered()