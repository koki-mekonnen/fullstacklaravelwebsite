<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('layout');
});
/*
Route::get('/todos', function () {
    return view('tasks');
});*/
Route::get('/add', [TodoController::class, 'index']);
Route::post('/add', [TodoController::class, 'addtodo']);
Route::get('/todos', [TodoController::class, 'viewtodo']);
Route::post('/todos', [TodoController::class, 'addtodo']);
Route::patch('/{todo}', [TodoController::class, 'complete']);

Route::delete('/{todo}', [TodoController::class, 'destroy']);
