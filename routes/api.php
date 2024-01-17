<?php

use App\Http\Controllers\BookRestController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'book','as'=>'book.'], function(){
    Route::get('',[BookRestController::class, 'gets'])->name('gets');
    Route::post('',[BookRestController::class, 'post'])->name('post');
    Route::get('/{id}',[BookRestController::class, 'get'])->name('get');
    Route::delete('/{id}',[BookRestController::class, 'delete'])->name('delete');
});
