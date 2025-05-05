<?php
include '../includes/koneksi.php'; // Pastikan koneksi ke database

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id']; // Ambil id kelas yang akan dihapus

    // Query untuk menghapus kelas berdasarkan ID
    $delete_query = "DELETE FROM kelas WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($conn, $delete_query)) {
        // Setelah berhasil, arahkan kembali ke daftar kelas
        header("Location: ../admin/daftar_kelas.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn); // Jika query gagal
    }
} else {
    echo "ID kelas tidak ditemukan"; // Jika tidak ada ID yang dikirim
}
?>
