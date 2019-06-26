<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\howMuchUnderstand;

class SheetController extends Controller
{
    public function index(){
    	$howMuchUnderstands = howMuchUnderstand::all();
    	return view("sheets.index", ["howMuchUnderstands" => $howMuchUnderstands]);
    }
}
