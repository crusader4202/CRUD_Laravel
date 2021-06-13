<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'index'])->name('home');
Route::post('/book', [BookController::class, 'add'])->name('create');
Route::get('/book', [BookController::class, 'list'])->name('table');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('modify');
Route::patch('/book/{id}', [BookController::class, 'update'])->name('updated');
Route::delete('/book/{id}', [BookController::class, 'delete'])->name('erase');

