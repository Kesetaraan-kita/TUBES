<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesetaraan Kita Discussions</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Tambahkan jika ingin eksternal CSS -->
    <style>
        /* Resetting Default Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header Section */
        header {
            background-color: #d12e60;
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo img {
            width: 50px;
            margin-right: 10px;
        }

        header h1 {
            font-size: 1.5em;
        }

        /* Main Section */
        main {
            padding: 40px 20px;
            text-align: center;
        }

        .title {
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1em;
            color: #666;
            margin-bottom: 30px;
        }

        /* Search Bar */
        .search-bar {
            margin: 20px auto;
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-bar input {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #d12e60;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 1em;
        }

        .search-bar button:hover {
            background-color: #b02453;
        }

        /* Card Container */
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #d12e60;
            border-radius: 8px;
            width: 200px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: left;
        }

        .card h3 {
            font-size: 1.2em;
            margin-bottom: 5px;
            color: #333;
        }

        .card p {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 15px;
        }

        .card .details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card .details span {
            font-size: 0.9em;
            color: #333;
        }

        .card .details i {
            font-size: 1.2em;
            color: #666;
        }

        /* View More Section */
        .view-more {
            margin-top: 20px;
            font-size: 1em;
            color: #d12e60;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .view-more i {
            font-size: 1.2em;
            margin-left: 5px;
        }

        .view-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> <!-- Sesuaikan dengan path gambar -->
            <h1>Kesetaraan Kita</h1>
        </div>
    </header>
    <main>
        <h2 class="title">Kesetaraan Kita Discussions</h2>
        <p class="subtitle">All things about Kesetaraan Kita and platform</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for community...">
            <button>🔍 Search</button>
        </div>
        <div class="card-container">
            @php
                $cards = [
                    ['title' => 'Kesetaraan Kita Discussions', 'description' => 'Kesetaraan Kita themes, logos, etc', 'comments' => 2900],
                    ['title' => 'Kesetaraan Kita Design', 'description' => 'Kesetaraan Kita themes, logos, etc', 'comments' => 1500],
                    ['title' => 'Community AMA (Ask Me Anything)', 'description' => 'Kesetaraan Kita related Q&A', 'comments' => 1800],
                    ['title' => 'Volunteer Discussions', 'description' => 'Discuss volunteering opportunities', 'comments' => 800],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="card">
                    <h3>{{ $card['title'] }}</h3>
                    <p>{{ $card['description'] }}</p>
                    <div class="details">
                        <i>💬</i>
                        <span>{{ $card['comments'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="view-more">
            <span>View More</span>
            <i>⬇</i>
        </div>
    </main>
</body>
</html>