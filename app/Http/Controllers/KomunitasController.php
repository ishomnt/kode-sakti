<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function show($komunitas){
        switch($komunitas) {
            case 'komunitas-php':
                return view('pages.isikomunitas.isikomunitas1');
            case 'komunitas-css':
                return view('pages.isikomunitas.isikomunitas2');
            case 'komunitas-js':
                return view('pages.isikomunitas.isikomunitas3');
            default:
                abort(404);
        }
    }
}
