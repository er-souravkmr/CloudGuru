<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table ="course";
    public function getSubCourse(){
        return $this->hasOne(Subcourse::class,'course_id ');
    }
}
