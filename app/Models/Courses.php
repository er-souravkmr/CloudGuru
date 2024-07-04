<?php

namespace App\Models;

use App\Models\Subcourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Courses extends Model
{
    use HasFactory;
    protected $table ="course";
    public function subcourses(){
        return $this->hasMany(Subcourse::class,'course_id');
    }
}
