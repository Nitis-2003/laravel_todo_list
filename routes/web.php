<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('pages.home');
});

Route::post('add', [TaskController::class,'insert'])->name('insert');