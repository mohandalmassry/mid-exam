<?php

use App\Http\Controllers\ExamController;
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


Route::get('/create', [ExamController::class,'getAllExponses']);

Route::post('/expenses',  [ExamController::class, 'insert']);
Route::get('/expenses',  [ExamController::class, 'insert']);

Route::delete('delete/{id}', [ExamController::class, 'delete']);
Route::post('update/{id}',[ExamController::class, 'update']);



