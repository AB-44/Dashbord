<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prepation extends Model
{
    protected $guarded = [];

       public function students(){
        return $this->belongsTo(student::class,'students_id');
    }
           public function teachers(){
        return $this->belongsTo(teacher::class,'teachers_id');
    }
               public function claaes(){
        return $this->belongsTo(student_class::class,'class_id');
    }
                   public function courses(){
        return $this->belongsTo(student_class::class,'cours_id');
    }
}
