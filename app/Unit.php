<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
    	"content", "teacher_id", "day_id",
    ];

    public function day(){
    	return $this->belongsTo("App\Day");
    }
}
