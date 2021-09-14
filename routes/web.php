<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('comments/random', [\App\Http\Controllers\GreetController::class, 'random']);

Route::get('comments/{message}', [\App\Http\Controllers\GreetController::class, 'greet']);

Route::get('comments/freedom/{text}' ,[\App\Http\Controllers\GreetController::class, 'text']);
