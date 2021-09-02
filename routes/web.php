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

Route::get('/', fn() => view('home'));

Route::get('/learn', fn() => view('learn'));

Route::get('/fingerspelling', fn() => view('fingerspelling'));

Route::get('/contact', fn() => view('contact'));

Route::get('/forum', fn() => view('forum'));
