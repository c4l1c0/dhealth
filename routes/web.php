<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SignaController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TransactionController;


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


Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/', function () {
		return view('dashboard');
	});
	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::post('maketransaction', [TransactionController::class, 'bigstore']);

	Route::resource('medicines', MedicineController::class);
	Route::resource('signas', SignaController::class);
	Route::resource('recipes', RecipeController::class);
	Route::resource('transactions', TransactionController::class);
});
