<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\howMuchUnderstand;
use App\Unit;
use App\Day;
use App\Http\Requests\CreateSheet;

class SheetController extends Controller
{
    public function index(){
    	$days = Day::all();
    	return view("sheets.index", ["days" => $days]);
    }

    public function teacherCreate(){
    	$units = Unit::all();
    	return view("sheets.teacherCreate", ["units" => $units]);
    }

    public function store(CreateSheet $request){
    	
    	$day = new Day();
    	$day->date = $request->date;
    	$day->save();
    	return redirect()->route("sheets.index");
    }
}
