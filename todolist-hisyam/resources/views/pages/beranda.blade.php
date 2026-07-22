@extends('layouts.master')

@section('content')
<div class="container mt-3">
        <h1>Kamu Berada di Halaman Beranda !</h1>
        <div class="card">
            <div class="card"></div>
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang di Todolist {{ $nama }}, Seorang {{ $posisi }}</h5>
                    <p class="card-text">Todolist {{ $nama }} adalah aplikasi sederhana untuk membantu kamu mengatur tugas-tugas harianmu. Dengan fitur yang mudah digunakan, kamu dapat dengan cepat menambahkan, mengedit, dan menghapus tugas-tugasmu. Ayo mulai mengatur hari-harimu dengan Todolist {{ $nama }}!</p>
                </div>
            </div>
        </div>
    </div>  
@endsection