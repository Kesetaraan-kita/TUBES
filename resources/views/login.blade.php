<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login</title>
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

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 40px 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-container .logo img {
            width: 80px;
            margin-bottom: 20px;
        }

        .login-container .btn-primary {
            background-color: #0050ff;
            border: none;
            font-weight: bold;
        }

        .login-container .btn-primary:hover {
            background-color: #0030cc;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #888;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://assets.onecompiler.app/42ve3wk6y/42ve4c3yk/photoshoot%20pala%20bili.jpg" alt="Logo">
        </div>

        <!-- Alert Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="EMAIL DIRIMU" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">LOGIN</button>
            <a href="#" class="forgot-password">Forgot password?</a>
            <a href="{{ route('register') }}" class="forgot-password">tidak punya akun?</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
