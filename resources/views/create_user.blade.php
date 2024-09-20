<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <style>
        /* Tambahkan style sederhana untuk form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container input, .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container button {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf <!-- Token keamanan Laravel untuk form -->
            
            <div>
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama">
            </div>

            <div>
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM">
            </div>

            <div>
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>