<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show($video)
    {
        // Cek topik yang diklik dan arahkan ke view yang sesuai
        switch($video) {
            case 'tutorial-html-css':
                return view('pages.videos.video-html-css');
            case 'tutorial-javascript':
                return view('pages.videos.video-javascript');
            case 'tutorial-php':
                return view('pages.videos.video-php');
            case 'tutorial-laravel':
                return view('pages.videos.video-laravel');
            default:
                abort(404); 
        }
    }

}
