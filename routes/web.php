<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class,'getTask'])->name('home');

Route::post('add', [TaskController::class,'insert'])->name('insert');

Route::delete('task/{id}', [TaskController::class,'delete'])->name('remove');