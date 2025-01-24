<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'gender', 'image', 'track_id'];


    function track(){
        return $this->belongsTo(Track::class);
    }

}
