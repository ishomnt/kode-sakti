<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($quiz)
    {
        // Cek topik yang diklik dan arahkan ke view yang sesuai
        switch ($quiz) {
            case 'quiz-html':
                return view('pages.quiz.quiz-html');
            case 'quiz-javascript':
                return view('pages.quiz.quiz-javascript');
            case 'quiz-php':
                return view('pages.quiz.quiz-php');
            case 'quiz-css':
                return view('pages.quiz.quiz-css');
            default:
                abort(404);
        }
    }
}
