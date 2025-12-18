<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
        protected $guarded = [];
        public function courses(){
            return $this->belongsTo(cours::class,'corse_id');
        }
              public function prepation(){
            return $this->belongsTo(prepation::class,'teachers_id');
        }


}
