<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\IsiMateriController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;


Route::get('/', function () {
    return view('master.index');
})->name('main');

Route::get('/video/{video}', [VideoController::class, 'show'])->name('video');

Route::get('/materi/{materi}', [MateriController::class, 'show'])->name('materi');

Route::get('/isi-materi/{isimateri}', [IsiMateriController::class, 'show'])->name('isi-materi');

Route::get('/komunitas/{komunitas}', [KomunitasController::class, 'show'])->name('isi-komunitas');

Route::get('komunitas', function () {
    return view('komunitas.index');
})->name('komunitas');

Route::get('/quiz/{quiz}', [QuizController::class, 'show'])->name('quiz');
Route::get('/score', function(){return view('pages.quiz.score');})->name('score');
Route::get('/execute-code', [CodeController::class, 'executeCode']);
