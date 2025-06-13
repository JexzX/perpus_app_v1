<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Teknologi Informasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }

    .welcome-container {
        width: 100%;
        max-width: 800px;
        margin: 100px auto 0;
        /* naikin margin atas buat dorong konten ke bawah, aslinya 20px */
        padding: 0px;
    }

    h1 {
        color: #2c3e50;
        font-size: 2.2rem;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .welcome-message {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .login-btn {
        display: inline-block;
        background: #3498db;
        color: white;
        padding: 12px 35px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.3s;
        margin-top: 30px;
    }

    .login-btn:hover {
        background: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Selamat Datang di Perpustakaan Teknologi Informasi</h1>
        <p class="welcome-message">
            Kami menyediakan berbagai koleksi buku dan materi digital terkait teknologi informasi<br>
            untuk mendukung pembelajaran Anda.
        </p>
        <a href="Login" class="login-btn">Login</a>
    </div>
</body>

</html>