<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="styles.css"> <!-- Hubungkan ke CSS eksternal -->
</head>
<body>
    <div class="container">
        <h1>Create User</h1>
        <img src="kucing.png" alt="Cute Kitten" class="cute-kitten"> <!-- Gambar kucing -->
        <form>
            <label for="username">Nama:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="email">NPM:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Kelas:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <button type="submit" class="submit-btn">Create User</button>
        </form>
    </div>
</body>
</html>