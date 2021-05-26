<?php

use App\Http\Controllers\OrderController;
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

// Route For Order
Route::resource('order', OrderController::class);

// Route For Status Only
Route::get('/status', [App\Http\Controllers\StatusController::class, 'index']);
Route::get('/status/create', [App\Http\Controllers\StatusController::class, 'create'])->name('status.create');
Route::post('/status/store', [App\Http\Controllers\StatusController::class, 'store'])->name('status.store');
Route::get('/status/{id}/edit', [App\Http\Controllers\StatusController::class, 'edit'])->name('status.edit');
Route::put('/status/{id}', [App\Http\Controllers\StatusController::class, 'update'])->name('status.udpate');
Route::delete('/status/{id}/delete', [App\Http\Controllers\StatusController::class, 'destroy'])->name('status.delete');