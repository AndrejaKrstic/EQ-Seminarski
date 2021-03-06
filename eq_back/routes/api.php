<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\PractiseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/words/{nivo}', [WordController::class, 'show'])->name('words.show');
Route::get('/words', [WordController::class, 'index'])->name('words.index');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('users', UserController::class)->only(['update', 'store', 'destroy']);
    Route::get('/words/imenice/{id}', [WordController::class, 'imenice']);
    Route::post('/vezbanje', [PractiseController::class, 'store']);
    Route::get('/napredak/{id}', [UserController::class, 'napredak']);
    Route::post('/users/password', [UserController::class, 'passwordChange']);
    Route::post('/levels', [PractiseController::class, 'getlevels']);
    Route::post('/domaci', [HomeworkController::class, 'addDomaci']);
    Route::get('/domaci', [HomeworkController::class, 'getAllDomaci']);
    Route::delete('/domaci/{id}', [HomeworkController::class, 'destroy']);


});


