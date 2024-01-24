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

Route::get('/', function () {
    return view('tampilan');
});


Route::get('/gugatan_cerai', [GugatanCeraiController::class, 'create'])->name('gugatan_cerai.form');
Route::post('/gugatan_cerai/submit', [GugatanCeraiController::class, 'store'])->name('gugatan_cerai.submit');
Route::get('/gugatan_cerai/{id}/edit', [GugatanCeraiController::class, 'edit'])->name('gugatan_cerai.edit');
Route::put('/gugatan_cerai/{id}', [GugatanCeraiController::class, 'update'])->name('gugatan_cerai.update');
Route::get('gugatan_cerai/index', [GugatanCeraiController::class, 'index'])->name('gugatan_cerai.index');
Route::get('/gugatan_cerai/detail/{id}', [GugatanCeraiController::class, 'show'])->name('gugatan_cerai.detail');
Route::get('/gugatan_cerai/generate-word/{id}', [GugatanCeraiController::class, 'generateWordDocument'])->name('gugatan_cerai.generate_word');

use App\Http\Controllers\PermohonanDispenController;


Route::get('/permohonan_dispen', [PermohonanDispenController::class, 'create'])->name('permohonan_dispen.form');
Route::post('/permohonan_dispen/submit', [PermohonanDispenController::class, 'store'])->name('permohonan_dispen.submit');
Route::get('/permohonan_dispen/{id}/edit', [PermohonanDispenController::class, 'edit'])->name('permohonan_dispen.edit');
Route::put('/permohonan_dispen/{id}', [PermohonanDispenController::class, 'update'])->name('permohonan_dispen.update');
Route::get('permohonan_dispen/index', [PermohonanDispenController::class, 'index'])->name('permohonan_dispen.index');
Route::get('/permohonan_dispen/detail/{id}', [PermohonanDispenController::class, 'show'])->name('permohonan_dispen.detail');
Route::get('/permohonan_dispen/generate-word/{id}', [PermohonanDispenController::class, 'generateWordDocument'])->name('permohonan_dispen.generate_word');



