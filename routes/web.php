<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotesController;

use App\Http\Controllers\CategoryController;

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
    return view('frontend.index');
});

Route::resource('/dashboard', NotesController::class);
Route::resource('/menu', MenuController::class);
Route::resource('/category', CategoryController::class);

Route::get('/{relasi}', [NotesController::class, 'custom']);
Route::put('/star/{id}', [NotesController::class, 'star']);
Route::put('/un_star/{id}', [NotesController::class, 'un_star']);