@extends('pages.materi.main-materi')
@section('title', 'Materi CSS Dasar')
@section('content-materi')
    <h2 class="section-title">Materi CSS</h2>
    <div class="tutorial-header">
        <img src="{{ asset('image/css2.png') }}" alt="Tutorial Image" class="tutorial-image">
        <div class="tutorial-text">
            <h1>Tutorial CSS untuk Pemula</h1>
            <p>Belajar CSS dasar dari Nol. Pahami tag-tag esensial yang sering dipakai. Lalu buat sendiri websitemu
                dengan CSS. Selamat Belajar!</p>
        </div>
    </div>
    <hr>
    <div class="tutorial-list">
        <div class="tutorial-item">
            <a href="tutorial-css-01.html">
                <span class="icon">📄</span> Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-css-02.html">
                <span class="icon">📄</span> Tutorial CSS #02: Cara Menulis CSS Di HTML
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-css-03.html">
                <span class="icon">📄</span> Tutorial CSS #03: Sintaks Dasar CSS Yang Harus Dipahami
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-css-04.html">
                <span class="icon">📄</span> Tutorial CSS #04: Membuat Heading di CSS
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-css-05.html">
                <span class="icon">📄</span> Tutorial CSS #05: Cara Membuat Komentar
            </a>
        </div>
    </div>
@endsection
