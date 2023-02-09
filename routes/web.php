<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MealController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
    Route::post('profile.update.password/{user}',[ProfileController::class,'updatePassword'])->name('profile.update.password');
});
Route::post('Savemeal',[MealController::class,'save'])->name('Savemeal');
Route::get('edit/{id}',[MealController::class,'edit'])->name('edit');
Route::post('Updatemeal/{id}',[MealController::class,'update'])->name('Updatemeal');

  
