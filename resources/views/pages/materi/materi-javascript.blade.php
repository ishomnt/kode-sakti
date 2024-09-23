@extends('pages.materi.main-materi')
@section('title', 'Materi Javascript Dasar')
@section('content-materi')
    <div class="tutorial-header">
        <img src="{{ asset('image/js.png') }}" alt="Tutorial Image" class="tutorial-image">
        <div class="tutorial-text">
            <h1>Tutorial JS untuk Pemula</h1>
            <p>Belajar JS dasar dari Nol. Pahami tag-tag esensial yang sering dipakai. Lalu buat sendiri websitemu dengan
                JS. Selamat Belajar!</p>
        </div>
    </div>
    <hr>
    <div class="tutorial-list">
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-JavaScript1']) }}">
                <span class="icon">📄</span> Tutorial JavaScript #01: Pengenalan Dasar JavaScript
            </a>
        </div>
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-JavaScript2']) }}">
                <span class="icon">📄</span> Tutorial JavaScript #02: 4 Cara Menampilkan Output Pada JavaScript
            </a>
        </div>
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-JavaScript3']) }}">
                <span class="icon">📄</span> Tutorial JavaScript #03: Memahami Variabel Dan Tipe Data Dalam JavaScript
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-js-04.html">
                <span class="icon">📄</span> Tutorial JavaScript #04: Membuat Heading di JavaScript
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-js-05.html">
                <span class="icon">📄</span> Tutorial JavaScript #05: Cara Membuat Komentar
            </a>
        </div>
    </div>
@endsection
