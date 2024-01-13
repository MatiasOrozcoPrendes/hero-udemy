<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "admin"], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::resource('heroes', HeroController::class);
    Route::resource('items', ItemController::class);
    Route::resource('enemies', EnemyController::class);

    Route::get('bs', [App\Http\Controllers\BattleSystemController::class, 'index'])->name('admin.bs');
    
});