<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Ambil input dan bersihkan (opsional: tambahkan filter validasi)
    $nama = trim($_POST['full-name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $role = $_POST['role'];
    $status = 'free'; // Nilai default atau bisa diubah ke 'inactive' atau 'pending'

    // Cek apakah email sudah terdaftar
    $cek = mysqli_prepare($conn, "SELECT id FROM tabel_user WHERE email = ?");
    mysqli_stmt_bind_param($cek, "s", $email);
    mysqli_stmt_execute($cek);
    mysqli_stmt_store_result($cek);

    if (mysqli_stmt_num_rows($cek) > 0) {
        echo "<script>alert('Email sudah digunakan!');</script>";
    } else {
        // Gunakan prepared statement untuk keamanan
        $stmt = mysqli_prepare($conn, "INSERT INTO tabel_user (nama, phone, email, username, password, role, status_membership) VALUES (?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssssss", $nama, $phone, $email, $username, $password, $role, $status);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='Login2.php';</script>";
            exit;
        } else {
            echo "Gagal registrasi: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_stmt_close($cek);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership FitGym</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),
                url('https://i.pinimg.com/736x/90/4e/ac/904eac957d1776d887e4e9e797d79284.jpg') no-repeat center center/cover;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 350px;
        }

        .login-container h1 {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .login-container p {
            font-size: 16px;
            margin-bottom: 25px;
        }

        .login-container input,
        .login-container select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            font-size: 15px;
        }

        .login-container input::placeholder {
            color: #ddd;
        }

        .login-container select {
            color: #ddd;
        }

        .login-container select option {
            color: #333;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-container button:hover {
            background: #218838;
        }

        .login-container a {
            color: #6C63FF;
            text-decoration: none;
            font-size: 14px;
            margin-top: 15px;
            display: inline-block;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }

            .login-container h1 {
                font-size: 22px;
            }

            .login-container p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Join FitGym</h1>
        <p>Sign up now and enjoy exclusive benefits to stay fit and healthy!</p>
        <form action="register.php" method="post">
            <input type="text" name="full-name" placeholder="Full Name" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="username" placeholder="Username" required> <!-- Pastikan field username ada -->
            <input type="password" name="password" placeholder="Create Password" required>
            <select name="role" required>
                <option value="" disabled selected>Select a role</option>
                <option value="user">Customer</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Join Now</button>
        </form>
        <a href="Login2.php">Already have an account? Login here</a>
    </div>
</body>
</html>
