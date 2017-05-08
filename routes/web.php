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
use PM\Models\User;

Route::get('/', 'HomeController@index');

Route::get('setup', function(){
    $admin = new User();
    $admin->name = 'Administrator';
    $admin->email = 'admin@pm.dev';
    $admin->password = bcrypt('stablo');
    $admin->remember_token = str_random(10);
    $admin->save();
});

Route::resource('tasks', 'TaskController');
Route::resource('projects', 'ProjectController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
