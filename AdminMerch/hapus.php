<?php
session_start();
include '../koneksi.php';

// Cek apakah user sudah login dan memiliki role admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Login/Login2.php");
    exit;
}

// Cek apakah ada ID yang diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus produk berdasarkan ID
    $query = "DELETE FROM tb_produk WHERE Id=$id";
    
    if (mysqli_query($conn, $query)) {
        // Jika berhasil, arahkan kembali ke halaman admin (index.php)
        header("Location: ../Admin/admin_dashboard.php");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika ID tidak ditemukan, tampilkan pesan error
    echo "ID produk tidak ditemukan.";
}
?>
