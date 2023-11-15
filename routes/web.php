<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/houses/{house}', [HomeController::class, 'show'])->name('houses.show');

Auth::routes();

Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
Route::get('/houses/{house}/edit', [HouseController::class, 'edit'])->name('houses.edit');
Route::put('/houses/{house}', [HouseController::class, 'update'])->name('houses.update');
Route::get('/houses/search', [HouseController::class, 'search'])->name('houses.search');
Auth::routes();

