<?php

namespace App\Models;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcourse extends Model
{
    use HasFactory;
    protected  $table = "subcourse";
    public function courses(){
        return $this->belongsTo(Courses::class,'course_id');
    }
}
