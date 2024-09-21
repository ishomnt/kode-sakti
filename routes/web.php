<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master.index');
})->name('main');

Route::prefix('/materi')->group(function(){
    Route::get('/video-html-css', function(){return view('pages.videos.lihatvideohtmlcss');})->name('html-css');
    Route::get('/video-javascript', function(){return view('pages.videos.lihatvideoJs');})->name('javascript');
    Route::get('/video-php', function(){return view('pages.videos.lihatvideoPhp');})->name('php');
    Route::get('/video-laravel', function(){return view('pages.videos.lihatvideoLaravel');})->name('laravel');
});
