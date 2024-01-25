<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'showData']);
// Route::view('home', 'home');
Route::view('head', 'head');
Route::get('/edit/{id}', [TaskController::class, 'update']);
Route::view('javascript', 'javascript');
Route::view('addtask', 'addtask')->name('addtask');
Route::get('home', [TaskController::class, 'showData']);
Route::post('addtask', [TaskController::class, 'addData']);
Route::post('/update', [TaskController::class, 'updateData']);
Route::get('delete/{id}', [TaskController::class, 'delete']);
Route::get('/update-state/{id}', [TaskController::class, 'updateState']);
Route::get('completed', [TaskController::class, 'completed']);
Route::get('deleteCompleted/{id}', [TaskController::class, 'deleteCom']);
