<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
    	"date",
    ];

    public function units(){
    	return $this->hasmany("App\Unit");
    }
}
