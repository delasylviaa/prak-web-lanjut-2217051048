<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('assets/img/kucing.png') }}"alt="cute kitten" class=".cute-kitten">
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
