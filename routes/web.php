<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'SheetController@index')->name('sheets.index');

Route::post('sheets/teacherCreate', 'SheetController@teacherCreate')->name('sheets.teacherCreate');

Route::post('sheets/store', 'SheetController@store')->name('sheets.store');

Route::get('sheets/{param}/studentEdit', 'SheetController@studentEdit')->name('sheets.studentEdit');

Route::put('sheets/{param}/studentUpdate', 'SheetController@studentUpdate')->name('sheets.studentUpdate');

Route::get('sheets/unitCreate', 'SheetController@unitCreate')->name('sheets.unitCreate');

Route::post('sheets/unitStore', 'SheetController@unitStore')->name('sheets.unitStore');

Route::get('sheets/{param}/teacherEdit', 'SheetController@teacherEdit')->name('sheets.teacherEdit');

Route::get('sheets/decideDay', 'SheetController@decideDay')->name('sheets.decideDay');

