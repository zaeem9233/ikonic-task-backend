<?php

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\CommentController;
use App\Http\Controllers\api\v1\FeedbackController;
use App\Http\Controllers\api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('v1/login', [AuthController::class, 'login']);
Route::post('v1/register', [AuthController::class, 'register']);
Route::post('v1/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('v1/categories', [CategoryController::class, 'index'])->middleware('auth:sanctum');
Route::post('v1/comment', [CommentController::class, 'create'])->middleware('auth:sanctum');
Route::get('v1/feedback', [FeedbackController::class, 'index'])->middleware('auth:sanctum');
Route::post('v1/feedback', [FeedbackController::class, 'create'])->middleware('auth:sanctum');
Route::get('v1/feedback/{id}', [FeedbackController::class, 'feedback'])->middleware('auth:sanctum');
Route::get('v1/user/{keyword}', [UserController::class, 'user'])->middleware('auth:sanctum');