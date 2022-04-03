<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\controller_nav;
use App\Models\category;
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
Route::get('/',[controller_nav::class, 'index']);
Route::get('/post/{post:slug}', [controller_nav::class, 'post']);
Route::get('/category/{category:slug}',[controller_nav::class, 'category']);
Route::get('/author/{author:username}',[controller_nav::class, 'author']);