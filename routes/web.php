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
    return view('welcome');
});

// // Get all projects
// Route::get('/projects','ProjectsController@index');
// Route::post('/projects','ProjectsController@store');
// // Create a project
// Route::get('/projects/create','ProjectsController@create');
// // Show a project
// Route::get('/projects/{project}','ProjectsController@show');
// // Edit a project
// Route::get('/projects/{project}/edit','ProjectsController@edit');
// // Update a project
// Route::patch('/projects/{project}','ProjectsController@update');
// // Delete a project
// Route::patch('/projects/{project}','ProjectsController@destroy');

Route::resource('projects','ProjectsController');