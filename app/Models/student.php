<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{

    public function studentClass(){
        return $this->belongsTo(student_class::class,'class_id');
    }
            public function prepation(){
            return $this->belongsTo(prepation::class,'students_id');
        }
    protected $guarded = [];

}
