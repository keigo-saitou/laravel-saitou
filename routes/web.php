<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//最初にrequestを確認してからURLを確認.
Route::get('/', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}', [PostController::class ,'show']);// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::delete('/posts/{post}', [PostController::class,'delete']);
