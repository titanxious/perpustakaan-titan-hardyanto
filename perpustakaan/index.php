<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;

            /* 🔥 GANTI URL GAMBAR DI SINI */
            background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f') no-repeat center center/cover;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* overlay biar tulisan jelas */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            top: 0;
            left: 0;
        }

        .login-card {
            position: relative;
            background: rgba(255,255,255,0.95);
            padding: 30px;
            width: 320px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            text-align: center;
        }

        .login-card h2 {
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0056b3;
        }

        .login-card p {
            margin-top: 10px;
            font-size: 13px;
        }

        .login-card a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>🔐 Login</h2>

    <form action="cek_login.php" method="post">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="Username" placeholder="Username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <p>Belum punya akun? <a href="#">Daftar</a></p>
</div>

</body>
</html>