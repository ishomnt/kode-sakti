@extends('pages.materi.main-materi')
@section('title', 'Materi HTML Dasar')
@section('content-materi')
    <h2 class="section-title">Materi HTML</h2>
    <div class="tutorial-header">
        <img src="{{ asset('image/html.png') }}" alt="Tutorial Image" class="tutorial-image">
        <div class="tutorial-text">
            <h1>Tutorial HTML untuk Pemula</h1>
            <p>Belajar HTML dasar dari Nol. Pahami tag-tag esensial yang sering dipakai. Lalu buat sendiri websitemu dengan
                HTML. Selamat Belajar!</p>
        </div>
    </div>
    <hr>
    <div class="tutorial-list">
        <div class="tutorial-item">
            <a href="tutorial-html-01.html">
                <span class="icon">📄</span> Tutorial HTML #01: Pengenalan Dasar HTML untuk Pemula
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-html-02.html">
                <span class="icon">📄</span> Tutorial HTML #02: Mengenal Tag, Elemen, dan Atribut dalam HTML
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-html-03.html">
                <span class="icon">📄</span> Tutorial HTML #03: Membuat Paragraf di HTML
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-html-04.html">
                <span class="icon">📄</span> Tutorial HTML #04: Membuat Heading di HTML
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-html-05.html">
                <span class="icon">📄</span> Tutorial HTML #05: Cara Membuat Komentar
            </a>
        </div>
    </div>
@endsection
