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

// Route::get('/', function () {		//closure -> function which has scope only inside a 
// 											//			 method (NOTE: Usually not named!!)
//     return view('welcome');
// });

// Route::get('/create','StudentsController@create');

// Route::get('/students','StudentsController@list');

// Route::get('/list','StudentsController@table');

// Route::get('/','StudentsController@home');



//Routes for Employees

Route::get('/employees','EmployeesController@index');

Route::post('/employees','EmployeesController@store');

Route::get('/employees/create','EmployeesController@create');

Route::get('/employees/edit','EmployeesController@edit');



//Routes for Posts

Route::get('/posts','PostsController@index');

Route::post('/posts','PostsController@store');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/edit','PostsController@edit');



//Routes for Comments

Route::get('/comments','CommentsController@index');

Route::post('/comments','CommentsController@store');

Route::get('/comments/create','CommentsController@create');

Route::get('/comments/edit','CommentsController@edit');



//Routes for Roles

Route::get('/roles','RolesController@index');

Route::post('/roles','RolesController@store');

Route::get('/roles/create','RolesController@create');

Route::get('/roles/edit','RolesController@edit');







