<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Create User</h1>
        <img src="{{ asset('assets/imgkucing.png) }}" alt="Cute Kitten" class=".cute-kitten"> <!-- Gambar kucing -->
        <form>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Enter your name">

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Enter your npm">

            <label for="kelas">Kelas:</label>
            <input type="kelas" id="kelas" name="kelas" placeholder="Enter your class">

            <button type="submit" class="submit-btn">Create User</button>
        </form>
    </div>
</body>
</html>
