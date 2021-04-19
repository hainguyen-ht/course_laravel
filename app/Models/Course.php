<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $table = 'course';

    // public function joinCategory(){
    // 	return $this->hasOne(Category::class,'id', 'category_id');
    // }
    public function joinAccount(){
    	return $this->belongsToMany(Account::class, 'course_reg', 'course_id', 'account_id');
    }
}
