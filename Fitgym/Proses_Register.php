<?php
include 'koneksi.php'; // Hubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email    = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke tabel users
    $sql = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
