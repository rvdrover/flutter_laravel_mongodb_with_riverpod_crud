<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('emps', [EmpController::class, 'index']);
Route::get('emps/{id}', [EmpController::class, 'show']);
Route::post('emps', [EmpController::class, 'store']);
Route::put('emps/{id}', [EmpController::class, 'update']);
Route::delete('emps/{id}', [EmpController::class, 'destroy']);