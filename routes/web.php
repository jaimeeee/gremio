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

Route::get('/', 'HomeController@home');

// Projectos
Route::get('proyectos/categoria/{category}', 'ProjectsController@category')->where(['category' => '[a-z0-9-]+']);
Route::get('proyectos/{project}', 'ProjectsController@project')->where(['project' => '[a-z0-9-]+']);

// About us
Route::get('nosotros', 'AboutUsController@index');
Route::get('nosotros/como', 'AboutUsController@how');
Route::get('nosotros/donde', 'AboutUsController@where');

// Lab
Route::get('lab', 'LabController@index');

// Contact
Route::get('contacto', 'ContactController@form');

// Auth
Auth::routes();
