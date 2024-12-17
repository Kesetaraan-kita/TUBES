@extends('layouts.app')

@section('content')
<div class="container content">
    <h2 class="text-center mt-4">SELAMAT DATANG USER!</h2>
    <p class="text-center">Meningkatkan Kesadaran Akan Kesetaraan<br>Bersama, kita bisa menciptakan dunia yang lebih adil.</p>

    <!-- Carousel Section -->
    <div id="welcomeCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://assets.onecompiler.app/42vbn3cw5/432w7abuj/Rectangle%2017.png" class="d-block w-100 carousel-image" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://assets.onecompiler.app/42vbn3cw5/432w7abuj/Rectangle%2017.png" class="d-block w-100 carousel-image" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://assets.onecompiler.app/42vbn3cw5/432w7abuj/Rectangle%2017.png" class="d-block w-100 carousel-image" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mt-5">
            <!-- Kolom pertama -->
            <div class="col-md-6">
                <div class="card">
                  
                 <div class="card-header">
                    <img src="https://assets.onecompiler.app/42ve3wk6y/3ww47radw/image-removebg-preview%20(11).png" width="50px">
                        Lanjutkan Membaca Artikelmu & Ringkasan Harianmu
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Ringkasan Harian</strong>, wanita mengelas besi
                                <a href="#" class="card-link float-end">Lanjutkan</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Artikel</strong> Kesenjangan Gaji berdasarkan Gender
                                <a href="#" class="card-link float-end">Lanjutkan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kolom kedua -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img src="https://assets.onecompiler.app/432w6j563/432w6gzzs/WhatsApp%20Image%202024-12-13%20at%2013.36.35.jpeg" >
                        Aktivitas Lainnya
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Beri Feedback Untuk Kami</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>Telusuri Forum Komunitas dari Kesetaraan Kita</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .card img {
            max-width: 20%; /* Memastikan gambar tidak melebihi lebar kontainer */
            height: auto; /* Menjaga rasio aspek gambar */
            max-height: 50px; /* Ukuran maksimal tinggi gambar, Anda bisa menyesuaikan */
            
        }

        .card-header{
            background-color:rgb(14, 194, 53);
            font-weight: bold;
        }

        .card-link {
            text-decoration: none;
            color:rgb(3, 21, 226);
        }

    .carousel {
        max-width: 50%; /* Membatasi lebar maksimum carousel */
        margin: auto; /* Memusatkan carousel */
    }
    .carousel-inner img {
        max-height: 400px; /* Membatasi tinggi gambar carousel */
        object-fit: cover; /* Menjaga aspek rasio gambar */
        width: 100%; /* Memastikan gambar mengisi lebar carousel */
    }
    .custom-card {
        border-radius: 8px; /* Menambahkan sudut melengkung pada kartu */
        overflow: hidden; /* Menghindari konten keluar dari kartu */
        max-width: 100%; /* Membatasi lebar maksimum kartu */
        margin: auto; /* Memusatkan kartu di dalam kolom */
    }
    .card-header {
        background-color: #f0f0f0;
        font-weight: bold;
        text-align: center; /* Memusatkan teks header */
    }
    .list-group-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
@endsection