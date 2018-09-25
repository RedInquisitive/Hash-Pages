<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Auth@welcome');
Route::get('/post', "Post@create")->middleware("auth");
Route::post('/post', "Post@store")->middleware("auth");
Route::get('/register', "Auth@register")->middleware("guest");
Route::post('/register', 'Auth@store')->middleware("guest");
Route::get('/auth/login', 'Auth@login')->middleware("guest");
Route::post('/auth/login', 'Auth@auth')->middleware("guest");
Route::get('/auth/logout', 'Auth@logout')->middleware("auth");
Route::get('/settings', 'Settings@index')->middleware("auth");
Route::get('/post', 'Post@index')->middleware("auth");
