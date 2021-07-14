<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index']);

Route::get('/animals/create', [AnimalController::class, 'create']);
Route::post('/animals/store', [AnimalController::class, 'store']);

Route::get('/animals/{id}/show', [AnimalController::class,'show']);

Route::get('/animals/{id}/edit', [AnimalController::class,'edit']);
Route::put('/animals/{id}/update', [AnimalController::class,'update']);


Route::delete('/animals/{id}/delete', [AnimalController::class,'destroy']);