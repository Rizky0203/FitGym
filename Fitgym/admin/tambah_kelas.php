<?php
include '../includes/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "INSERT INTO kelas (nama_kelas, deskripsi) VALUES ('$nama', '$deskripsi')");
    header("Location: daftar_kelas.php");
}
?>

<h2>Tambah Kelas</h2>
<form method="POST">
    <label>Nama Kelas:</label><br>
    <input type="text" name="nama"><br><br>
    <label>Deskripsi:</label><br> 
    <textarea name="deskripsi"></textarea><br><br>
    <button type="submit" name="submit">Simpan</button>
</form>
