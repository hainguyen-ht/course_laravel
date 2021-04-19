<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseReg extends Model
{
    use HasFactory;

    protected $table = 'course_reg';

    protected $fillable = ['course_id', 'account_id'];
}
