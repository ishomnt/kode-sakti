@extends('pages.materi.main-materi')
@section('title', 'Materi PHP Dasar')
@section('content-materi')
    <div class="tutorial-header">
        <img src="{{ asset('image/php.png') }}" alt="Tutorial Image" class="tutorial-image">
        <div class="tutorial-text">
            <h1>Tutorial PHP untuk Pemula</h1>
            <p>Belajar PHP dasar dari Nol. Pahami tag-tag esensial yang sering dipakai. Lalu buat sendiri websitemu dengan
                PHP. Selamat Belajar!</p>
        </div>
    </div>
    <hr>
    <div class="tutorial-list">
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php1']) }}">
                <span class="icon">📄</span> Tutorial PHP #01: Pengenalan Dasar Pemrograman PHP
            </a>
        </div>
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php2']) }}">
                <span class="icon">📄</span> Tutorial PHP #02: Sintaks Dasar PHP Yang Wajib Kamu Pahami
            </a>
        </div>
        <div class="tutorial-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php3']) }}">
                <span class="icon">📄</span> Tutorial PHP #03: 5 Hal Dasar Yang Harus Diketahui Tentang Variabel Dan Tipe
                Data
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-php-04.html">
                <span class="icon">📄</span> Tutorial PHP #04: Membuat Heading di PHP
            </a>
        </div>
        <div class="tutorial-item">
            <a href="tutorial-php-05.html">
                <span class="icon">📄</span> Tutorial PHP #05: Cara Membuat Komentar
            </a>
        </div>
    </div>
@endsection
