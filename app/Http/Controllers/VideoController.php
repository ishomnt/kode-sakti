<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show($video)
    {
        // Cek topik yang diklik dan arahkan ke view yang sesuai
        switch ($video) {
            case 'tutorial-html':
                return view('pages.videos.video-html');
            case 'tutorial-javascript':
                return view('pages.videos.video-javascript');
            case 'tutorial-php':
                return view('pages.videos.video-php');
            case 'tutorial-css':
                return view('pages.videos.video-css');
            default:
                abort(404);
        }
    }
}
