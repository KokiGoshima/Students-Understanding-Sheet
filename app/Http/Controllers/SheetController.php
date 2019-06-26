<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\howMuchUnderstand;
use App\Unit;
use App\Day;
use App\Http\Requests\CreateSheet;
use App\Http\Requests\CreateUnit;

class SheetController extends Controller
{
    public function index(){
    	$days = Day::all();
    	return view("sheets.index", ["days" => $days]);
    }

    public function teacherCreate(CreateSheet $request){
    	$day = new Day();
    	$day->date = $request->date;
    	$day->save();
    	// dd(123);
    	return redirect()->route("sheets.teacherEdit", ["id" => $day->id]);
    }

    public function teacherEdit($id){
    	$day = Day::find($id);
    	$units = $day->units;
    	return view("sheets.teacherCreate", ["units" => $units]);
    }

    // public function store(CreateSheet $request){
    	
    // 	$day = new Day();
    // 	$day->date = $request->date;
    // 	$day->save();
    // 	return redirect()->route("sheets.index");
    // }

    public function unitCreate(){
    	return view("sheets.unitCreate");
    }  

    public function unitStore(CreateUnit $request){
    	$unit = new Unit();
    	$unit->content = $request->content;
    	$unit->teacher_id = $request->teacher_id;
    	$unit->day_id = $request->day_id;
    	$unit->save();
    	return redirect()->route("sheets.teacherCreate");
    }

    public function studentEdit($id){
    	$units = Unit::all();
    	return view('sheets.studentCreate', ["units" => $units]);
    }

    public function decideDay(){
    	return view("sheets.decideDay");
    }
}
