<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master.index');
});

Route::get('/video/{video}', [VideoController::class, 'show'])->name('video');

Route::get('/materi/{materi}', [MateriController::class, 'show'])->name('materi');

Route::get('komunitas', function () {
    return view('komunitas.index');
})->name('komunitas');

