<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kesetaraan Kita</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* General Custom Styling */
    body {
      font-family: Arial, sans-serif;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 100vh;
      background: url('https://assets.onecompiler.app/42ve3wk6y/3ww47radw/089171000_1677040060-1_AGANHARAHAP.jpg') center/cover no-repeat;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
    }

    .overlay h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .overlay h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
    }

    .get-started {
      padding: 10px 20px;
      font-size: 1rem;
      background-color: #fff;
      color: #333;
      border: none;
      border-radius: 5px;
      font-weight: bold;
    }

    .get-started:hover {
      background-color: #f1f1f1;
    }

/*navbar*/

        body {
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #d32f2f;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .navbar-brand img {
            max-height: 60px;
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .content {
            margin-top: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .card-link {
            text-decoration: none;
            color: #d32f2f;
        }
       
        .carousel-item img {
            max-height: 300px;
            object-fit: cover; /* Memastikan gambar tetap rapi meski dipotong */
            width: 100%; /* Memastikan gambar tetap mengisi lebar */
        }

    /* Section styling for news */
    #news {
      padding: 50px 0;
      background-color: #f9f9f9;
    }

    .news-section {
      border-top: 2px solid #ccc;
      margin-top: 30px;
      padding-top: 30px;
    }

    /* Flexbox layout for news boxes */
    .news-boxes {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .news-item {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      flex: 1;
      max-width: 30%;
    }

    .news-item h3 {
      font-size: 1.6rem;
      margin-bottom: 15px;
    }

    .news-item p {
      font-size: 1rem;
      color: #555;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="https://assets.onecompiler.app/42ve3wk6y/3ww47radw/image%202.png" alt="Logo">
        Kesetaraan Kita
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <!-- Link ke bagian Berita -->
            <a class="nav-link" href="#news">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#campaign">Campaign</a>
          </li>
          <li class="nav-item">
            @if(Auth::check())
              <a class="nav-link fw-bold" href="#profile">{{ Auth::user()->name }}</a>
            @else
              <a class="nav-link fw-bold" href="{{ route('login') }}">Login</a>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="hero">
    <div class="overlay">
      <h1>Perempuan Punya Kekuatan</h1>
      <h2>Perempuan Layak Memimpin</h2>
      <a href="{{ route('login') }}" class="btn btn-light get-started">Get Started</a>
    </div>
  </main>

  <!-- Berita Unggulan -->
  <section id="news" class="hero-section">
    <h2 class="news-header text-center">Berita Unggulan</h2> <!-- Centering the title -->
    <div class="mt-3 text-center"> <!-- Centering the content -->
      <h3 class="fw-bold">
        Analisis Kesetaraan kita terhadap Data Kesenjangan Upah Berdasarkan Gender dari Biro Sensus Indonesia dan Biro Statistik Tenaga Kerja IDN Menunjukkan Sedikit Kemajuan
      </h3>
      <p class="text-muted">12 Oktober 2024</p>
      <p class="px-5"> <!-- Add padding on the left and right -->
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
      </p>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
