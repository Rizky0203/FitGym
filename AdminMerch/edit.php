<?php
session_start();
include '../koneksi.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query untuk mengambil data produk berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM tb_produk WHERE Id = $id");
$data = mysqli_fetch_assoc($result);

// Jika data produk ditemukan, tampilkan form untuk mengeditnya
if ($_POST) {
    $nama = $_POST['nama'];
    $desk = $_POST['deskripsi'];
    $varian = $_POST['varian'];
    $harga = $_POST['harga'];

    // Update data produk di database
    $update = "UPDATE tb_produk SET 
               Nama_produk = '$nama', 
               Deskripsi_produk = '$desk', 
               Varian = '$varian', 
               Harga = '$harga' 
               WHERE Id = $id";
    mysqli_query($conn, $update);

    // Redirect kembali ke halaman daftar produk
    header("Location: ../Admin/admin_dashboard.php");
    exit;
}
?>

<h2>Edit Produk</h2>
<form method="post">
    Nama Produk: <input name="nama" value="<?= $data['Nama_produk'] ?>" required><br>
    Deskripsi: <textarea name="deskripsi"><?= $data['Deskripsi_produk'] ?></textarea><br>
    Varian: <input name="varian" value="<?= $data['Varian'] ?>" required><br>
    Harga: <input type="number" name="harga" value="<?= $data['Harga'] ?>" required><br>
    <button type="submit">Update</button>
</form>
