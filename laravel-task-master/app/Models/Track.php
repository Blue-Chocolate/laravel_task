<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['name', 'description', 'image'];



    function students(){
        return $this->hasMany(Student::class);
    }

    function course(){
        return $this->belongsToMany(Course::class, 'tracks_courses', 'track_id', 'course_id');
    }
}
