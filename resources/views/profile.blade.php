<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 400px;
            margin: 50px auto;
            text-align: center;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #e0e0e0;
            margin-bottom: 20px;
        }
        .profile-info {
            margin: 10px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <!-- Gambar Profil -->
        <div class="profile-image">
            <!-- Ganti URL gambar dengan yang asli jika ada -->
            <img src="https://via.placeholder.com/150" alt="Profile Image" class="img-fluid rounded-circle">
        </div>

        <!-- Informasi Profil -->
        <div class="profile-info">
            <h3>{{ $nama }}</h3>
        </div>
        <div class="profile-info">
            <h3>{{ $kelas }}</h3>
        </div>
        <div class="profile-info">
            <h3>{{ $npm }}</h3>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
