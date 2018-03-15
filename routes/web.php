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

Route::get('/', 'FilmsController@index');

Route::get('/unos', function () {
    return view('unos');
});

/*Route::get('/tasks', function () {
	//$tasks = DB::table('tasks')->get();
	$tasks = Task::all();
	//return $tasks; na ovaj nacin laravel casta json format
    return view('tasks.index', compact("tasks"));
});*/

/*Route::get('/tasks/{id}', function ($id) {
	
	//$task = DB::table('tasks')->find($id);
	$task = Task::find($id);
	//dd($task);
    return view('tasks.show', compact("task"));
});*/


