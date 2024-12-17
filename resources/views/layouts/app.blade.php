<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesetaraan Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
            max-height: 50px;
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
       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://assets.onecompiler.app/42ve3wk6y/3ww47radw/image%202.png" alt="Logo">
                Kesetaraan Kita
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/event">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Konseling</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Volunteer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pelatihan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                    <img src="https://assets.onecompiler.app/42ve3wk6y/3ww47radw/woman.png" alt="User Icon" style="width: 40px; height: 40px; border-radius: 50%;">
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content') <!-- Tempat untuk konten halaman lainnya -->
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>