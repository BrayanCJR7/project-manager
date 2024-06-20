<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('getAllProjects', 'App\Http\Controllers\ProjectController@getAllProjects');
Route::get('insertProject', 'App\Http\Controllers\ProjectController@insertProject');
Route::get('updateProject', 'App\Http\Controllers\ProjectController@updateProject');
Route::get('updateProjects', 'App\Http\Controllers\ProjectController@updateProjects');
