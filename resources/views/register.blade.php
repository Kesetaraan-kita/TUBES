<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff0050, #0050ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 40px 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .register-container .logo img {
            width: 120px;
            margin-bottom: 5px;
        }

        .register-container .btn-primary {
            background-color: #0050ff;
            border: none;
            font-weight: bold;
        }

        .register-container .btn-primary:hover {
            background-color: #0030cc;
        }

        .already-account {
            margin-top: 10px;
            font-size: 12px;
            color: #888;
        }

        .already-account a {
            color: #0050ff;
            text-decoration: none;
        }

        .already-account a:hover {
            color: #0030cc;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo">
            <!-- Ganti dengan path logo yang sesuai -->
            <img src="https://assets.onecompiler.app/42ve3wk6y/3ww47radw/image%202.png" alt="Logo">
        </div>
        <h3>Bikin Akun</h3>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="already-account">
            klo ude pny akun lgsg login aje <a href="{{ route('login') }}">Login didieu</a>
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
