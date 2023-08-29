<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded=[];
    function teacher() {
        return $this->belongsTo(Teacher::class)->withDefault();
    }
    function student() {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }
    function available_times() {
        return $this->belongsTo(AvailableTime::class,'available_time_id')->withDefault();
    }
}
