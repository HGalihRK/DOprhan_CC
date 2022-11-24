<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function courseBookings(){
        return $this->hasMany(CourseBooking::class);
    }
}
