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

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'desc')->get();

    return view('Task.index', compact('tasks'));
});

Route::post('/task', function (Request $request) {
    /*
     *  Essa classe 'Validator' valida os inputs
     *  que vem com a requisição, e não os campos da model
     */
    $validator = Validator::make($request->all(), [
        'task' => 'required|max:255'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->input('task');
    $task->save();

    return redirect('/');


});

Route::delete('/task/{task}', function (\App\Task $task) {
    $task->delete();
    return redirect('/');
});