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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/mailjao', [App\Http\Controllers\TestmailController::class, 'mailjao'])->name('mailjao');
    Route::get('/mailsend',[App\Http\Controllers\ShuvoMailController::class, 'shuvomail'])->name('shuvomail');


