<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'logo'];


    function track(){
        return $this->belongsToMany(Track::class, 'tracks_courses', 'course_id', 'track_id');
    }

}
