<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group w
hich
| contains the "web" middle ware group. Now create something great!
|
*/

use  Illuminate\Filesystem\Filesystem;

//use App\Service\Twitter;

//app()->singleton('App\Example', function(){
//    return new \App\Example;
//});


//Route::get('/', function (Twitter $twitter) {
//    dd($twitter);
//    
//    return view('welcome');
//});

/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)
*/

Route::resource('projects', 'ProjectsController');

//Route::get('/projects', 'ProjectsController@index');
//
//Route::get('/projects/{project}', 'ProjectsController@show');
//
//Route::get('/projects/create', 'ProjectsController@create');
//
//Route::post('/projects', 'ProjectsController@store');
//
//Route::post('/projects/{project}/edit', 'ProjectsController@edit');
//
//Route::patch('/projects/{project}', 'ProjectsController@update');
//
//Route::delete('/projects/{project}', 'ProjectsController@destroy');
//



Route::post('/projects/{project}/tasks', 'ProjectTasksController@store'); 

//Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/complete-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/complete-tasks/{task}', 'CompletedTasksController@destroy');






