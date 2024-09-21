<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master.index');
});

Route::get('/video/{video}', [VideoController::class, 'show'])->name('video');

Route::get('semua-materi', function () {
    return view('materi.materi');
})->name('materi');

Route::get('materi-html', function () {
    return view('materi.html');
})->name('html');

Route::get('materi-css', function () {
    return view('materi.css');
})->name('css');

Route::get('materi-js', function () {
    return view('materi.js');
})->name('js');

Route::get('materi-php', function () {
    return view('materi.php');
})->name('php');

Route::get('komunitas', function () {
    return view('komunitas.index');
})->name('komunitas');

