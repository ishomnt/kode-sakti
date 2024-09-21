<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master.index');
})->name('main');

Route::get('/materi/{materi}', [VideoController::class, 'show'])->name('materi');
