<?php
session_start();
include '../koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $result = mysqli_query($conn, "SELECT * FROM tabel_user WHERE email='$email' AND role='$role'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id_user'] = $user['id']; 

        if ($user['role'] == 'admin') {
            header("Location: ../Admin/admin_dashboard.php");
        } else {
            header("Location: ../index.php");
        }
        exit;
    } else {
        echo "<script>alert('Email, password, atau role salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- sisa HTML form login kamu di sini -->

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
        <h1>Login FitGym</h1>
        <form action="#" method="post">
          
           
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="" disabled selected>Select a role</option>
                <option value="user">Customer</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Join</button>
        </form>
        <a href="Register.php">Dont have an account? Register here</a>
    </div>
</body>
</html>