<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: Login/Login2.php");
    exit;
}

if ($_POST) {

    $nama = $_POST['nama'];
    $desk = $_POST['deskripsi'];
    $varian = $_POST['varian'];
    $harga = $_POST['harga'];
    $id_user = $_SESSION['id_user'];  // Pastikan session id_user ada
    $tanggal = date('Y-m-d');

    // Mendefinisikan query SQL
    $query = "INSERT INTO tb_produk (Nama_produk, Deskripsi_produk, Varian, Harga, ID_user, Tanggal_input) 
          VALUES ( '$nama', '$desk', '$varian', '$harga', '$id_user', '$tanggal')";

    // Mengecek apakah query valid sebelum dijalankan
    if ($query != '') {
        if (mysqli_query($conn, $query)) {
            // Jika berhasil, arahkan ke index.php
            header("Location: ../Admin/admin_dashboard.php");
            exit;
        } else {
            // Jika gagal, tampilkan error query
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Query kosong!";
    }
}
?>

<h2>Tambah Produk</h2>
<form method="post">
    Nama Produk: <input name="nama" required><br>
    Deskripsi: <textarea name="deskripsi"></textarea><br>
    Varian: <input name="varian" required><br>
    Harga: <input type="number" name="harga" required><br>
    <button type="submit">Simpan</button>
</form>


