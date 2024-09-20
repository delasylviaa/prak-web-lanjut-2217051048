<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="styles.css"> <!-- Hubungkan dengan file CSS eksternal -->
</head>
<body>
    <div class="container">
        <h1>Create User</h1>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <button type="submit" class="submit-btn">Create User</button>
        </form>
    </div>
</body>
</html>