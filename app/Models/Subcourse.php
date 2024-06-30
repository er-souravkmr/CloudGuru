<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model
{
    use HasFactory;
    protected  $table = "subcourse";
    public function getSubCourse(){
        return $this->belongsTo(Courses::class,'course_id');
    }
}
