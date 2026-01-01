<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{

    public function studentClass(){
        return $this->belongsTo(student_class::class,'class_id');
    }
            public function prepation(){
            return $this->hasMany(prepation::class,'students_id');
        }
        public function courses(){
            return $this->belongsToMany(cours::class,'course_students', 'student_id', 'cours_id');
        }
    protected $guarded = [];

}
