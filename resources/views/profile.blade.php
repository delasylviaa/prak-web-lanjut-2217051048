<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Memuat CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 400px;
            margin: 50px auto;
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #e0e0e0;
            margin-bottom: 20px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-image img {
            width: 100%;
            height: auto;
        }
        .profile-info {
            margin: 10px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 10px;
        }
        .profile-info h3 {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <!-- Gambar Profil -->
            <div class="profile-image">
                <!-- Ganti URL gambar di sini dengan fotomu -->
                <img src="{{ asset('images/foto-saya.jpg') }}" alt="Profile Image">
            </div>

            <!-- Informasi Profil -->
            <div class="profile-info">
                <h3>Nama: {{ $profile['nama'] }}</h3>
            </div>
            <div class="profile-info">
                <h3>Kelas: {{ $profile['kelas'] }}</h3>
            </div>
            <div class="profile-info">
                <h3>NPM: {{ $profile['npm'] }}</h3>
            </div>
        </div>
    </div>

    <!-- Memuat Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>