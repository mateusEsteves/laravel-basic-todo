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

Route::get('/', function () {
    return view('Task.index');
});

Route::post('/task', function(\Illuminate\Http\Request $request){

});

Route::delete('/task/{task}', function (\App\Task $task){

});