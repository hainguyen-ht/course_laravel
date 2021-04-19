<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';
    
    // public function joinCourseReg(){
    // 	return $this->hasMany(CourseReg::class,'id', 'account_id');
    // }

    public function joinCourse(){
    	return $this->belongsToMany(Course::class, 'course_reg', 'account_id', 'course_id');
    }
}
