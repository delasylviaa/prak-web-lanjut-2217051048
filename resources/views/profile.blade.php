<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Card</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #bacdea;
        }

        .profile-card {
            background-color: #f990d2;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            width: 320px;
            text-align: center;
            padding: 25px;
        }

        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 auto 20px;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .profile-info {
            margin-top: 15px;
        }

        .profile-info td {
            padding: 10px 0;
        }

        .profile-info td:first-child {
            font-weight: bold;
            color: #151a3d;
        }

        .profile-info td:nth-child(2) {
            padding: 0 12px;
        }

        .profile-info td:last-child {
            color: #2a3e59;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-img">
            <img src="foto-saya.jpg" alt="Profile Image">
        </div>
        <table action="{{ route('user.store') }}" method="POST" class="profile-info">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>{{$kelas_id ?? 'Kelas tidak ditemukan'}}</td>
            </tr>
        </table>
    </div>
</body>
</html>