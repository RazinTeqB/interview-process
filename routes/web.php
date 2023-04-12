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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/display',[TaskController::class, 'display']);
Route::get('/store',[TaskController::class, 'store']);
Route::post('/create',[TaskController::class, 'create']);
Route::get('/delete/{id}',[TaskController::class, 'delete']);
Route::get('/update/{id}',[TaskController::class,'update']);

