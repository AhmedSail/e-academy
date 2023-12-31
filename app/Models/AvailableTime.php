<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableTime extends Model
{
    use HasFactory;
    protected $guarded=[];
    function teacher(){
        return $this->belongsTo(Teacher::class)->withDefault();
    }
    function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
