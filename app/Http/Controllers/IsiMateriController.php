<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsiMateriController extends Controller
{
    public function show($isimateri)
    {
        // Cek topik yang diklik dan arahkan ke view yang sesuai
        switch ($isimateri) {
            case 'isi-materi-css1':
                return view('pages.materi.isi-materi.isi-materi-css1');
            case 'isi-materi-css2':
                return view('pages.materi.isi-materi.isi-materi-css2');
            case 'isi-materi-css3':
                return view('pages.materi.isi-materi.isi-materi-css3');

            case 'isi-materi-html1':
                return view('pages.materi.isi-materi.isi-materi-html1');
            case 'isi-materi-html2':
                return view('pages.materi.isi-materi.isi-materi-html2');
            case 'isi-materi-html3':
                return view('pages.materi.isi-materi.isi-materi-html3');

            case 'isi-materi-JavaScript1':
                return view('pages.materi.isi-materi.isi-materi-Js1');
            case 'isi-materi-JavaScript2':
                return view('pages.materi.isi-materi.isi-materi-Js2');
            case 'isi-materi-JavaScript3':
                return view('pages.materi.isi-materi.isi-materi-Js3');

            case 'isi-materi-php1':
                return view('pages.materi.isi-materi.isi-materi-Php1');
            case 'isi-materi-php2':
                return view('pages.materi.isi-materi.isi-materi-Php2');
            case 'isi-materi-php3':
                return view('pages.materi.isi-materi.isi-materi-Php3');

            default:
                abort(404);
        }
    }
}
