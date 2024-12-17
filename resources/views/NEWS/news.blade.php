<!-- resources/views/news.blade.php -->
@extends('layouts.app')

@section('content')
  <!-- Berita Unggulan -->
  <section id="news" class="hero-section">
    <h2 class="news-header text-center">Berita Unggulan</h2>
    <div class="mt-3 text-center">
      <h3 class="fw-bold">
        Analisis Kesetaraan kita terhadap Data Kesenjangan Upah Berdasarkan Gender...
      </h3>
      <p class="text-muted">12 Oktober 2024</p>
      <p class="px-5">Lorem Ipsum is simply dummy text...</p>
      <a href="#" class="text-danger fw-bold">BACA PERNYATAAN SELENGKAPNYA</a>
    </div>
  </section>

  <!-- Berita Terbaru (Card Layout) -->
  <section class="mt-5">
    <h2 class="news-header">Terbaru</h2>
    <div class="row mt-3">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Hak-Hak Perempuan">
          <div class="card-body">
            <h5 class="card-title">HAK-HAK PEREMPUAN</h5>
            <p class="card-text">Informasi mengenai perjuangan dan hak-hak perempuan yang harus diakui oleh semua pihak.</p>
            <a href="#" class="btn btn-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Kampanye">
          <div class="card-body">
            <h5 class="card-title">KAMPANYE</h5>
            <p class="card-text">Kami mengadakan berbagai kampanye untuk meningkatkan kesadaran akan kesetaraan gender.</p>
            <a href="#" class="btn btn-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Government">
          <div class="card-body">
            <h5 class="card-title">GOVERNMENT</h5>
            <p class="card-text">Pemerintah berperan penting dalam menyusun kebijakan untuk mendukung kesetaraan gender.</p>
            <a href="#" class="btn btn-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
