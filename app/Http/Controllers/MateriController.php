<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function show($materi)
    {
        // Cek topik yang diklik dan arahkan ke view yang sesuai
        switch($materi) {
            case 'materi-html':
                return view('pages.materi.materi-html');
            case 'materi-javascript':
                return view('pages.materi.materi-javascript');
            case 'materi-php':
                return view('pages.materi.materi-php');
            case 'materi-css':
                return view('pages.materi.materi-css');
            default:
                abort(404);
        }
    }
}
