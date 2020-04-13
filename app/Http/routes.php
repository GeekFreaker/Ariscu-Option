<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
use App\Task;
use Illuminate\Support\Facades\Input;


Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::get('/task/{task}/edit', 'TaskController@edit');

    // Route::controller('task','TaskController');

    Route::any('/search',function(){
    $q = Input::get('q');
    $tasks = Task::where('name','LIKE','%'.$q.'%')->get();
    if(count($tasks) > 0)
      return view('welcome')->with('tasks',$tasks)->withQuery($q);
    else
      return view ('welcome')->withMessage('No Details found. Try to search again !');
    });
});
