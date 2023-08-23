<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AssigneeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/{id}', [TaskController::class, 'show']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('priorities', [PriorityController::class, 'index']);

Route::get('statuses', [StatusController::class, 'index']);

Route::get('assignees', [AssigneeController::class, 'index']);
Route::post('assignees', [AssigneeController::class, 'store']);
Route::get('assignees/{id}', [AssigneeController::class, 'show']);
Route::put('assignees/{id}', [AssigneeController::class, 'update']);
Route::delete('assignees/{id}', [AssigneeController::class, 'destroy']);
