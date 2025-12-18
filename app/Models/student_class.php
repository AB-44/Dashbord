<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    protected $guarded = [];
    protected $table = 'student_class';
    public function students(){
        return $this->hasMany(student::class,'class_id');
    }
              public function prepation(){
            return $this->belongsTo(prepation::class,'class_id');
        }
}
