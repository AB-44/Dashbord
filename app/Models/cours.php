<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $guarded = [];
    protected $table = 'courses';
       public function teacherS(){
        return $this->hasMany(teacher::class,'corse_id');
    }
              public function prepation(){
            return $this->belongsTo(prepation::class,'cours_id');
        }

}
