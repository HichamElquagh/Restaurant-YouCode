<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\HomeController;

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

// Route::get('/dash', function () {
//     return view('home');
// });
Route::get('/dash',[HomeController::class,'index'])->name('dash');
// Route::post('/dash',[HomeController::class,'save'])->name('dash.save');
// form method="post" action{{ route('dash.save') }}


Route::get('/', [MealController::class,'showlanding'])->name('welcome');


Auth::routes();

Route::get('/home',[MealController::class,'showlanding'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
    Route::post('profile.update.password/{user}',[ProfileController::class,'updatePassword'])->name('profile.update.password');
});
Route::post('storemeal',[MealController::class,'store'])->name('storemeal');
Route::get('edit/{id}',[MealController::class,'edit'])->name('edit');
Route::post('Updatemeal/{id}',[MealController::class,'update'])->name('Updatemeal');
Route::get('delete/{id}',[MealController::class,'delete'])->name('delete');

  
