@extends('layout/main')

@section('container')

<div class="mt-5">
    <h4>1. Membuat database “responsi_pemrograman_web” di MySQL</h4>
    <h4>2. Setelah membuat controller, sesuaikan konfigurasi .env dengan konfigurasi MySQL(databasenya)</h4>
    <h4>3. Membuat model menggunakan php artisan dengan perintah
php artisan make:model Post –migration</h4>
    <h4>4. Hasil generate bisa dilihat di app/Models/Post.php </h4>
    <h4>5. Lakukan kostumisasi tabel database pada migration sesuai kebutuhan lalu jalankan $ php artisan migrate</h4>
</div>
    
@endsection