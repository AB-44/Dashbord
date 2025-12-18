<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prepation extends Model
{
    protected $guarded = [];

       public function students(){
        return $this->hasMany(student::class,'students_id');
    }
           public function teachers(){
        return $this->hasMany(teacher::class,'teachers_id');
    }
               public function claaes(){
        return $this->hasMany(student_class::class,'class_id');
    }
                   public function courses(){
        return $this->hasMany(student_class::class,'cours_id');
    }
}
