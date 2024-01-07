<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kosan Landing Page')</title>
    <!-- Link ke stylesheet (misalnya, Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Tambahkan CSS kustom jika diperlukan -->
    <style>
        /* Gaya kustom Anda di sini */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        /* Gaya untuk bagian header */
        header {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 80px 0;
        }

        /* Gaya untuk bagian konten utama */
        .main-content {
            padding: 40px;
        }

        /* Gaya untuk setiap item kosan */
        .kosan-item {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffffff;
        }

        .centered-footer {
            text-align: center;
            margin-top: 150px;
        }

        /* CSS untuk button login */
        .login-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #337ab7;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        .login-button:hover {
            background-color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Link ke script JavaScript (opsional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Bagian Header -->
    <header>
        <h1>@yield('header', 'Selamat Datang di Indekos')</h1>
        <p>@yield('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')</p>

        <!-- Button untuk login -->
        <a href="/login" class="login-button">Login</a>

    
    </header>

    <!-- Bagian Konten Utama -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Bagian Footer (opsional) -->
    <!-- Bagian Footer (opsional) -->
    <footer class="centered-footer">
        <p>&copy; 2023 Indekos. All rights reserved.</p>
    </footer>




</body>

</html>
