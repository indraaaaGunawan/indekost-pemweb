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
            background-image: url('/images/background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: whitesmoke;
            text-align: center;
            padding: 80px 0;
            font-family: 'Verdana Bold';
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .subtitle {
            text-align: center;
            padding: 80px 0;
            font-family: 'Verdana Bold';
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: whitesmoke;
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
        <h3>@yield('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')</h3>

        <!-- Button untuk login -->
        @guest
            <a href="/login" class="btn btn-primary">Login</a>
        @endguest
        @auth
            <a href="/logut" class="btn btn-warning mr-2">Logout</a>
            @auth
                @if (auth()->user()->role == 'admin')
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z">
                            </path>
                        </svg>
                        {{ auth()->user()->name }}
                    </a>
                @else
                    <a href="{{ route('userProfile') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z">
                            </path>
                        </svg>
                        {{ auth()->user()->name }}
                    </a>
                @endif
            @endauth
        @endauth

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
    @include('sweetalert::alert')




</body>

</html>
