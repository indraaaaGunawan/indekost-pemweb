<!-- resources/views/detail.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $kosan->name }} - Detail Kosan</title>
    <!-- Tambahkan stylesheet atau link ke Bootstrap jika diperlukan -->
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
    </style>
</head>

<body>

    <!-- Bagian Header -->
    <header>
        <h1>{{ $kosan->name }} - Detail Kosan</h1>
    </header>

    <!-- Bagian Konten Utama -->
    <div class="main-content">
        <h2>{{ $kosan->name }}</h2>
        <p>{{ $kosan->description }}</p>
        <p><strong>Harga:</strong> Rp {{ $kosan->price }}/bulan</p>
        <p><strong>Fasilitas:</strong> {{ $kosan->facilities }}</p>

        <!-- Tambahkan elemen HTML sesuai dengan atribut kosan lainnya -->

        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Daftar Kosan</a>
    </div>

    <!-- Link ke script JavaScript (opsional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
