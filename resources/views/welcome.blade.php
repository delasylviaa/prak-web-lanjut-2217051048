<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <!-- Memuat file CSS dari assets/css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Tambahan CSS internal untuk layout baru */
        .profile-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 40px auto;
        }

        .profile-container img {
            display: block;
            margin: 0 auto;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-info {
            text-align: left;
            margin-top: 20px;
        }

        .profile-info p {
            font-size: 18px;
            margin: 5px 0;
        }

        /* Style yang ada dari awal tidak berubah */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Selamat Datang di Laravel!</h1>
        <p>Ini adalah aplikasi Laravel yang berjalan.</p>

        <!-- Bagian baru yang ditambahkan: Profile Section -->
        <div class="profile-container">
            <!-- Gambar profil berada di tengah -->
            <img src="{{ asset('assets/img/kuceng.jpg') }}" alt="Gambar Profile">

            <!-- Informasi pengguna (Nama, Kelas, NPM) -->
            <div class="profile-info">
                <p><strong>Nama:</strong> John Doe</p>
                <p><strong>Kelas:</strong> IF-41-08</p>
                <p><strong>NPM:</strong> 123456789</p>
            </div>
        </div>
    </div>

    <!-- Memuat file JS dari assets/js (jika diperlukan) -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>