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


use App\Http\Controllers\GugatanCeraiController;



//Route::get('/gugatan_cerai', [GugatanCeraiController::class, 'create'])->name('gugatan_cerai.create');
 Route::get('/gugatan_cerai', [GugatanCeraiController::class, 'create'])->name('gugatan_cerai.form');

Route::post('/gugatan_cerai/submit', [GugatanCeraiController::class, 'store'])->name('gugatan_cerai.submit');

// Route::get('/gugatan_cerai/detail/{id}', [GugatanCeraiController::class, 'show'])->name('gugatan_cerai.detail');
Route::get('/gugatan_cerai/detail/{id}', [GugatanCeraiController::class, 'show'])->name('gugatan_cerai.detail');
Route::get('/gugatan_cerai/generate-word/{id}', [GugatanCeraiController::class, 'generateWordDocument'])->name('gugatan_cerai.generate_word');
Route::get('/export-gugatan-cerai', [GugatanCeraiController::class, 'exportGugatanCerai']);
