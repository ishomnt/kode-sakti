<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\IsiMateriController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master.index');
})->name('main');

Route::get('/video/{video}', [VideoController::class, 'show'])->name('video');

Route::get('/materi/{materi}', [MateriController::class, 'show'])->name('materi');

Route::get('/isi-materi/{isimateri}', [IsiMateriController::class, 'show'])->name('isi-materi');

Route::get('komunitas', function () {
    return view('komunitas.index');
})->name('komunitas');

Route::get('/quiz', function(){return view('pages.quiz.index');})->name('quiz');
