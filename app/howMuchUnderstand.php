<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class howMuchUnderstand extends Model
{
    protected $fillable = [
    	"level", "question", "student_id", "unit_id",
    ];
}
